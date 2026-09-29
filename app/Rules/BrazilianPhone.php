<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BrazilianPhone implements ValidationRule
{
    /**
     * Normalizes a Brazilian phone number with area code to E.164 (+55DDXXXXXXXXX),
     * accepting an optional country code or trunk zero. Returns null when invalid.
     */
    public static function normalize(string $value): ?string
    {
        $digits = preg_replace('/\D/', '', $value) ?? '';

        if (in_array(mb_strlen($digits), [12, 13], true) && str_starts_with($digits, '55')) {
            $digits = mb_substr($digits, 2);
        }

        $digits = mb_ltrim($digits, '0');

        if (!preg_match('/^[1-9]{2}(9\d{8}|[2-8]\d{7})$/', $digits)) {
            return null;
        }

        return '+55'.$digits;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_string($value) || self::normalize($value) === null) {
            $fail('Digite um telefone válido com DDD.');
        }
    }
}
