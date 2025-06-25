<?php

namespace App\Enums;

enum ContactIntent: string
{
    case scheduleAnalysis = 'Agendar uma análise';
    case joinTeam = 'Quero fazer parte do time';
    case askQuestions = 'Tirar dúvidas';
    case other = 'Outro';

    public function label(): string
    {
        return match ($this) {
            self::scheduleAnalysis => 'Agendar uma análise',
            self::joinTeam => 'Quero fazer parte do time',
            self::askQuestions => 'Tirar dúvidas',
            self::other => 'Outro',
        };
    }
}
