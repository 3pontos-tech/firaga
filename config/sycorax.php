<?php

declare(strict_types=1);

use Filament\Enums\ThemeMode;

return [
    'filament' => [
        'theme_mode' => ThemeMode::Dark,
        'default' => [
            'currency' => 'usd',
            'date_display_format' => 'M j, Y',
            'iso_date_display_format' => 'L',
            'date_time_display_format' => 'M j, Y H:i:s',
            'iso_date_time_display_format' => 'LLL',
            'number_locale' => null,
            'time_display_format' => 'H:i:s',
            'iso_time_display_format' => 'LT',
        ],
    ],
];
