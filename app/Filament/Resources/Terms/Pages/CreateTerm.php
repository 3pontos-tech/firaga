<?php

declare(strict_types=1);

namespace App\Filament\Resources\Terms\Pages;

use App\Filament\Resources\Terms\TermResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTerm extends CreateRecord
{
    protected static string $resource = TermResource::class;
}
