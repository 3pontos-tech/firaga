<?php

declare(strict_types=1);

namespace App\Enums;

use Carbon\CarbonImmutable;

enum ContactWindow: string
{
    case Morning = 'morning';
    case Afternoon = 'afternoon';
    case Evening = 'evening';

    public const string TIMEZONE = 'America/Sao_Paulo';

    public function label(): string
    {
        return match ($this) {
            self::Morning => 'Manhã (8h–12h)',
            self::Afternoon => 'Tarde (12h–18h)',
            self::Evening => 'Noite (18h–21h)',
        };
    }

    public function startHour(): int
    {
        return match ($this) {
            self::Morning => 8,
            self::Afternoon => 12,
            self::Evening => 18,
        };
    }

    public function endHour(): int
    {
        return match ($this) {
            self::Morning => 12,
            self::Afternoon => 18,
            self::Evening => 21,
        };
    }

    /**
     * The flow only collects a shift preference, so the appointment is anchored at the
     * start of that shift on the next business day (Monday to Friday) in São Paulo time.
     */
    public function nextStartAfter(CarbonImmutable $moment): CarbonImmutable
    {
        $day = $moment->setTimezone(self::TIMEZONE)->addDay()->startOfDay();

        while ($day->isWeekend()) {
            $day = $day->addDay();
        }

        return $day->setTime($this->startHour(), 0);
    }

    public function nextEndAfter(CarbonImmutable $moment): CarbonImmutable
    {
        return $this->nextStartAfter($moment)->setTime($this->endHour(), 0);
    }
}
