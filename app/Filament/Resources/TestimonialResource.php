<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages\CreateTestimonial;
use App\Filament\Resources\TestimonialResource\Pages\EditTestimonial;
use App\Filament\Resources\TestimonialResource\Pages\ListTestimonials;
use App\Models\Testimonial;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?string $label = null;

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
                            ->label(__('filament.testimonialName'))
                            ->required()
                            ->maxLength(255),
                        Select::make('rating')
                            ->label(__('filament.testimonialRating'))
                            ->options([
                                1 => '1',
                                2 => '2',
                                3 => '3',
                                4 => '4',
                                5 => '5',
                            ]),
                        Textarea::make('comment')
                            ->label(__('filament.testimonialComment'))
                            ->required(),
                        DateTimePicker::make('posted_at')
                            ->label(__('filament.publishedAt'))
                            ->required(),
                        TextInput::make('testimonial_url')
                            ->label(__('filament.testimonialUrl'))
                            ->required()
                            ->url(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.testimonialName'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('rating')
                    ->label(__('filament.testimonialRating'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('comment')
                    ->label(__('filament.testimonialComment'))
                    ->searchable(),
                TextColumn::make('testimonial_url')
                    ->label(__('filament.testimonialUrl'))
                    ->searchable(),
                TextColumn::make('posted_at')
                    ->label(__('filament.publishedAt'))
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()->label(__('filament.edit')),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label(__('filament.bulkDelete')),
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
