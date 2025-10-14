<?php

namespace App\Filament\Resources\CMS;

use App\Enums\PageTheme;
use App\Filament\Components\FilamentComponentsService;
use App\Filament\Resources\CMS\PageResource\Pages\CreatePage;
use App\Filament\Resources\CMS\PageResource\Pages\EditPage;
use App\Filament\Resources\CMS\PageResource\Pages\ListPages;
use App\Filament\Resources\CMS\PageResource\Pages\ViewPage;
use App\Models\CMS\Page;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\View;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Webid\Druid\Enums\PageStatus;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    // protected static ?string $modelLabel = 'Page';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = null; // 'Pages';

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
            Grid::make(4)->schema([
                Section::make('Content')
                    ->columnSpan(fn($livewire): int => (int)($livewire->isJsonVisible ? 2 : 4))
                    ->columns(1)
                    ->schema([
                        Fieldset::make('Content')
                            ->columns(2)
                            ->schema([
                                'title' => TextInput::make('title')
                                    ->label(__('filament.page_title'))
                                    ->live(debounce: 400)
                                    ->afterStateUpdated(function(string $operation, string $state, Set $set) {


                                        $set('slug', Str::slug($state));
                                        $set('meta_title', $state);
                                        $set('opengraph_title', $state);
                                    })

                                    ->required(),

                                'slug' => TextInput::make('slug')
                                    ->label(__('filament.slug'))
                                    ->live(debounce: 400)
                                    ->afterStateUpdated(
                                        fn(string $operation, string $state, Set $set): mixed => $operation === 'create'
                                            ? $set('slug', Str::slug($state)) : null
                                    )
                                    ->required(),
                            ]),
                        $filamentComponentService->getFlexibleContentFieldsForModel(Page::class),
                    ]),
                View::make('filament.components.preview-json') // Preview
                    ->columnSpanFull()
                    ->visible(fn($livewire): bool => $livewire->isJsonVisible)
                    ->reactive(),

            ]),
        ];

        $parametersTab = [
            'is_landing' => Select::make('is_landing')
                ->label(__('filament.is_landing_page'))
                ->helperText(__('Used to marketing campaigns'))
                ->boolean()
                ->default(false),
            'deletable' => Select::make('deletable')
                ->label(__('Deletable'))
                ->helperText(__('Internal: used for homepage/blog'))
                ->boolean()
                ->default(true),
            'parent_page_id' => Select::make('parent_page_id')
                ->label(__('filament.parent_page'))
                ->placeholder(__('Select a parent page'))
                // @phpstan-ignore-next-line
                ->options(fn(?Model $record): Collection => Page::query()->get()->pluck('title', 'id'))
                ->searchable(),
            'status' => Select::make('status')
                ->label(__('Status'))
                ->placeholder(__('Select a status'))
                ->options(PageStatus::class)
                ->default(PageStatus::PUBLISHED)
                ->required(),
            'theme' => Select::make('theme')
                ->enum(PageTheme::class)
                ->options(PageTheme::class)
                ->default(PageTheme::Default),
            'published_at' => DatePicker::make('published_at')
                ->label(__('filament.published_at'))
                ->native(false)
                ->default(now())
                ->required(),
        ];

        $result = [
            'tabs' => Tabs::make('Tabs')
                ->tabs([
                    'content' => Tab::make(__('Content'))->label(__('filament.page_content'))->schema($contentTab),
                    'parameters' => Tab::make(__('Parameters'))->label(__('filament.page_parameters'))->schema($parametersTab)->columns(2),
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
            TextColumn::make('title')
                ->label(__('filament.page_title'))
                ->color('primary')
                ->url(
                    url: fn(Page $record): string => $record->url(),
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
            TextColumn::make('published_at')
                ->label(__('filament.published_at'))
                ->sortable(),
        ];

        return $table
            ->query(fn() => Page::query()->with('parent'))
            ->columns($columns)
            ->defaultSort('published_at', 'desc')
            ->actions([
                EditAction::make()->button()->outlined(),
                DeleteAction::make()
                    ->visible(fn($record) => $record->deletable)
                    ->label(__('filament.delete')),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
        return true;
    }
}
