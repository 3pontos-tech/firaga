<?php

declare(strict_types=1);

namespace App\Enums;

enum FinancialGoal: string
{
    case PayOffDebts = 'pay_off_debts';
    case ControlSpending = 'control_spending';
    case BuildWealth = 'build_wealth';

    public function label(): string
    {
        return match ($this) {
            self::PayOffDebts => 'Sair das dívidas nos próximos meses',
            self::ControlSpending => 'Ter controle real dos meus gastos',
            self::BuildWealth => 'Construir patrimônio e investir',
        };
    }
}
