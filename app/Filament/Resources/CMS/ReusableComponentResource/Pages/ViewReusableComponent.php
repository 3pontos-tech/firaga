<?php

namespace App\Filament\Resources\CMS\ReusableComponentResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\CMS\ReusableComponentResource;

class ViewReusableComponent extends ViewRecord
{
    protected static string $resource = ReusableComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
