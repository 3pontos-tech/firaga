<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Felipe Rosa',
                'role' => 'Cliente Fire|ce',
                'rating' => 5,
                'comment' => 'Nunca achei que ia conseguir sair das dívidas. Em 5 meses com o Matheus, pela primeira vez na vida eu tenho reserva de emergência.',
                'posted_at' => now()->subMonth(),
                'avatar' => 'https://i.pravatar.cc/80?img=12',
            ],
            [
                'name' => 'Emilly Monteiro Gomes',
                'role' => 'Cliente Fire|ce',
                'rating' => 5,
                'comment' => 'O atendimento da Fire|ce é atencioso, profissional e personalizado, o que torna todo o processo mais tranquilo e eficiente. Tenho me sentido mais confiante em relação à minha vida financeira. Recomendo o trabalho com total segurança.',
                'posted_at' => now()->subMonths(2),
                'avatar' => 'https://lh3.googleusercontent.com/a-/ALV-UjVOkOLWGbS9XPq1JU32VcUkJAH1Sa1b0JhIGRYjlRr8oYto8Fgi=w90-h90-p-rp-mo-br100',
            ],
            [
                'name' => 'Paulo Lima',
                'role' => 'Cliente Fire|ce',
                'rating' => 5,
                'comment' => 'Fechei a consultoria a três meses. Estou muito satisfeito, hoje tenho visão de todos meus gastos, estou conseguindo guardar parte do meu rendimento, e tenho uma visão futura de como vai estar o meu dinheiro e alcançar os meus objetivos financeiro.',
                'posted_at' => now()->subMonth(),
                'avatar' => 'https://lh3.googleusercontent.com/a/ACg8ocJZRAYVtNhUwcGWdv3MP2mP7RbRFQH4w-T08u78BprvC-AWNg=w90-h90-p-rp-mo-br100',
            ],
            [
                'name' => 'Mariana Shah Coury',
                'role' => 'Cliente Fire|ce',
                'rating' => 5,
                'comment' => 'Os insights sobre organização financeira, entendimento dos meus gastos e tomada de decisões mais conscientes foram extremamente valiosos e continuam fazendo sentido até hoje. Recomendo muito e agradeço de verdade pelo cuidado e dedicação.',
                'posted_at' => now()->subWeeks(3),
                'avatar' => 'https://lh3.googleusercontent.com/a-/ALV-UjXRkXe2TX0jhbnpEfo6DRjqPHJLgWT-j_6uQDtEurYLwua9FPfA=w90-h90-p-rp-mo-br100',
            ],
            [
                'name' => 'Isabelly Victória',
                'role' => 'Cliente Key Account',
                'rating' => 5,
                'comment' => 'Quando falamos em organizar nossas finanças sempre imaginamos que é possível sozinho, mas garanto que com a orientação certa o objetivo é alcançado muito mais rápido e de forma consciente. A consultoria é excepcional e traz clareza sobre gastos x investimentos x lazer.',
                'posted_at' => now()->subMonths(2),
                'avatar' => 'https://lh3.googleusercontent.com/a-/ALV-UjWI5RyOf8Nhr9tlBG2g5XqtbTwqLIDu9ABSM1jlCBIxJ36Dn-ZiBw=w72-h72-p-rp-mo-br100',
            ],
            [
                'name' => 'Paulo Lima',
                'role' => 'Cliente Key Account',
                'rating' => 5,
                'comment' => 'O trabalho da Fire me surpreendeu, porque já entendo de finanças, investimentos até que razoavelmente e pensei que seria mais uma empresa querendo vender qualquer coisa, mas aqui é um trabalho minucioso com visão de futuro.',
                'posted_at' => now()->subMonths(3),
                'avatar' => 'https://lh3.googleusercontent.com/a-/ALV-UjV9yCw5Vw5oINtOnjLuCrpfCke-DHgX9lDXhRZayImkNc1AsaF_Pw=w72-h72-p-rp-mo-br100',
            ],
        ];

        foreach ($testimonials as $data) {
            $testimonial = Testimonial::query()->create([
                'name' => $data['name'],
                'role' => $data['role'],
                'rating' => $data['rating'],
                'comment' => $data['comment'],
                'posted_at' => $data['posted_at'],
            ]);

            $testimonial
                ->addMediaFromUrl($data['avatar'])
                ->toMediaCollection('avatar');
        }
    }
}
