<?php

namespace App\Filament\Components\DTOs;

use Illuminate\Support\Collection;

class CardCollection extends Collection
{
    public readonly string $cardType;

    public readonly int $columns;

    public static function newCollection(string $cardType, int $columns, array $items): static
    {
        $collection = parent::make($items);
        $collection->cardType = $cardType;
        $collection->columns = $columns;

        return $collection;
    }
}
