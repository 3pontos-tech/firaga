<?php

namespace App\Filament\Resources\CMS\PageResource\Pages;

use App\Filament\Resources\CMS\PageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPage extends ViewRecord
{
    protected static string $resource = PageResource::class;

    public bool $isJsonVisible = false;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
