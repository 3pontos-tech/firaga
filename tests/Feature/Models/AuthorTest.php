<?php

declare(strict_types=1);

use App\Models\Author;
use App\Models\User;

it('belongs to a user via the user_id foreign key', function (): void {
    $author = Author::factory()->create();

    expect($author->user)
        ->toBeInstanceOf(User::class)
        ->and($author->user->getKey())->toBe($author->user_id);
});
