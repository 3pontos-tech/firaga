<?php

namespace App\Enums;

enum ContactPreference: string
{
    case Email = 'email';
    case Whatsapp = 'whatsapp';
    case Call = 'call';

    public function label(): string
    {
        return match ($this) {
            self::Email => 'Email',
            self::Whatsapp => 'WhatsApp',
            self::Call => 'Ligação',
        };
    }
}
