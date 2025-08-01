<?php

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
        foreach (config('firaga.testimonials') as $testimonial) {
            $testimonial = Testimonial::query()->create([
                'name' => $testimonial['name'],
                'role' => $testimonial['role'],
                'rating' => $testimonial['rating'],
                'comment' => $testimonial['comment'],
                'posted_at' => now(),
            ]);

            $testimonial
                ->addMediaFromUrl('https://github.com/RichardGL11.png')
                ->toMediaCollection('avatar');
        }
    }
}
