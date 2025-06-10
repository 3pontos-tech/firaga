<?php

namespace App\Filament\Resources\CMS\ReusableComponentResource\Pages;

use App\Filament\Resources\CMS\ReusableComponentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewReusableComponent extends ViewRecord
{
    protected static string $resource = ReusableComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
