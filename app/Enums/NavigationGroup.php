<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum NavigationGroup: string implements HasLabel
{
    case UserManagement = 'user_management';
    case System = 'system';

    /**
     * @return NavigationGroup[]
     */
    public static function navigation(): array
    {
        return [
            self::UserManagement,
            self::System,
        ];
    }

    public function getLabel(): string
    {
        return __(sprintf('navigation_group.%s.label', $this->value));
    }
}
