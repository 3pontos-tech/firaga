<?php

declare(strict_types=1);

it('renders the lead quiz section on the home page', function (): void {
    $this->get('/')
        ->assertOk()
        ->assertSee('Descubra o plano ideal para você em 30 segundos')
        ->assertSee('Responda abaixo e um consultor entra em contato no horário que você escolher')
        ->assertSee('Fire|ce')
        ->assertSee('Perfeito! Vou te conectar agora com um consultor que trabalha com o seu perfil.')
        ->assertSee('Abrir conversa no WhatsApp');
});

it('lays the quiz on the left and the photo in the Figma 841/590 frame on the right', function (): void {
    $response = $this->get('/');

    $response->assertOk();

    preg_match('/<section[^>]*id="quiz".*?<\/section>/s', (string) $response->getContent(), $matches);

    expect($matches)->not->toBeEmpty();

    $section = $matches[0];

    expect($section)
        ->toContain('md:flex-row')
        ->and($section)
        ->toContain('md:basis-[51.3%]')
        ->and($section)
        ->toContain('md:basis-[46.9%]')
        ->and($section)
        ->toContain('images/home_imagem_3.webp')
        ->and($section)
        ->toContain('aspect-841/590');

    // A foto não é mais esticada até a altura do card do quiz.
    expect($section)->not->toContain('max-w-xl')->not->toContain('absolute inset-0 h-full w-full');

    expect(mb_strpos($section, 'leadQuiz({'))->toBeLessThan(mb_strpos($section, 'home_imagem_3.webp'));
});

it('does not overlay the organic cutout on a photo that already carries it in its alpha', function (): void {
    $content = (string) $this->get('/')->assertOk()->getContent();

    preg_match('/<section[^>]*id="quiz".*?<\/section>/s', $content, $quiz);

    expect($quiz)->not->toBeEmpty();
    expect($quiz[0])->not->toContain('viewBox="0 0 732 640"');

    // O vídeo do hero não tem canal alpha, então lá o SVG continua sendo necessário.
    expect(mb_substr_count($content, 'viewBox="0 0 732 640"'))->toBe(1);
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
