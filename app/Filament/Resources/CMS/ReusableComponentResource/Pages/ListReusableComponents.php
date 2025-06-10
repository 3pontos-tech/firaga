<?php

namespace App\Filament\Resources\CMS\ReusableComponentResource\Pages;

use App\Filament\Resources\CMS\ReusableComponentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Webid\Druid\Facades\Druid;
use Webid\Druid\Repositories\ReusableComponentsRepository;

class ListReusableComponents extends ListRecords
{
    protected static string $resource = ReusableComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        if (! Druid::isMultilingualEnabled()) {
            return [];
        }

        /** @var ReusableComponentsRepository $reusableComponentsRepository */
        $reusableComponentsRepository = app(ReusableComponentsRepository::class);

        $tabs = [
            'all' => Tab::make(__('All'))->icon('heroicon-s-flag')
                ->badge($reusableComponentsRepository->countAll()),
        ];

        foreach (Druid::getLocales() as $localeKey => $localeData) {
            $tabs[$localeKey] = Tab::make($localeData['label'])
                ->modifyQueryUsing(fn (Builder $query) => $query->where('lang', $localeKey))
                ->badge($reusableComponentsRepository->countAllHavingLangCode($localeKey));
        }

        $noLangPagesCount = $reusableComponentsRepository->countAllWithoutLang();
        if ($noLangPagesCount > 0) {
            $tabs['no-lang'] = Tab::make(__('No lang'))->icon('heroicon-m-exclamation-triangle')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereNull('lang'))
                ->badge($noLangPagesCount);
        }

        return $tabs;
    }
}
