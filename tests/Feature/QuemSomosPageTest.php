<?php

declare(strict_types=1);

use App\Models\CMS\Post;

it('exibe a página quem somos', function (): void {
    $this->get('/quem-somos')
        ->assertOk()
        ->assertSee('Estratégia hoje')
        ->assertSee('O futuro que queremos construir')
        ->assertSee('O que sustenta nossa atuação')
        ->assertSee('em números')
        ->assertSee('Conteúdo que');
});

it('exibe a seção de números da Fire|ce', function (): void {
    $this->get('/quem-somos')
        ->assertOk()
        ->assertSee('em números')
        ->assertSee('+2000')
        ->assertSee('Clientes')
        ->assertSee('50')
        ->assertSee('Consultores ativos')
        ->assertSee('+5000')
        ->assertSee('Consultorias feitas');
});

it('não corta palavras no meio nos títulos dos pilares', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    foreach (
        ['Educação', 'Transparência', 'Desenvolvimento contínuo', 'Compromisso com o cliente', 'Visão de longo prazo'] as $title
    ) {
        expect($content)->toContain('<h3 class="fr-heading text-md break-normal">'.$title.'</h3>');
    }
});

it('usa raio de 12px e borda clara nos cards de números', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    preg_match_all('/<div\s+class="bg-brand-primary[^"]*text-center"/s', $content, $matches);

    expect($matches[0])->toHaveCount(3);

    expect($matches[0])->each->toContain('rounded-md')->toContain('border-outline-light');
});

it('renomeia a seção do blog para "Conteúdo que transforma"', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    expect($content)
        ->toContain('Conteúdo que <mark>transforma</mark>')
        ->and($content)
        ->toContain('Acesse os conteúdos que nossos especialistas prepararam')
        ->and($content)
        ->not->toContain('Confira nosso')
        ->and($content)
        ->not->toContain('na mídia');
});

it('serve o vídeo vertical no mobile e o horizontal no desktop', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    preg_match_all('/<video[^>]*>\s*<source[^>]*>/s', $content, $matches);

    expect($matches[0])->toHaveCount(2);

    [$mobile, $desktop] = $matches[0];

    expect($mobile)
        ->toContain('firece-day-vertical.mp4')
        ->and($mobile)
        ->toContain('firece-day-vertical-poster.jpg')
        ->and($mobile)
        ->toContain('aspect-9/16')
        ->and($mobile)
        ->toContain('md:hidden');

    expect($desktop)
        ->toContain('firece-day-horizontal.mp4')
        ->and($desktop)
        ->toContain('firece-day-horizontal-poster.jpg')
        ->and($desktop)
        ->toContain('aspect-video')
        ->and($desktop)
        ->toContain('md:block');

    expect($matches[0])->each->toContain('preload="none"')->toContain('playsinline')->toContain('poster=');

    expect(mb_strpos($content, '<video'))->toBeLessThan(
        mb_strpos($content, 'Conteúdo que <mark>transforma</mark>'),
    );
});

it('usa a tipografia do design system nos blocos de missão, visão e pilares', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    expect($content)
        ->toContain('<h3 class="fr-heading text-md">Nossa Missão</h3>')
        ->and($content)
        ->toContain('<h3 class="fr-heading text-md break-normal">Visão de longo prazo</h3>');

    preg_match_all(
        '/<(?:p|h3)[^>]*class="[^"]*"[^>]*>(?:01|02|Nossa Missão|Educação)<\/(?:p|h3)>/u',
        $content,
        $matches,
    );

    expect($matches[0])->not->toBeEmpty();

    expect($matches[0])->each->toContain('fr-heading')->not->toContain('font-display');
});

it('pinta o primeiro card dos pilares com o gradiente sobre elevation-01', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    preg_match('/<div[^>]*class="dark[^"]*"[^>]*style="([^"]*)"[^>]*>/', $content, $matches);

    expect($matches)->not->toBeEmpty();

    $style = preg_replace('/\s+/', ' ', $matches[1]);

    expect($style)
        ->toContain('linear-gradient(270deg, rgba(253, 253, 253, 0) 0%, rgba(253, 253, 253, 0.12) 100%)')
        ->and($style)
        ->toContain('#121213');

    expect($matches[0])->not->toContain('bg-elevation-surface');
});

it('mostra o link Quem somos na navegação', function (): void {
    $this->get('/quem-somos')->assertOk()->assertSee(route('quem-somos'));
});

it('exibe os últimos posts publicados na seção de blog', function (): void {
    Post::factory()->create(['title' => 'Artigo Mais Recente', 'published_at' => now()]);

    $this->get('/quem-somos')->assertOk()->assertSeeText('Artigo Mais Recente');
});

it('recorta a arte do hero na proporção da coluna do design', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    preg_match('/<div[^>]*aspect-568\/561[^>]*>\s*<img[^>]*>/s', $content, $matches);

    expect($matches)->not->toBeEmpty();

    expect($matches[0])->toContain('max-w-[568px]')->toContain('overflow-hidden')->toContain('object-cover');
});

it('divide o hero em 57,5% de texto e 42,5% de imagem, sem gap no desktop', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    expect($content)
        ->toContain('md:basis-[57.5%]')
        ->and($content)
        ->toContain('md:basis-[42.5%]')
        ->and($content)
        ->not->toContain('md:basis-3/5');
});

it('limita as descrições centralizadas a 800px', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    expect(mb_substr_count($content, 'max-w-[800px]!'))->toBe(2);
});

it('usa o número dos pilares em 36px em todos os breakpoints', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    preg_match_all('/<p class="fr-heading text-brand-primary! text-xl">0[1-5]<\/p>/', $content, $matches);

    expect($matches[0])->toHaveCount(5);
});

it('usa Syne em 24px nos rótulos dos cards de números', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    foreach (['Clientes', 'Consultores ativos', 'Consultorias feitas'] as $label) {
        expect($content)->toContain('<p class="fr-heading text-text-light! text-md leading-normal">'.$label.'</p>');
    }
});

it('separa o vídeo do bloco de conteúdo em seções próprias', function (): void {
    $content = (string) $this->get('/quem-somos')->assertOk()->getContent();

    expect($content)
        ->toContain('<section id="video" class="section">')
        ->and($content)
        ->toContain('<section id="conteudo" class="section">');
});
