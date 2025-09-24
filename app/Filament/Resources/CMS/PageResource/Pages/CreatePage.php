<?php

namespace App\Filament\Resources\CMS\PageResource\Pages;

use App\Filament\Resources\CMS\PageResource;
use Filament\Resources\Pages\CreateRecord;
use Webid\Druid\Facades\Druid;
use Webid\Druid\Models\Page;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;

    public bool $isJsonVisible = true;
    protected function afterCreate(): void
    {
        /** @var Page $page */
        $page = $this->record;

        if (Druid::isMultilingualEnabled()) {
            if ($page->lang === Druid::getDefaultLocale()) {
                $page->update(['translation_origin_model_id' => $page->getKey()]);
            }

            if ($page->translation_origin_model_id === null) {
                $page->update(['translation_origin_model_id' => $page->getKey()]);
            }
        }

        $page->save();
    }
}
