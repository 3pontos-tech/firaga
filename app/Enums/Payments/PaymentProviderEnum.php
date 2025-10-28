<?php

namespace App\Enums\Payments;

use BackedEnum;
use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum PaymentProviderEnum: string implements HasLabel, HasColor, HasIcon
{
    case AbacatePay = 'abacate-pay';

    public function getColor(): array
    {
        return match ($this) {
            self::AbacatePay => Color::Green,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::AbacatePay => Heroicon::PaperClip,
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::AbacatePay => "Abacate Pay",
        };
    }
}
