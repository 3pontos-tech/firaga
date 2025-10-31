<?php

namespace App\Enums\Payments;

use BackedEnum;
use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum PaymentMethodEnum: string implements HasColor, HasIcon, HasLabel
{
    case Card = 'card';
    case Pix = 'pix';

    public function getColor(): array
    {
        return match ($this) {
            self::Card => Color::Blue,
            self::Pix => Color::Green,
        };
    }

    public function getIcon(): string|BackedEnum|null
    {
        return match ($this) {
            self::Card => Heroicon::CreditCard,
            self::Pix => Heroicon::Key,
        };
    }

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::Card => 'CC',
            self::Pix => 'Pix',
        };
    }
}
