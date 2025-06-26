<?php

namespace App\Enums;

enum ContactPreference: string
{
    case email = 'email';
    case whatsapp = 'whatsapp';
    case call = 'call';

    public function label(): string
    {
        return match ($this) {
            self::email => 'Email',
            self::whatsapp => 'WhatsApp',
            self::call => 'Ligação',
        };
    }
}
