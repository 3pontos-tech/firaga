<?php

namespace App\Enums\Payments;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum PaymentStatusEnum: string implements HasLabel, HasIcon, HasColor
{
    case PENDING = 'pending';
    case SUCCESS = 'success';
    case FAILED = 'failed';
    case CANCELLED = 'cancelled';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::PENDING => Color::Blue,
            self::SUCCESS => Color::Green,
            self::FAILED => Color::Red,
            self::CANCELLED => Color::Amber,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::PENDING => Heroicon::Clock,
            self::SUCCESS => Heroicon::CheckCircle,
            self::FAILED => Heroicon::XCircle,
            self::CANCELLED => Heroicon::XMark,
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::SUCCESS => 'Success',
            self::FAILED => 'Failed',
            self::CANCELLED => 'Cancelled',
        };
    }
}
