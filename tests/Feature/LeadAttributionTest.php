<?php

declare(strict_types=1);

use App\Http\Middleware\CaptureLeadAttribution;

it('persists the allowlisted campaign parameters of the landing request in the session', function (): void {
    $this->get('/?utm_source=google&utm_medium=cpc&utm_campaign=planejamento&utm_content=banner&utm_term=consultoria&gclid=Cj0KCQjw-long_Click.Id~123&gbraid=0AAAAA&wbraid=1BBBB')
        ->assertOk()
        ->assertSessionHas(CaptureLeadAttribution::SESSION_KEY, [
            'utm_source' => 'google',
            'utm_medium' => 'cpc',
            'utm_campaign' => 'planejamento',
            'utm_content' => 'banner',
            'utm_term' => 'consultoria',
            'gclid' => 'Cj0KCQjw-long_Click.Id~123',
            'gbraid' => '0AAAAA',
            'wbraid' => '1BBBB',
        ]);
});

it('keeps the first-touch attribution while the visitor navigates without parameters', function (): void {
    $this->get('/?utm_source=meta&utm_campaign=lancamento')->assertOk();
    $this->get('/nossos-servicos')->assertOk();
    $this->get('/key-account?utm_source=newsletter')->assertOk()
        ->assertSessionHas(CaptureLeadAttribution::SESSION_KEY, [
            'utm_source' => 'meta',
            'utm_campaign' => 'lancamento',
        ]);
});

it('discards parameters outside of the allowlist', function (): void {
    $this->get('/?utm_source=google&email=pessoa@example.com&fbclid=abc&utm_campaign=')
        ->assertOk()
        ->assertSessionHas(CaptureLeadAttribution::SESSION_KEY, ['utm_source' => 'google']);
});

it('stores nothing for direct visits', function (): void {
    $this->get('/')->assertOk()->assertSessionMissing(CaptureLeadAttribution::SESSION_KEY);
});
