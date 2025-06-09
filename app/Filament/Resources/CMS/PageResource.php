<?php

namespace App\Filament\Resources\CMS;

use App\Filament\Resources\CMS\PageResource\Pages;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Webid\Druid\Enums\PageStatus;
use Webid\Druid\Facades\Druid;
use Webid\Druid\Filament\Resources\CommonFields;
use Webid\Druid\Models\Page;
use Webid\Druid\Services\Admin\FilamentComponentsService;
use Webmozart\Assert\Assert;

class PageResource extends Resource
{
    public static function getModel(): string
    {
        return Druid::getModel('page');
    }

    protected static ?string $modelLabel = 'Page';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        $filamentComponentService = app(FilamentComponentsService::class);

        $contentTab = [
            'title' => TextInput::make('title')
                ->label(__('Title'))
                ->live(onBlur: true)
                ->afterStateUpdated(
                    fn (string $operation, string $state, Set $set) => $operation === 'create'
                        ? $set('slug', Str::slug($state)) : null
                )
                ->required(),
            $filamentComponentService->getFlexibleContentFieldsForModel(Page::class),
        ];

        $parametersTab = [
            'slug' => TextInput::make('slug')
                ->label(__('Slug')),
            'parent_page_id' => Select::make('parent_page_id')
                ->label(__('Parent page'))
                ->placeholder(__('Select a parent page'))
                // @phpstan-ignore-next-line
                ->options(fn (?Model $record): Collection => \App\Models\CMS\Page::query()->whereNot($record->getKeyName(), $record->getKey())->get()->pluck('title', 'id'))
                ->searchable(),
            'status' => Select::make('status')
                ->label(__('Status'))
                ->placeholder(__('Select a status'))
                ->options(PageStatus::class)
                ->default(PageStatus::PUBLISHED)
                ->required(),
            'published_at' => DatePicker::make('published_at')
                ->label(__('Published at'))
                ->native(false)
                ->default(now())
                ->required(),
        ];

        if (Druid::isMultilingualEnabled()) {
            $parametersTab = array_merge(
                $parametersTab,
                [
                    'lang' => Select::make('lang')
                        ->label(__('Language'))
                        ->options(
                            collect(Druid::getLocales())->mapWithKeys(fn (array $item, $key) => [$key => $item['label'] ?? __('No label')])
                        )
                        ->required()
                        ->live()
                        ->placeholder(__('Select a language')),
                    'translation_origin_model_id' => Select::make('translation_origin_model_id')
                        ->label(__('Translation origin model'))
                        ->placeholder(__('Is a translation of...'))
                        ->options(function (Get $get, ?Page $page) use ($pageRepository) {
                            $lang = $get('lang');
                            Assert::string($lang);

                            $allDefaultLanguagePages = $pageRepository->allFromDefaultLanguageWithoutTranslationForLang($lang)
                                // @phpstan-ignore-next-line
                                ->mapWithKeys(fn (Page $mapPage) => [$mapPage->getKey() => $mapPage->title]);

                            if ($page) {
                                $allDefaultLanguagePages->put($page->id, __('#No origin model'));
                            }

                            if ($page?->translationOriginModel?->isNot($page)) {
                                $allDefaultLanguagePages->put($page->translationOriginModel->id, $page->translationOriginModel->title);
                            }

                            return $allDefaultLanguagePages;
                        })
                        ->searchable()
                        ->hidden(fn (Get $get): bool => ! $get('lang') || $get('lang') === Druid::getDefaultLocale())
                        ->live(),
                ]
            );
        }

        $result = [
            'tabs' => Tabs::make('Tabs')
                ->tabs([
                    'content' => Tabs\Tab::make(__('Content'))->schema($contentTab),
                    'parameters' => Tabs\Tab::make(__('Parameters'))->schema($parametersTab)->columns(2),
                    'seo' => Tabs\Tab::make(__('SEO'))->schema(CommonFields::getCommonSeoFields())->columns(2),
                ])
                ->activeTab(1)
                ->columnSpanFull(),
        ];

        return $form->schema($result);
    }

    public static function table(Table $table): Table
    {

        $columns = [
            Tables\Columns\TextColumn::make('title')
                ->label(__('Title'))
                ->color('primary')
                ->url(
                    url: fn (Page $record) => $record->url(),
                    shouldOpenInNewTab: true
                )
                ->searchable(),
            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->colors([
                    'success' => PageStatus::PUBLISHED,
                    'warning' => PageStatus::DRAFT,
                    'danger' => PageStatus::ARCHIVED,
                ])
                ->label(__('Status')),
            Tables\Columns\IconColumn::make('disable_indexation')
                ->label(__('Disable indexation'))
                ->boolean(),
            Tables\Columns\TextColumn::make('parent_page_id')
                ->default('-')
                ->label(__('Parent page')),
            Tables\Columns\TextColumn::make('published_at')
                ->label(__('Published at'))
                ->sortable(),
        ];

        if (Druid::isMultilingualEnabled()) {
            $columns[] = Tables\Columns\ViewColumn::make('translations')->view('druid::admin.page.translations');
        }

        return $table
            ->query(fn () => Page::query()->with('parent'))
            ->columns($columns)
            ->defaultSort('published_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make()->button()->outlined()->icon(''),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->selectCurrentPageOnly()
            ->striped()
            ->deferLoading();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'view' => Pages\ViewPage::route('/{record}'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Druid::isPageModuleEnabled();
    }
}
