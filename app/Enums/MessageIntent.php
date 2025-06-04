<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum MessageIntent: string implements HasColor, HasLabel
{
    case ScheduleAnalysis = 'schedule_analysis';
    case JoinUs = 'join_us';

    case Question = 'question';

    case Other = 'other';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::ScheduleAnalysis => 'red',
            self::JoinUs => 'green',
            self::Question => 'gray',
            self::Other => 'blue',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ScheduleAnalysis => 'Analise',
            self::JoinUs => 'Curriculum',
            self::Question => 'Dúvida',
            self::Other => 'Outro',
        };
    }
}
