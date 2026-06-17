<?php

declare(strict_types=1);

use App\Enums\PostStatus;
use App\Filament\Resources\CMS\Posts\Pages\CreatePost;
use App\Filament\Resources\CMS\Posts\Pages\EditPost;
use App\Filament\Resources\CMS\Posts\Pages\ListPosts;
use App\Models\Author;
use App\Models\CMS\Category;
use App\Models\CMS\Post;
use App\Models\User;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use function Pest\Livewire\livewire;

beforeEach(function (): void {
    $this->actingAs(User::factory()->create());
});

it('renders the posts list table without errors', function (): void {
    $posts = Post::factory()->count(3)->create();

    livewire(ListPosts::class)
        ->assertSuccessful()
        ->loadTable()
        ->assertCanSeeTableRecords($posts)
        ->assertCanRenderTableColumn('title');
});

it('uploads a cover image through the admin create form', function (): void {
    Storage::fake('public');

    $author = Author::factory()->create();
    $category = Category::factory()->create();

    livewire(CreatePost::class)
        ->fillForm([
            'title' => 'Post com capa',
            'excerpt' => 'Resumo do post.',
            'slug' => 'post-com-capa',
            'status' => PostStatus::PUBLISHED->value,
            'published_at' => now(),
            'author_id' => $author->id,
            'categories' => [$category->id],
            'cover' => [UploadedFile::fake()->image('cover.jpg', 800, 600)],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $post = Post::query()->where('slug', 'post-com-capa')->firstOrFail();

    expect($post->getMedia('cover'))->toHaveCount(1)
        ->and($post->getFirstMediaUrl('cover'))->not->toBeEmpty();
});

it('links the title column to the post edit page', function (): void {
    $post = Post::factory()->create();

    livewire(ListPosts::class)
        ->loadTable()
        ->assertTableColumnExists(
            'title',
            fn (TextColumn $column): bool => $column->getUrl() === EditPost::getUrl(['record' => $post]),
            $post,
        );
});
