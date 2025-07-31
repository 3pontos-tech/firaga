<?php

namespace App\Enums;

enum PageTheme: string
{
    case Default = 'default';

    case Metallic = 'metallic';

    public function getPageBackground(): string
    {
        return match ($this) {
            self::Default => 'bg-[#232323]',
            self::Metallic => 'bg-[#09090A]',
        };
    }
}
