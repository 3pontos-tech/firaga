<?php

namespace App\Enums;

enum PageTheme: string
{
    case Default = 'default';

    case Metallic = 'metallic';

    public function getPageBackground(): string
    {
        return match ($this) {
            self::Default => 'bg-elevation-surface',
            self::Metallic => 'bg-[#09090A]',
        };
    }
}
