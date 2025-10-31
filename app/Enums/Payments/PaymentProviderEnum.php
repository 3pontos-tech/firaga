<?php

namespace App\Enums\Payments;

use App\Actions\Payments\CreatePaymentLinkDTO;
use App\Adapter\AbacatePayAdapter;
use App\Contracts\PaymentDtoContract;
use App\Contracts\PaymentGatewayContract;
use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum PaymentProviderEnum: string implements HasColor, HasIcon, HasLabel
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
            self::AbacatePay => 'Abacate Pay',
        };
    }

    public function getDriver(): PaymentGatewayContract
    {
        return match ($this) {
            self::AbacatePay => app(AbacatePayAdapter::class),
        };
    }

    public function getDto(array $data): PaymentDtoContract
    {
        return match ($this) {
            self::AbacatePay => CreatePaymentLinkDTO::fromArray($data),
        };
    }
}
