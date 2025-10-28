<?php

namespace App\Filament\Resources\CMS\Pages\Pages;

use App\Filament\Resources\CMS\Pages\PageResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Enums\Width;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    public bool $isJsonVisible = false;

    protected Width|string|null $maxContentWidth = 'full';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('json')
                ->action(fn (): bool => $this->isJsonVisible = ! $this->isJsonVisible)
                ->outlined(fn (): bool => $this->isJsonVisible)
                ->label('Toggle Json'),

            DeleteAction::make()
                ->visible(fn ($record) => $record->deletable),
        ];
    }
}
