<?php

namespace App\Filament\Resources\CMS\ReusableComponentResource\Pages;

use App\Filament\Resources\CMS\ReusableComponentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReusableComponent extends EditRecord
{
    protected static string $resource = ReusableComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
