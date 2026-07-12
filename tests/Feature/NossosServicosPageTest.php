<?php

declare(strict_types=1);

it('exibe a página nossos serviços', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('Como podemos')
        ->assertSee('benefício corporativo')
        ->assertSee('Como funciona?')
        ->assertSee('O que muda na sua vida quando existe planejamento financeiro?')
        ->assertSee('Qual é o seu momento?')
        ->assertSee('Seu dinheiro organizado com IA')
        ->assertSee('Atendimento premium')
        ->assertSee('Educa Fire');
});

it('mostra os três perfis de plano', function (): void {
    $this->get(route('nossos-servicos'))
        ->assertOk()
        ->assertSee('Perfil Gold')
        ->assertSee('Perfil Platinum')
        ->assertSee('Perfil Black');
});
