<?php

declare(strict_types=1);

it('renders the lead quiz section on the home page', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee('3 perguntas, 30 segundos')
        ->assertSee('Responda abaixo e um consultor entra em contato no horário que você escolher')
        ->assertSee('Firece')
        ->assertSee('Perfeito! Vou te conectar agora com um consultor que trabalha com o seu perfil.')
        ->assertSee('Abrir conversa no WhatsApp');
});

it('lays the quiz on the left and the photo with the organic cutout on the right', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="quiz".*?<\/section>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $section = $matches[0];

    expect($section)
        ->toContain('md:flex-row')
        ->and($section)
        ->toContain('md:basis-1/2')
        ->and($section)
        ->toContain('images/woman-with-phone.jpg')
        ->and($section)
        ->toContain('viewBox="0 0 732 640"')
        ->and($section)
        ->toContain('text-elevation-surface');

    expect($section)->not->toContain('max-w-xl');

    expect(mb_strpos($section, 'leadQuiz({'))->toBeLessThan(mb_strpos($section, 'woman-with-phone.jpg'));
});

it('reuses the same organic cutout on the hero video and on the quiz photo', function (): void {
    $content = (string) $this->get('/')->assertOk()->getContent();

    expect(mb_substr_count($content, 'viewBox="0 0 732 640"'))->toBe(2);
});

it('wires all 4 questions and the WhatsApp number into the Alpine quiz state', function (): void {
    // The quiz copy is rendered client-side by Alpine: step config only exists as JSON
    // inside x-data="leadQuiz(...)". Blade's @js() applies JSON_HEX_QUOT, so every
    // double quote in the payload becomes the literal escape sequence \u0022
    $this->get('/')
        ->assertOk()
        ->assertSee('x-data="leadQuiz({', false)
        ->assertSee('\u0022key\u0022:\u0022situation\u0022', false)
        ->assertSee('\u0022key\u0022:\u0022availability\u0022', false)
        ->assertSee('\u0022key\u0022:\u0022name\u0022', false)
        ->assertSee('\u0022key\u0022:\u0022email\u0022', false)
        ->assertSee('\u0022type\u0022:\u0022choice\u0022', false)
        ->assertSee("phone: '5511958397432'", false);
});
