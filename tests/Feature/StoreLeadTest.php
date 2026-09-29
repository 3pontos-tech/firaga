<?php

declare(strict_types=1);

use App\Enums\ContactWindow;
use App\Enums\FinancialGoal;
use App\Enums\FinancialSituation;
use App\Http\Middleware\CaptureLeadAttribution;
use App\Jobs\SyncLeadWithGoHighLevel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Str;

use function Pest\Laravel\postJson;

beforeEach(function (): void {
    Queue::fake();
    Http::preventStrayRequests();
});

/**
 * @param  array<string, mixed>  $overrides
 * @return array<string, mixed>
 */
function leadPayload(array $overrides = []): array
{
    return [
        'submission_id' => (string) Str::uuid(),
        'context' => 'modal',
        'situation' => FinancialSituation::Saving->value,
        'goal' => FinancialGoal::BuildWealth->value,
        'availability' => ContactWindow::Morning->value,
        'name' => '  Gabriel  Souza ',
        'email' => 'Gabriel@3pontos.com',
        'phone' => '(11) 91234-5678',
        'origin_page' => '/nossos-servicos',
        'origin_label' => 'Quero o plano Gold',
        'destination' => 'https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es+sobre+o+plano+gold&type=phone_number&app_absent=0',
        ...$overrides,
    ];
}

it('accepts the lead without waiting for GoHighLevel and queues the sync', function (): void {
    postJson(route('leads.store'), leadPayload())->assertAccepted();

    Queue::assertPushed(SyncLeadWithGoHighLevel::class, fn (SyncLeadWithGoHighLevel $job): bool => $job->lead->firstName === 'Gabriel'
        && $job->lead->email === 'gabriel@3pontos.com'
        && $job->lead->phone === '+5511912345678'
        && $job->lead->goal === FinancialGoal::BuildWealth
        && $job->lead->originPage === '/nossos-servicos'
        && $job->lead->originLabel === 'Quero o plano Gold');

    Http::assertNothingSent();
});

it('does not queue the same submission twice when the request is resent', function (): void {
    $payload = leadPayload();

    postJson(route('leads.store'), $payload)->assertAccepted();
    postJson(route('leads.store'), $payload)->assertAccepted();

    Queue::assertPushed(SyncLeadWithGoHighLevel::class, 1);
});

it('sends the entry campaign parameters stored in the session along with the lead', function (): void {
    $this->withSession([CaptureLeadAttribution::SESSION_KEY => ['utm_source' => 'google', 'gclid' => 'Cj0KCQjw_abc-123']]);

    postJson(route('leads.store'), leadPayload())->assertAccepted();

    Queue::assertPushed(SyncLeadWithGoHighLevel::class, fn (SyncLeadWithGoHighLevel $job): bool => $job->lead->resolvedAttribution() === ['utm_source' => 'google', 'gclid' => 'Cj0KCQjw_abc-123']);
});

it('records visits without campaign as direct traffic with an explicit value', function (): void {
    postJson(route('leads.store'), leadPayload())->assertAccepted();

    Queue::assertPushed(SyncLeadWithGoHighLevel::class, fn (SyncLeadWithGoHighLevel $job): bool => $job->lead->resolvedAttribution() === ['utm_source' => '(direct)', 'utm_medium' => '(none)']);
});

it('rejects invalid Brazilian phone numbers', function (string $phone): void {
    postJson(route('leads.store'), leadPayload(['phone' => $phone]))
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['phone' => 'Digite um telefone válido com DDD.']);

    Queue::assertNothingPushed();
})->with([
    'sem DDD' => '91234-5678',
    'dígitos insuficientes' => '11 1234-567',
    'DDD inválido' => '(01) 91234-5678',
]);

it('rejects answers outside of the quiz options', function (): void {
    postJson(route('leads.store'), leadPayload(['situation' => 'rich', 'goal' => null, 'availability' => 'dawn']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors(['situation', 'goal', 'availability']);
});

it('logs when the modal had to fall back to the default WhatsApp link', function (): void {
    Log::spy();

    postJson(route('leads.store'), leadPayload(['destination' => 'javascript:alert(1)']))->assertAccepted();

    Log::shouldHaveReceived('warning')->withArgs(fn (string $message): bool => str_contains($message, 'fell back to the default WhatsApp link'))->once();
});

it('accepts inline quiz submissions without a destination and without logging a fallback', function (): void {
    Log::spy();

    postJson(route('leads.store'), leadPayload(['context' => 'inline', 'destination' => null, 'origin_page' => '/']))->assertAccepted();

    Queue::assertPushed(SyncLeadWithGoHighLevel::class);
    Log::shouldNotHaveReceived('warning');
});
