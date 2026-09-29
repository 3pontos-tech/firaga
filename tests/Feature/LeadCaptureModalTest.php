<?php

declare(strict_types=1);

use App\View\LeadQuiz;
use Illuminate\Support\Js;

dataset('pages with WhatsApp links', [
    'home' => ['/', 6],
    'nossos serviços' => ['/nossos-servicos', 5],
    'key account' => ['/key-account', 2],
    'code capital' => ['/code-capital', 3],
    'quem somos (footer only)' => ['/quem-somos', 0],
]);

/**
 * @return list<string>
 */
function whatsappAnchors(string $html): array
{
    preg_match_all('/<a\b[^>]*href="https:\/\/api\.whatsapp\.com\/send[^"]*"[^>]*>/s', $html, $matches);

    return $matches[0];
}

it('renders the capture modal on every page and keeps each WhatsApp link interceptable', function (string $uri, int $pageLinks): void {
    $content = (string) $this->get($uri)->assertOk()->getContent();

    expect(mb_substr_count($content, 'data-lead-capture-modal'))->toBe(1)
        ->and($content)->toContain("context: 'modal'")
        ->and($content)->toContain('role="dialog"')
        ->and($content)->toContain('aria-modal="true"');

    $anchors = whatsappAnchors($content);

    // Page links plus the two footer links, all keeping their original href as no-JS fallback.
    expect($anchors)->toHaveCount($pageLinks + 2);

    expect($anchors)->each->not->toContain('data-lead-capture-exempt');
})->with('pages with WhatsApp links');

it('never exposes the GoHighLevel credentials to the browser', function (): void {
    config()->set('services.gohighlevel.token', 'pit-super-secret-token');
    config()->set('services.gohighlevel.location_id', 'location-abc-123');
    config()->set('services.gohighlevel.calendar_id', 'calendar-xyz-789');

    $content = (string) $this->get('/')->assertOk()->getContent();

    expect($content)
        ->not->toContain('pit-super-secret-token')
        ->not->toContain('location-abc-123')
        ->not->toContain('calendar-xyz-789');
});

it('gives the modal the default WhatsApp link as fallback destination and the lead endpoint', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee("fallbackUrl: 'https:\/\/api.whatsapp.com\/send\/?phone=5511958397432", false)
        ->assertSee("endpoint: '\/leads'", false);
});

it('feeds the modal with the same step configuration as the inline quiz', function (): void {
    $this->get('/nossos-servicos')
        ->assertOk()
        ->assertSee('steps: '.Js::from(LeadQuiz::steps())->toHtml(), false);
});

it('asks for the phone with a tel input after the email step', function (): void {
    $phone = collect(LeadQuiz::steps())->last();

    expect($phone)->toMatchArray(['key' => 'phone', 'type' => 'tel', 'label' => 'Telefone']);
});
