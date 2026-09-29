<?php

declare(strict_types=1);

use App\Actions\Leads\LeadData;
use App\Enums\ContactWindow;
use App\Enums\FinancialGoal;
use App\Enums\FinancialSituation;
use App\Jobs\CreateLeadAppointment;
use App\Jobs\CreateLeadOpportunity;
use App\Jobs\SyncLeadWithGoHighLevel;
use Carbon\CarbonImmutable;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;

const GHL = 'https://services.leadconnectorhq.com';

beforeEach(function (): void {
    Http::preventStrayRequests();

    config()->set('services.gohighlevel.token', 'pit-test-token');
    config()->set('services.gohighlevel.location_id', 'loc-123');
    config()->set('services.gohighlevel.pipeline_id', 'pipe-1');
    config()->set('services.gohighlevel.pipeline_stage_id', 'stage-entry');
    config()->set('services.gohighlevel.calendar_id', 'cal-leads');
});

/**
 * @param  array<string, string>  $attribution
 */
function lead(array $attribution = [], ContactWindow $availability = ContactWindow::Morning): LeadData
{
    return new LeadData(
        submissionId: '6f1c1d9e-6a8f-4c5b-9f8e-2b0c2f3b8a11',
        context: 'modal',
        situation: FinancialSituation::InDebt,
        goal: FinancialGoal::PayOffDebts,
        availability: $availability,
        firstName: 'Gabriel',
        email: 'gabriel@3pontos.com',
        phone: '+5511912345678',
        originPage: '/nossos-servicos',
        originLabel: 'Quero o plano Gold',
        attribution: $attribution,
    );
}

/**
 * Runs the job handler in-process, since Queue::fake() would capture dispatch_sync().
 */
function runJob(object $job): void
{
    app()->call([$job, 'handle']);
}

/**
 * @param  list<array{key: string, field_value: string}>  $customFields
 * @return array<string, string>
 */
function fieldsByKey(array $customFields): array
{
    return collect($customFields)->pluck('field_value', 'key')->all();
}

describe('contact', function (): void {
    it('creates the contact server-side with answers, origin and campaign in custom fields', function (): void {
        Queue::fake();
        Http::fake([GHL.'/contacts/' => Http::response(['contact' => ['id' => 'contact-1']], 201)]);

        runJob(new SyncLeadWithGoHighLevel(lead(['utm_source' => 'google', 'utm_campaign' => 'planejamento', 'gclid' => 'Cj0KCQjw_abc-123'])));

        Http::assertSent(function (Request $request): bool {
            $fields = fieldsByKey($request['customFields']);

            return $request->method() === 'POST'
                && $request->url() === GHL.'/contacts/'
                && $request->hasHeader('Authorization', 'Bearer pit-test-token')
                && $request->hasHeader('Version', 'v3')
                && $request['locationId'] === 'loc-123'
                && $request['firstName'] === 'Gabriel'
                && $request['phone'] === '+5511912345678'
                && $request['source'] === 'FireSite - Modal WhatsApp'
                && $request['tags'] === ['firesite', 'lead-site-whatsapp']
                && $fields === [
                    'contact.situacao_financeira' => 'Tenho dívidas e quero sair delas',
                    'contact.objetivo_financeiro' => 'Sair das dívidas nos próximos meses',
                    'contact.melhor_horario' => 'Manhã (8h–12h)',
                    'contact.pagina_de_origem' => '/nossos-servicos',
                    'contact.botao_de_origem' => 'Quero o plano Gold',
                    'contact.utm_source' => 'google',
                    'contact.utm_campaign' => 'planejamento',
                    'contact.gclid' => 'Cj0KCQjw_abc-123',
                ];
        });

        Queue::assertPushed(CreateLeadOpportunity::class, fn (CreateLeadOpportunity $job): bool => $job->contactId === 'contact-1');
        Queue::assertPushed(CreateLeadAppointment::class, fn (CreateLeadAppointment $job): bool => $job->contactId === 'contact-1');
    });

    it('sends direct traffic explicitly and omits empty click ids', function (): void {
        Queue::fake();
        Http::fake([GHL.'/contacts/' => Http::response(['contact' => ['id' => 'contact-1']], 201)]);

        runJob(new SyncLeadWithGoHighLevel(lead()));

        Http::assertSent(fn (Request $request): bool => ($fields = fieldsByKey($request['customFields']))['contact.utm_source'] === '(direct)'
            && $fields['contact.utm_medium'] === '(none)'
            && !array_key_exists('contact.gclid', $fields)
            && !in_array('', $fields, true));
    });

    it('updates the existing contact instead of creating a duplicate, preserving first-touch attribution', function (): void {
        Queue::fake();
        Http::fake([
            GHL.'/contacts/' => Http::response(['statusCode' => 400, 'message' => 'This location does not allow duplicated contacts.', 'meta' => ['contactId' => 'existing-9', 'matchingField' => 'email']], 400),
            GHL.'/contacts/existing-9' => Http::response(['contact' => ['id' => 'existing-9']]),
            GHL.'/contacts/existing-9/tags' => Http::response(['tags' => ['firesite']], 201),
        ]);

        runJob(new SyncLeadWithGoHighLevel(lead(['utm_source' => 'meta'])));

        Http::assertSent(fn (Request $request): bool => $request->method() === 'PUT'
            && $request->url() === GHL.'/contacts/existing-9'
            && fieldsByKey($request['customFields'])['contact.objetivo_financeiro'] === 'Sair das dívidas nos próximos meses'
            && !array_key_exists('contact.utm_source', fieldsByKey($request['customFields'])));
        Http::assertSent(fn (Request $request): bool => $request->url() === GHL.'/contacts/existing-9/tags');
        Http::assertSentCount(3);

        Queue::assertPushed(CreateLeadOpportunity::class, fn (CreateLeadOpportunity $job): bool => $job->contactId === 'existing-9');
    });

    it('creates the contact without custom fields when the account rejects them, logging the divergence', function (): void {
        Queue::fake();
        Log::spy();
        Http::fake([
            GHL.'/contacts/' => Http::sequence()
                ->push(['statusCode' => 422, 'message' => ['customFields.0 field not found']], 422)
                ->push(['contact' => ['id' => 'contact-2']], 201),
        ]);

        runJob(new SyncLeadWithGoHighLevel(lead()));

        Http::assertSentCount(2);
        Http::assertSent(fn (Request $request): bool => $request['customFields'] === []);
        Log::shouldHaveReceived('warning')->withArgs(fn (string $message): bool => str_contains($message, 'custom fields'))->once();
        Queue::assertPushed(CreateLeadOpportunity::class, fn (CreateLeadOpportunity $job): bool => $job->contactId === 'contact-2');
    });

    it('throws on API outage so the queue retries with backoff and a bounded number of attempts', function (): void {
        Http::fake([GHL.'/contacts/' => Http::response(['message' => 'Service Unavailable'], 503)]);

        $job = new SyncLeadWithGoHighLevel(lead());

        expect(fn () => runJob($job))->toThrow(RequestException::class)
            ->and($job->tries)->toBe(5)
            ->and($job->backoff())->toBe([30, 120, 600, 1800]);
    });

    it('throws on network timeouts so a slow API is retried later', function (): void {
        Http::fake([GHL.'/contacts/' => fn () => throw new ConnectionException('cURL error 28: Operation timed out')]);

        expect(fn () => runJob(new SyncLeadWithGoHighLevel(lead())))->toThrow(ConnectionException::class);
    });

    it('logs the full payload for manual reprocessing once retries are exhausted', function (): void {
        Log::spy();

        new SyncLeadWithGoHighLevel(lead())->failed(new RuntimeException('boom'));

        Log::shouldHaveReceived('error')->withArgs(fn (string $message, array $context): bool => $context['lead']['email'] === 'gabriel@3pontos.com'
            && $context['lead']['goal'] === FinancialGoal::PayOffDebts->value)->once();
    });

    it('skips the sync and logs when the credentials are not configured', function (): void {
        Queue::fake();
        Log::spy();
        config()->set('services.gohighlevel.token');

        runJob(new SyncLeadWithGoHighLevel(lead()));

        Http::assertNothingSent();
        Queue::assertNothingPushed();
        Log::shouldHaveReceived('warning')->withArgs(fn (string $message): bool => str_contains($message, 'not configured'))->once();
    });
});

describe('opportunity', function (): void {
    it('opens an opportunity in the configured pipeline and entry stage', function (): void {
        Http::fake([
            GHL.'/opportunities/search*' => Http::response(['opportunities' => []]),
            GHL.'/opportunities/' => Http::response(['opportunity' => ['id' => 'opp-1']], 201),
        ]);

        runJob(new CreateLeadOpportunity('contact-1', lead()));

        Http::assertSent(fn (Request $request): bool => $request->method() === 'POST'
            && $request->url() === GHL.'/opportunities/'
            && $request->data() === [
                'locationId' => 'loc-123',
                'contactId' => 'contact-1',
                'pipelineId' => 'pipe-1',
                'pipelineStageId' => 'stage-entry',
                'name' => 'Site | /nossos-servicos | Gabriel',
                'status' => 'open',
                'source' => 'FireSite - Modal WhatsApp',
            ]);
    });

    it('does not open a second opportunity for a contact that already has one open in the pipeline', function (): void {
        Http::fake([GHL.'/opportunities/search*' => Http::response(['opportunities' => [['id' => 'opp-1', 'status' => 'open']]])]);

        runJob(new CreateLeadOpportunity('contact-1', lead()));

        Http::assertSentCount(1);
        Http::assertNotSent(fn (Request $request): bool => $request->method() === 'POST');
    });

    it('fails on its own so the queue retries it without touching the contact', function (): void {
        Http::fake([
            GHL.'/opportunities/search*' => Http::response(['opportunities' => []]),
            GHL.'/opportunities/' => Http::response(['message' => 'Internal error'], 500),
        ]);

        expect(fn () => runJob(new CreateLeadOpportunity('contact-1', lead())))->toThrow(RequestException::class);

        Http::assertNotSent(fn (Request $request): bool => str_contains($request->url(), '/contacts'));
    });

    it('is skipped with a log when the pipeline is not configured', function (): void {
        Log::spy();
        config()->set('services.gohighlevel.pipeline_id');

        runJob(new CreateLeadOpportunity('contact-1', lead()));

        Http::assertNothingSent();
        Log::shouldHaveReceived('warning')->once();
    });
});

describe('appointment', function (): void {
    it('books the contact request at the start of the chosen window on the next business day', function (ContactWindow $window, string $start, string $end): void {
        Http::fake([GHL.'/calendars/events/appointments' => Http::response(['id' => 'appt-1'], 201)]);

        // Wednesday, 2026-09-30 at 15:00 in São Paulo.
        $submittedAt = CarbonImmutable::parse('2026-09-30 15:00', ContactWindow::TIMEZONE);

        runJob(new CreateLeadAppointment('contact-1', lead(availability: $window), $submittedAt));

        Http::assertSent(fn (Request $request): bool => $request['calendarId'] === 'cal-leads'
            && $request['locationId'] === 'loc-123'
            && $request['contactId'] === 'contact-1'
            && $request['startTime'] === $start
            && $request['endTime'] === $end
            && $request['appointmentStatus'] === 'new'
            && $request['ignoreFreeSlotValidation'] === true
            && $request['ignoreDateRange'] === true
            && str_contains((string) $request['title'], 'Pedido de contato (não confirmado)')
            && str_contains((string) $request['title'], $window->label())
            && str_contains((string) $request['description'], 'não combinado'));
    })->with([
        'manhã' => [ContactWindow::Morning, '2026-10-01T08:00:00-03:00', '2026-10-01T12:00:00-03:00'],
        'tarde' => [ContactWindow::Afternoon, '2026-10-01T12:00:00-03:00', '2026-10-01T18:00:00-03:00'],
        'noite' => [ContactWindow::Evening, '2026-10-01T18:00:00-03:00', '2026-10-01T21:00:00-03:00'],
    ]);

    it('fails on its own without affecting contact or opportunity', function (): void {
        Http::fake([GHL.'/calendars/events/appointments' => Http::response(['message' => 'Calendar not found'], 404)]);

        expect(fn () => runJob(new CreateLeadAppointment('contact-1', lead(), CarbonImmutable::now())))->toThrow(RequestException::class);

        Http::assertSentCount(1);
    });

    it('is skipped with a log when the leads calendar is not configured', function (): void {
        Log::spy();
        config()->set('services.gohighlevel.calendar_id');

        runJob(new CreateLeadAppointment('contact-1', lead(), CarbonImmutable::now()));

        Http::assertNothingSent();
        Log::shouldHaveReceived('warning')->once();
    });
});
