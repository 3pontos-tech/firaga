<?php

namespace App\Filament\Resources\TestimonialResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\TestimonialResource;
use Filament\Resources\Pages\EditRecord;

class EditTestimonial extends EditRecord
{
    protected static string $resource = TestimonialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
