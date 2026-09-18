<?php

declare(strict_types=1);

it('renders the Google Tag Manager snippet on landing pages when the container id is configured', function (): void {
    config()->set('services.google_tag_manager.container_id', 'GTM-MRZDNZ2M');

    $response = $this->get('/');

    $response->assertOk();

    expect((string) $response->getContent())
        ->toContain("'dataLayer', 'GTM-MRZDNZ2M'")
        ->toContain('https://www.googletagmanager.com/ns.html?id=GTM-MRZDNZ2M');
});

it('does not render the Google Tag Manager snippet when the container id is missing', function (): void {
    config()->set('services.google_tag_manager.container_id');

    $response = $this->get('/');

    $response->assertOk();

    expect((string) $response->getContent())
        ->not->toContain('googletagmanager.com');
});

it('no longer references the decommissioned container', function (): void {
    config()->set('services.google_tag_manager.container_id', 'GTM-MRZDNZ2M');

    $response = $this->get('/');

    $response->assertOk();

    expect((string) $response->getContent())->not->toContain('GTM-KTVLGCHG');
});
