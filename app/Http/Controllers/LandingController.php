<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function __invoke()
    {
        $heading = 'Viva melhor com educação financeira';

        return view('welcome', [
            'heroData' => [
                'heading' => $heading,
                'subheading' => 'A simple, beautiful, and fast landing page.',
                'button_text' => 'Get Started',
                'button_url' => '/blog',
            ],
            'cardData' => [
                [
                    'title' => 'Learn',
                    'description' => 'Discover the basics of financial education.',
                    'backgroundImage' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d',
                ],
                [
                    'title' => 'Save',
                    'description' => 'Find out how to save money effectively.',
                    'backgroundImage' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d',
                ],
                [
                    'title' => 'Invest',
                    'description' => 'Learn about investment strategies.',
                    'backgroundImage' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d',
                ],
            ],
            'solutionsData' => [
                [
                    'title' => 'Personal Finance',
                    'description' => 'Manage your personal finances with ease.',
                    'route' => '/personal-finance',
                ],
                [
                    'title' => 'Budgeting',
                    'description' => 'Create and stick to a budget that works for you.',
                    'route' => '/budgeting',
                ],
                [
                    'title' => 'Debt Management',
                    'description' => 'Learn how to manage and reduce your debt.',
                    'route' => '/debt-management',
                ],
            ],
            'plansData' => [
                [
                    'name' => 'Gold',
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
                    'name' => 'Platinum',
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
                    'name' => 'Black',
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
        ]);
    }
}
