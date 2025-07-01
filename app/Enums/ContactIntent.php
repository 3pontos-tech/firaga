<?php

namespace App\Enums;

enum ContactIntent: string
{
    case ScheduleAnalysis = 'schedule-analysis';
    case JoinTeam = 'join-team';
    case AskQuestions = 'ask-questions';
    case Others = 'others';

    public function label(): string
    {
        return match ($this) {
            self::ScheduleAnalysis => 'Agendar uma análise',
            self::JoinTeam => 'Quero fazer parte do time',
            self::AskQuestions => 'Tirar dúvidas',
            self::Others => 'Outro',
        };
    }
}
