<?php

namespace App\Filament\Resources\CMS\MenuResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\View\View;
use App\Filament\Resources\CMS\MenuResource;
use Webid\Druid\Models\Menu;
use Webid\Druid\Services\NavigationMenuManager;

class EditMenu extends EditRecord
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

}
