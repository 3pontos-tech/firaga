<?php

namespace App\Filament\Resources\Terms\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TermForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Geral')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, callable $set, $record): void {
                                if ($record !== null || $state === null) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(table: 'terms', column: 'slug', ignoreRecord: true)
                            ->alphaDash(),
                        Toggle::make('is_active')
                            ->label('Ativo')
                            ->default(true),
                        Textarea::make('description')
                            ->label('Descrição')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                Section::make('Seções')
                    ->schema([
                        Repeater::make('content')
                            ->label('Conteúdo')
                            ->collapsible()
                            ->cloneable()
                            ->reorderable()
                            ->itemLabel(fn (array $state): string => $state['title'] ?? 'Nova seção')
                            ->defaultItems(0)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Título da seção')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (?string $state, callable $set): void {
                                        if ($state === null) {
                                            return;
                                        }

                                        $set('id', Str::slug($state));
                                    }),
                                TextInput::make('id')
                                    ->label('ID da seção')
                                    ->required()
                                    ->alphaDash(),
                                Toggle::make('show_in_sidebar')
                                    ->label('Exibir na sidebar')
                                    ->default(true),
                                RichEditor::make('body')
                                    ->label('Corpo')
                                    ->required()
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),
                    ])->columnSpanFull(),
            ]);
    }
}
