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
                'heading' => 'Planos e preços',
                'description' => 'Na nossa consultoria, entendemos que cada cliente é único. Por isso, desenvolvemos uma metodologia personalizada que se adapta às suas necessidades e objetivos financeiros.',
                'plans' => [
                    [
                        'name' => 'gold',
                        'display_name' => 'Gold',
                        'price' => 'R$ 2.500',
                        'description' => 'Para quem está começando a organizar sua vida financeira e deseja mais tranquilidade.',
                        'items' => [
                            'Mapa financeiro completo',
                            'Planilha de fluxo de caixa',
                            'Planilha de patrimônio',
                            'Planejamento anual detalhado',
                            'Construção de Reserva de Emergência',
                            'Até 8 reuniões de acompanhamento',
                            'Suporte via WhatsApp',
                        ],
                        'button' => [
                            'text' => 'Escolher Gold',
                            'url' => '#contact',
                        ],
                        'popular' => 1, // 1 = popular, 2 = melhor plano
                    ],
                    [
                        'name' => 'black',
                        'display_name' => 'Black',
                        'price' => 'R$ 8.500',
                        'description' => 'Para quem já investe e deseja estratégias personalizadas para potencializar seu patrimônio.',
                        'note' => '+ Todos os itens do Gold & Platinum',
                        'items' => [
                            'Revisão de Progresso mensal',
                            'Carteira Personalizada exclusiva',
                            'Reserva Internacional',
                            'Estratégias Exclusivas avançadas',
                            'Possibilidade de upgrade para Key Account',
                            'Planejamento sucessório básico',
                            'Acesso prioritário a oportunidades',
                        ],
                        'button' => [
                            'text' => 'CTA Button',
                            'url' => '#contact',
                        ],
                        'popular' => 2, // 1 = popular, 2 = melhor plano
                    ],
                    [
                        'name' => 'platinum',
                        'display_name' => 'Platinum',
                        'price' => 'R$ 4.500',
                        'description' => 'Para quem deseja ter o controle total de suas finanças e ser mais arrojado, além de mais diversidade.',
                        'note' => '+ Todos os itens do Gold',
                        'items' => [
                            'Estrutura de aquisição de bens',
                            'Diagnóstico de carteira de investimentos',
                            'Preenchimento de Fluxo de Caixa',
                            'Parceiros de Investimento exclusivos',
                            'Análise de Custo de Oportunidade',
                            'Planejamento tributário básico',
                            'Revisões trimestrais',
                        ],
                        'button' => [
                            'text' => 'Escolher Platinum',
                            'url' => '#contact',
                        ],
                        'popular' => 1, // 1 = popular, 2 = melhor plano
                    ],
                ]
            ],
            'clientReviews' => [
                [
                    'id' => 1,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
                [
                    'id' => 2,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
                [
                    'id' => 3,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
                [
                    'id' => 4,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
                [
                    'id' => 5,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
                [
                    'id' => 6,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
                [
                    'id' => 7,
                    'name' => 'NexTuR',
                    'role' => 'UI/UX Designer',
                    'content' => 'Sempre me considerei um cara cético com respeito a consultorias, não acreditava que realmente poderia mudar minha vida. Conheci a Finance & Co atraves do consultor Matheus Oka e me provaram estar equivocado. Me mostraram como podia realmente fazer diferenças significantes na minha vida [...]',
                ],
            ],
            'testimonialData' => $testimonials,
        ]);
    }
}
