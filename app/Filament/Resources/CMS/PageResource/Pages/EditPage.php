<?php

namespace App\Filament\Resources\CMS\PageResource\Pages;

use App\Filament\Resources\CMS\PageResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    public bool $isJsonVisible = false;

    protected ?string $maxContentWidth = 'full';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('json')
                ->action(fn () => $this->isJsonVisible = ! $this->isJsonVisible)
                ->outlined(fn () => $this->isJsonVisible)
                ->label('Toggle Json'),

            DeleteAction::make()
                ->visible(fn($record) => $record->deletable)
        ];
    }
}
