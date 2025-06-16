<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (config('firaga.testimonials') as $testimonial) {
            Testimonial::query()->create([
                'name' => $testimonial['name'],
                'role' => $testimonial['role'],
                'rating' => $testimonial['rating'],
                'comment' => $testimonial['comment'],
                'posted_at' => now(),
                'thumbnail_id' => Media::factory()->create()->getKey(),
            ]);
        }
    }
}
