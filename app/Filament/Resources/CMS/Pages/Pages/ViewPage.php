<?php

declare(strict_types=1);

namespace App\Filament\Resources\CMS\Pages\Pages;

use App\Filament\Resources\CMS\Pages\PageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPage extends ViewRecord
{
    public bool $isJsonVisible = false;

    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
