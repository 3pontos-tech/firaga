<?php

declare(strict_types=1);

namespace App\Filament\Resources\CMS\Posts\Pages;

use App\Filament\Resources\CMS\Posts\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
