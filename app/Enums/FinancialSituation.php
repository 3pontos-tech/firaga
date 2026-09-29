<?php

declare(strict_types=1);

namespace App\Enums;

enum FinancialSituation: string
{
    case InDebt = 'in_debt';
    case Overspending = 'overspending';
    case Saving = 'saving';

    public function label(): string
    {
        return match ($this) {
            self::InDebt => 'Tenho dívidas e quero sair delas',
            self::Overspending => 'Ganho bem mas não controlo os gastos',
            self::Saving => 'Já poupo mas quero investir melhor',
        };
    }
}
