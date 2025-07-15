<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class LandingController extends Controller
{
    public function __invoke()
    {
        $heading = 'Invista no futuro com inteligência e precisão';
        $testimonials = Testimonial::query()->inRandomOrder()->limit(4)->get();

        return view('welcome', [
            'heroData' => [
                'heading' => $heading,
                'subheading' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                'button_text' => 'Agende uma consultoria',
                'button_url' => '/blog',
            ],
            'solutions' => [
                [
                    'title' => 'Planejamento',
                    'description' => 'Três pacotes personalizados para organizar, expandir e maximizar suas finanças, garantindo controle e crescimento contínuo.',
                    'icon' => 'fas-bullseye',
                    'redirect_url' => route('page.show', ['page' => 'planejamento-personalizado']),
                ],
                [
                    'title' => 'Key Account',
                    'description' => 'Atendimento exclusivo para clientes estratégicos, com planejamento sucessório, investimentos internacionais e parcerias de alto impacto.',
                    'icon' => 'fas-crown',
                    'redirect_url' => route('page.show', ['page' => 'key-account']),
                ],
                [
                    'title' => 'Code Capital',
                    'description' => 'Consultoria especializada para profissionais de TI com ganhos em moeda estrangeira, focada em rentabilidade e proteção patrimonial.',
                    'icon' => 'fas-code',
                    'redirect_url' => route('page.show', ['page' => 'code-capital']),
                ],
                [
                    'title' => 'Educa Fire',
                    'description' => 'Vertente educacional para transformar clientes e capacitar consultores com conhecimento aplicado.',
                    'icon' => 'fas-graduation-cap',
                    'redirect_url' => route('page.show', ['page' => 'educa-fire']),
                ],
                [
                    'title' => 'Parcerias',
                    'description' => 'Conexões estratégicas para gerar resultados mais rápidos e eficazes por meio de alianças coorporativas.',
                    'icon' => 'fas-handshake',
                    'redirect_url' => route('page.show', ['page' => 'parcerias']),
                ],
            ],
            'plansData' => [
                [
                    'name' => 'gold',
                    'description' => 'Para quem está começando a organizar sua vida financeira e deseja mais tranquilidade.',
                    'items' => [
                        'Mapa financeiro',
                        'Planilha de fluxo de caixa',
                        'Planilha de patrimônio',
                        'Planejamento anual',
                        'Construção de Reserva',
                    ],
                    'button' => [
                        'text' => 'Quero esse',
                        'color' => 'bg-yellow-500',
                    ],
                ],
                [
                    'name' => 'platinum',
                    'description' => 'Para quem deseja ter o controle total de suas finanças e ser mais arrojado, além de mais diversidade.',
                    'note' => '- Itens do Gold',
                    'items' => [
                        'Estrutura de aquisição de bens',
                        'Diagnóstico de carteira',
                        'Preenchimento Fluxo de Caixa',
                        'Parceiros de Investimento',
                        'Custo Oportunidade',
                    ],
                    'button' => [
                        'text' => 'Quero esse',
                        'color' => 'bg-blue-600',
                    ],
                ],
                [
                    'name' => 'black',
                    'description' => 'Para quem já investe e deseja estratégias personalizadas para potencializar seu patrimônio.',
                    'note' => '- Itens do Gold & Platinum',
                    'items' => [
                        'Revisão de Progresso',
                        'Carteira Personalizada',
                        'Reserva Internacional',
                        'Estratégias Exclusivas',
                        'Possibilidade Key Account',
                    ],
                    'button' => [
                        'text' => 'Quero esse',
                        'color' => 'bg-black',
                    ],
                ],
            ],
            'testimonialData' => $testimonials,
        ],
        );
    }
}
