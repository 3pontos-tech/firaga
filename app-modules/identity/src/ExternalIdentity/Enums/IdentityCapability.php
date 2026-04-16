<?php

declare(strict_types=1);

namespace He4rt\Identity\ExternalIdentity\Enums;

use Filament\Support\Contracts\HasLabel;

enum IdentityCapability: string implements HasLabel
{
    case Projects = 'projects';
    case Companies = 'companies';
    case Notes = 'notes';

    public function getLabel(): string
    {
        return match ($this) {
            self::Projects => 'Projects',
            self::Companies => 'Companies',
            self::Notes => 'Notes',
        };
    }
}
