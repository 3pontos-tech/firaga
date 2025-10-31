<?php

namespace App\Filament\Resources\CMS\Posts;

use App\Enums\PostStatus;
use App\Filament\Components\FilamentComponentsService;
use App\Filament\Resources\Authors\Pages\EditAuthor;
use App\Filament\Resources\CMS\CommonFields;
use App\Filament\Resources\CMS\Posts\Pages\CreatePost;
use App\Filament\Resources\CMS\Posts\Pages\EditPost;
use App\Filament\Resources\CMS\Posts\Pages\ListPosts;
use App\Filament\Resources\CMS\Posts\Pages\ViewPost;
use App\Filament\Resources\CMS\Posts\RelationManagers\PostsRelationManager;
use App\Models\CMS\Category;
use App\Models\CMS\Post;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    // protected static ?string $modelLabel = 'Post';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $recordTitleAttribute = 'title';

    protected static string|\UnitEnum|null $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 0;

    protected static ?string $label = null;

    public static function getLabel(): ?string
    {
        return __('filament.blog_posts');
    }

    public static function form(Schema $schema): Schema
    {
        $filamentComponentService = app(FilamentComponentsService::class);

        $contentTab = [
            'title' => TextInput::make('title')
                ->label(__('filament.title'))
                ->live(onBlur: true)
                ->afterStateUpdated(
                    fn (string $operation, string $state, Set $set): mixed => $operation === 'create'
                        ? $set('slug', Str::slug($state)) : null
                )
                ->required(),
            'excerpt' => Textarea::make('excerpt')
                ->required()
                ->label(__('filament.excerpt')),
            $filamentComponentService->getFlexibleContentFieldsForModel(Post::class)->label(__('filament.content_post')),
        ];

        $parametersTab = [
            'cover' => SpatieMediaLibraryFileUpload::make('cover')
                ->label(__('Cover'))
                ->collection('cover'),
            'thumbnail_alt' => TextInput::make('thumbnail_alt')
                ->label(__('filament.thumbnail_alt'))
                ->columnSpanFull(),
            'status' => Select::make('status')
                ->label(__('Status'))
                ->options(PostStatus::class)
                ->default(PostStatus::PUBLISHED)
                ->live()
                ->required(),
            'published_at' => DateTimePicker::make('published_at')
                ->label(__('filament.published_at'))
                ->native(false)
                ->default(now())
                ->required(),
            'slug' => TextInput::make('slug')
                ->label(__('filament.blog_slug'))
                ->required(),
            'is_top_article' => Toggle::make('is_top_article')
                ->label(__('filament.top_article'))
                ->helperText(__('Display this article in the top article section')),
            'categories' => Select::make('categories')
                ->label(__('filament.category'))
                ->options(Category::query()->get()->pluck('name', 'id'))
                ->multiple()
                ->required()
                ->relationship('categories', 'name')
                ->preload(),
            'authors' => Select::make('author_id')
                ->label(__('filament.author'))
                ->required()
                ->preload()
                ->relationship('author', 'name'),
        ];

        $result = [
            'tabs' => Tabs::make('Tabs')
                ->tabs([
                    'content' => Tab::make(__('Content'))->label(__('filament.content_post'))->schema($contentTab),
                    'parameters' => Tab::make(__('Parameters'))->label(__('filament.parameters_post'))->schema($parametersTab)->columns(2),
                    'seo' => Tab::make(__('SEO'))->schema(CommonFields::getCommonSeoFields())->columns(2),
                ])->columnSpanFull(),
        ];

        return $schema->components($result);
    }

    public static function table(Table $table): Table
    {

        $columns = [
            SpatieMediaLibraryImageColumn::make('cover')
                ->label(__('Cover'))
                ->collection('cover')
                ->columnSpanFull(),

            TextColumn::make('title')
                ->label(__('filament.title'))
                ->color('primary')
                ->url(
                    url: fn (Post $record): string => route('blog.show', ['post' => $record->slug]),
                    shouldOpenInNewTab: true
                )
                ->searchable(),
            TextColumn::make('status')
                ->badge()
                ->colors([
                    'success' => PostStatus::PUBLISHED,
                    'warning' => PostStatus::DRAFT,
                    'danger' => PostStatus::ARCHIVED,
                ])
                ->label(__('Status')),
            TextColumn::make('author.name')
                ->color('primary')
                ->url(
                    url: fn (Post $record): string => EditAuthor::getUrl(['record' => $record->author_id]),
                    shouldOpenInNewTab: true
                ),

            TextColumn::make('published_at')
                ->label(__('filament.published_at'))
                ->dateTime()
                ->sortable(),
        ];

        return $table
            ->columns($columns)
            ->defaultSort('published_at', 'desc')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()->label(__('filament.delete')),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('filament.bulkDelete'),
                ]),
            ])
            ->selectCurrentPageOnly()
            ->striped()
            ->deferLoading();
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPosts::route('/'),
            'create' => CreatePost::route('/create'),
            'view' => ViewPost::route('/{record}'),
            'edit' => EditPost::route('/{record}/edit'),
        ];
    }

    public static function getRelations(): array
    {
        return [PostsRelationManager::class];
    }
}
