<?php

declare(strict_types=1);

use App\Models\CMS\Menu;
use App\Models\Term;

beforeEach(function (): void {
    Menu::query()->create(['title' => 'Main Menu', 'slug' => 'main-menu']);
});

it('displays an active term with its sections', function (): void {
    $term = Term::factory()->create([
        'title' => 'Política de Privacidade',
        'slug' => 'politica-de-privacidade',
        'description' => 'Nossa política de privacidade.',
        'content' => [
            [
                'id' => 'introducao',
                'title' => 'Introdução',
                'body' => '<p>Texto da introdução.</p>',
                'show_in_sidebar' => true,
            ],
            [
                'id' => 'coleta-de-dados',
                'title' => 'Coleta de Dados',
                'body' => '<p>Texto sobre coleta de dados.</p>',
                'show_in_sidebar' => true,
            ],
        ],
        'is_active' => true,
    ]);

    $response = $this->get('/terms/'.$term->slug);

    $response->assertSuccessful()
        ->assertSee('Política de Privacidade')
        ->assertSee('Texto da introdução.')
        ->assertSee('Texto sobre coleta de dados.');
});

it('returns 404 for an inactive term', function (): void {
    $term = Term::factory()->inactive()->create();

    $response = $this->get('/terms/'.$term->slug);

    $response->assertNotFound();
});

it('returns 404 for a non-existent slug', function (): void {
    $response = $this->get('/terms/non-existent-slug');

    $response->assertNotFound();
});

it('renders sidebar navigation for sections with show_in_sidebar enabled', function (): void {
    $term = Term::factory()->create([
        'content' => [
            [
                'id' => 'visible-section',
                'title' => 'Seção Visível',
                'body' => '<p>Conteúdo visível.</p>',
                'show_in_sidebar' => true,
            ],
            [
                'id' => 'hidden-section',
                'title' => 'Seção Oculta',
                'body' => '<p>Conteúdo oculto.</p>',
                'show_in_sidebar' => false,
            ],
        ],
    ]);

    $response = $this->get('/terms/'.$term->slug);

    $response->assertSuccessful()
        ->assertSee('Seção Visível')
        ->assertSee('Conteúdo oculto.');
});

it('generates the correct named route', function (): void {
    $term = Term::factory()->create(['slug' => 'termos-de-uso']);

    $url = route('terms.show', $term->slug);

    expect($url)->toContain('/terms/termos-de-uso');
});

it('displays active term links in the footer', function (): void {
    $activeTerm = Term::factory()->create([
        'title' => 'Termos de Uso',
        'slug' => 'termos-de-uso',
        'is_active' => true,
    ]);

    Term::factory()->inactive()->create([
        'title' => 'Termo Inativo',
        'slug' => 'termo-inativo',
    ]);

    $response = $this->get('/terms/'.$activeTerm->slug);

    $response->assertSuccessful()
        ->assertSee('Termos de Uso')
        ->assertDontSee('Termo Inativo');
});
