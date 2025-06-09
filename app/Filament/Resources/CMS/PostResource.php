<?php

namespace App\Filament\Resources\CMS;

use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Webid\Druid\Enums\PostStatus;
use Webid\Druid\Facades\Druid;
use Webid\Druid\Filament\Resources\CommonFields;
use Webid\Druid\Repositories\CategoryRepository;
use Webid\Druid\Services\Admin\FilamentComponentsService;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $modelLabel = 'Post';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 0;

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
            'excerpt' => Textarea::make('excerpt')
                ->label(__('Excerpt')),
            $filamentComponentService->getFlexibleContentFieldsForModel(\Webid\Druid\Models\Post::class),
        ];

        $parametersTab = [
            'thumbnail_id' => CuratorPicker::make('thumbnail_id')
                ->label(__('Image'))
                ->preserveFilenames()
                ->columnSpanFull(),
            'thumbnail_alt' => TextInput::make('thumbnail_alt')
                ->label(__('Image alt'))
                ->columnSpanFull(),
            'status' => Select::make('status')
                ->label(__('Status'))
                ->options(PostStatus::class)
                ->default(PostStatus::PUBLISHED)
                ->live()
                ->required(),
            'published_at' => DateTimePicker::make('published_at')
                ->label(__('Published at'))
                ->native(false)
                ->default(now())
                ->required(),
            'slug' => TextInput::make('slug')
                ->label(__('Slug'))
                ->required(),
            'is_top_article' => Toggle::make('is_top_article')
                ->label(__('Top article'))
                ->helperText(__('Display this article in the top article section')),
            'categories' => Select::make('categories')
                ->options(Category::query()->where(['lang' => Druid::getDefaultLocale()])
                    ->whereDoesntHave('translations', fn (Builder $query) => $query
                        ->where('lang', Druid::getDefaultLocale()))
                    ->get()->pluck('name', 'id'))
                ->multiple()
                ->required()
                ->relationship('categories', 'name')
                ->preload(),
            'users' => Select::make('users')
                ->multiple()
                ->default([Auth::user()?->getKey()])
                ->relationship('users', 'name'),
        ];

        $result = [
            'tabs' => Tabs::make('Tabs')
                ->tabs([
                    'content' => Tabs\Tab::make(__('Content'))->schema($contentTab),
                    'parameters' => Tabs\Tab::make(__('Parameters'))->schema($parametersTab)->columns(2),
                    'seo' => Tabs\Tab::make(__('SEO'))->schema(CommonFields::getCommonSeoFields())->columns(2),
                ])->columnSpanFull(),
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
                    url: fn (Post $record) => url($record->loadMissing('categories')->fullUrlPath()),
                    shouldOpenInNewTab: true
                )
                ->searchable(),
            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->colors([
                    'success' => PostStatus::PUBLISHED,
                    'warning' => PostStatus::DRAFT,
                    'danger' => PostStatus::ARCHIVED,
                ])
                ->label(__('Status')),
            Tables\Columns\IconColumn::make('is_top_article')
                ->label(__('Top article'))
                ->boolean(),
            Tables\Columns\IconColumn::make('disable_indexation')
                ->label(__('Disable indexation'))
                ->boolean(),
            Tables\Columns\TextColumn::make('published_at')
                ->label(__('Published at'))
                ->dateTime()
                ->sortable(),
        ];

        if (Druid::isMultilingualEnabled()) {
            $columns[] = Tables\Columns\ViewColumn::make('translations')->view('druid::admin.post.translations');
        }

        return $table
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
            'index' => PostResource\Pages\ListPosts::route('/'),
            'create' => PostResource\Pages\CreatePost::route('/create'),
            'view' => PostResource\Pages\ViewPost::route('/{record}'),
            'edit' => PostResource\Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Druid::isBlogModuleEnabled();
    }
}
