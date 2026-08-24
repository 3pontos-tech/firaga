<?php

declare(strict_types=1);

use App\Filament\Resources\Testimonials\Pages\CreateTestimonial;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use function Pest\Livewire\livewire;

it('stores the testimonial avatar on the public disk so it is web-accessible', function (): void {
    Storage::fake('public');

    $this->actingAs(User::factory()->create());

    livewire(CreateTestimonial::class)
        ->fillForm([
            'name' => 'Jane Doe',
            'role' => 'CEO',
            'rating' => 5,
            'comment' => 'Great service.',
            'posted_at' => now(),
            'avatar' => UploadedFile::fake()->image('avatar.jpg'),
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $media = Testimonial::query()->firstOrFail()->getFirstMedia('avatar');

    expect($media->disk)->toBe('public');
    Storage::disk('public')->assertExists($media->getPathRelativeToRoot());
});
