<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\AuthorResource;
use Filament\Resources\Pages\EditRecord;

class EditAuthor extends EditRecord
{
    protected static string $resource = AuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
