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
                'heading' => 'Invista no futuro com inteligência e precisão',
                'subheading' => 'Transformamos a forma como as pessoas lidam com dinheiro, capacitando-as a conquistar liberdade, segurança e crescimento financeiro sustentável.',
                'badge' => 'Consultoria Financeira',
                'button_text' => 'Agende uma consultoria',
                'button_url' => '/blog',
                'metrics' => [
                    [
                        'label' => 'Clientes Atendidos',
                        'value' => '1000+'
                    ],
                    [
                        'label' => 'Sob Administração',
                        'value' => '70M'
                    ],
                    [
                        'label' => 'Anos de experiência',
                        'value' => '9'
                    ],
                    [
                        'label' => 'Crescimento Anual',
                        'value' => '300%'
                    ]
                ]
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
                    'name' => 'Carlos Mendes',
                    'role' => 'Desenvolvedor Full Stack',
                    'content' => 'A Fire|ce transformou completamente minha relação com o dinheiro. Antes eu apenas guardava em poupança, agora tenho uma estratégia sólida de investimentos que me permite sonhar com a independência financeira. O suporte é excepcional e personalizado.',
                ],
                [
                    'id' => 2,
                    'name' => 'Ana Paula Silva',
                    'role' => 'Product Manager',
                    'content' => 'Como profissional de tech que recebe em dólar, precisava de alguém que entendesse minha realidade. A Fire|ce não só entendeu como criou um plano perfeito para diversificar meus investimentos internacionalmente. Recomendo fortemente!',
                ],
                [
                    'id' => 3,
                    'name' => 'Roberto Santana',
                    'role' => 'Engenheiro de Software',
                    'content' => 'Estava perdido com tantas opções de investimento no mercado. A consultoria da Fire|ce me deu clareza e direção. Em 6 meses já vejo resultados concretos na minha carteira. Finalmente tenho um planejamento que faz sentido para meu perfil.',
                ],
                [
                    'id' => 4,
                    'name' => 'Mariana Costa',
                    'role' => 'Data Scientist',
                    'content' => 'O que mais me impressionou foi a transparência e o conhecimento técnico da equipe. Eles explicam cada estratégia de forma didática e me fazem sentir segura com minhas decisões financeiras. Meu patrimônio cresceu 40% no último ano.',
                ],
                [
                    'id' => 5,
                    'name' => 'Lucas Ferreira',
                    'role' => 'DevOps Engineer',
                    'content' => 'Trabalhar remotamente para empresas internacionais sempre foi meu sonho, mas não sabia como otimizar meus ganhos. A Fire|ce me ajudou a estruturar investimentos globais e hoje tenho tranquilidade financeira para focar no que amo fazer.',
                ],
                [
                    'id' => 6,
                    'name' => 'Fernanda Oliveira',
                    'role' => 'Tech Lead',
                    'content' => 'A abordagem personalizada da Fire|ce é incomparável. Eles entenderam meus objetivos de vida e criaram uma estratégia financeira alinhada com minha carreira em tecnologia. Hoje me sinto preparada para qualquer cenário econômico.',
                ],
                [
                    'id' => 7,
                    'name' => 'Rafael Torres',
                    'role' => 'Arquiteto de Software',
                    'content' => 'Depois de anos tentando investir por conta própria, encontrei na Fire|ce o suporte que precisava. A expertise deles em mercado internacional é impressionante. Minha reserva de emergência agora está diversificada em várias moedas.',
                ],
            ],
            'testimonialData' => $testimonials,
        ]);
    }
}
