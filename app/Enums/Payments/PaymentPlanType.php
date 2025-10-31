<?php

namespace App\Enums\Payments;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum PaymentPlanType: string implements HasColor, HasIcon, HasLabel
{
    case Gold = 'gold';
    case Platinum = 'platinum';
    case Black = 'black';

    public function getColor(): array
    {
        return match ($this) {
            self::Gold => Color::Yellow,
            self::Platinum => Color::Stone,
            self::Black => Color::Neutral,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::Gold => Heroicon::Wallet,
            self::Platinum => Heroicon::Check,
            self::Black => Heroicon::PaperClip,
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::Black => 'Black',
            self::Gold => 'Gold',
            self::Platinum => 'Platinum',
        };
    }
}
