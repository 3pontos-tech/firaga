<?php

namespace App\Filament\Resources\CMS;

use App\Filament\Resources\CMS\PageResource\Pages\CreatePage;
use App\Filament\Resources\CMS\PageResource\Pages\EditPage;
use App\Filament\Resources\CMS\PageResource\Pages\ListPages;
use App\Filament\Resources\CMS\PageResource\Pages\ViewPage;
use App\Models\CMS\Page;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Webid\Druid\Enums\PageStatus;
use Webid\Druid\Facades\Druid;
use Webid\Druid\Filament\Resources\CommonFields;
use Webid\Druid\Services\Admin\FilamentComponentsService;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    //protected static ?string $modelLabel = 'Page';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = null;//'Pages';

    protected static ?string $label = null;

    public static function getLabel(): ?string
    {
        return __('filament.page');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament.pages');
    }

    public static function form(Form $form): Form
    {
        $filamentComponentService = app(FilamentComponentsService::class);

        $contentTab = [
            'title' => TextInput::make('title')
                ->label(__('filament.pageTitle'))
                ->live(debounce: 400)
                ->afterStateUpdated(
                    fn (string $operation, string $state, Set $set): mixed => $operation === 'create'
                        ? $set('slug', Str::slug($state)) : null
                )
                ->required(),
            $filamentComponentService->getFlexibleContentFieldsForModel(Page::class),
        ];

        $parametersTab = [
            'slug' => TextInput::make('slug')
                ->label(__('filament.pageSlug')),
            'is_landing' => Select::make('is_landing')
                ->label(__('filament.isLandingPage'))
                ->boolean()
                ->default(false),
            'parent_page_id' => Select::make('parent_page_id')
                ->label(__('filament.parentPage'))
                ->placeholder(__('Select a parent page'))
                // @phpstan-ignore-next-line
                ->options(fn (?Model $record): Collection => Page::query()->get()->pluck('title', 'id'))
                ->searchable(),
            'status' => Select::make('status')
                ->label(__('Status'))
                ->placeholder(__('Select a status'))
                ->options(PageStatus::class)
                ->default(PageStatus::PUBLISHED)
                ->required(),
            'published_at' => DatePicker::make('published_at')
                ->label(__('filament.publishedAt'))
                ->native(false)
                ->default(now())
                ->required(),
        ];

        $result = [
            'tabs' => Tabs::make('Tabs')
                ->tabs([
                    'content' => Tab::make(__('Content'))->label(__('filament.pageContent'))->schema($contentTab),
                    'parameters' => Tab::make(__('Parameters'))->label(__('filament.pageParameters'))->schema($parametersTab)->columns(2),
                    'seo' => Tab::make(__('SEO'))->schema(CommonFields::getCommonSeoFields())->columns(2),
                ])
                ->activeTab(1)
                ->columnSpanFull(),
        ];

        return $form->schema($result);
    }

    public static function table(Table $table): Table
    {
        $columns = [
            IconColumn::make('is_landing')
                ->boolean()
                ->label(__('filament.ladingPage')),
            TextColumn::make('title')
                ->label(__('filament.pageTitle'))
                ->color('primary')
                ->url(
                    url: fn (Page $record): string => $record->url(),
                    shouldOpenInNewTab: true
                )
                ->searchable(),
            TextColumn::make('status')
                ->badge()
                ->colors([
                    'success' => PageStatus::PUBLISHED,
                    'warning' => PageStatus::DRAFT,
                    'danger' => PageStatus::ARCHIVED,
                ])
                ->label(__('Status')),
            IconColumn::make('disable_indexation')
                ->label(__('filament.disabledIndex'))
                ->boolean(),
            TextColumn::make('parent_page_id')
                ->default('-')
                ->label(__('filament.parentPage')),
            TextColumn::make('published_at')
                ->label(__('filament.publishedAt'))
                ->sortable(),
        ];

        return $table
            ->query(fn () => Page::query()->with('parent'))
            ->columns($columns)
            ->defaultSort('published_at', 'desc')
            ->actions([
                EditAction::make()->label(__('filament.edit'))->button()->outlined()->icon(''),
                DeleteAction::make()->label(__('filament.delete')),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label(__('filament.bulkDelete')),
                ]),
            ])
            ->selectCurrentPageOnly()
            ->striped()
            ->deferLoading();
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPages::route('/'),
            'create' => CreatePage::route('/create'),
            'view' => ViewPage::route('/{record}'),
            'edit' => EditPage::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Druid::isPageModuleEnabled();
    }
}
