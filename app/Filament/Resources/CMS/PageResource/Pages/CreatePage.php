<?php

namespace App\Filament\Resources\CMS\PageResource\Pages;

use App\Filament\Resources\CMS\PageResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    public bool $isJsonVisible = false;

    protected ?string $maxContentWidth = 'full';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('json')
                ->action(fn (): bool => $this->isJsonVisible = ! $this->isJsonVisible)
                ->outlined(fn (): bool => $this->isJsonVisible)
                ->label('Toggle Json'),
        ];
    }
}
