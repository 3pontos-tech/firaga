<?php

declare(strict_types=1);

it('renders the PostHog snippet on landing pages when the api key is configured', function (): void {
    config()->set('services.posthog.api_key', 'phc_test_key');
    config()->set('services.posthog.host', 'https://eu.i.posthog.com');

    $response = $this->get('/');

    $response->assertOk();

    expect((string) $response->getContent())
        ->toContain("posthog.init('phc_test_key'")
        ->toContain("api_host: 'https://eu.i.posthog.com'");
});

it('falls back to the default PostHog host when POSTHOG_HOST is not set', function (): void {
    config()->set('services.posthog.api_key', 'phc_test_key');

    $response = $this->get('/');

    $response->assertOk();

    expect((string) $response->getContent())
        ->toContain("api_host: 'https://us.i.posthog.com'");
});

it('does not render the PostHog snippet when the api key is missing', function (): void {
    config()->set('services.posthog.api_key');

    $response = $this->get('/');

    $response->assertOk();

    expect((string) $response->getContent())->not->toContain('posthog.init');
});
