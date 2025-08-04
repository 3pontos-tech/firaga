<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages\CreateTestimonial;
use App\Filament\Resources\TestimonialResource\Pages\EditTestimonial;
use App\Filament\Resources\TestimonialResource\Pages\ListTestimonials;
use App\Models\Testimonial;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?string $label = null;

    public static function getNavigationGroup(): ?string
    {
        return __('filament.pages');
    }

    public static function getLabel(): ?string
    {
        return __('filament.testimonial');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament.testimonial_name'))
                            ->required()
                            ->maxLength(255),
                        TextInput::make('role')
                            ->required()
                            ->maxLength(255),
                        Select::make('rating')
                            ->label(__('filament.testimonial_rating'))
                            ->options([
                                1 => '1',
                                2 => '2',
                                3 => '3',
                                4 => '4',
                                5 => '5',
                            ]),
                        Textarea::make('comment')
                            ->label(__('filament.testimonial_comment'))
                            ->required(),
                        DateTimePicker::make('posted_at')
                            ->label(__('filament.published_at'))
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('avatar')
                            ->label('Avatar')
                            ->collection('avatar')
                            ->image()
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('avatar')
                    ->circular()
                    ->collection('avatar'),
                TextColumn::make('name')
                    ->label(__('filament.testimonial_name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('rating')
                    ->label(__('filament.testimonial_rating'))
                    ->badge()
                    ->color(fn (int $state) => match ($state) {
                        1 => 'danger',
                        2 => 'warning',
                        3 => 'primary',
                        4 => 'info',
                        5 => 'success',
                    })
                    ->searchable()
                    ->sortable(),
                TextColumn::make('posted_at')
                    ->label(__('filament.published_at'))
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTestimonials::route('/'),
            'create' => CreateTestimonial::route('/create'),
            'edit' => EditTestimonial::route('/{record}/edit'),
        ];
    }
}
