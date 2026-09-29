<?php

declare(strict_types=1);

namespace App\View;

use App\Enums\ContactWindow;
use App\Enums\FinancialGoal;
use App\Enums\FinancialSituation;

/**
 * Single step configuration shared by the inline Home quiz and the WhatsApp capture
 * modal, so both flows ask the same questions and submit the same payload.
 */
class LeadQuiz
{
    public const string BOT_NAME = 'Fire|ce';

    /**
     * @return list<array{key: string, type: string, question: string, label: string, placeholder?: string, options?: list<array{value: string, label: string}>}>
     */
    public static function steps(): array
    {
        return [
            [
                'key' => 'situation',
                'type' => 'choice',
                'question' => 'Olá! Antes de te conectar com um consultor, me conta rapidinho: qual é a sua situação financeira hoje?',
                'label' => 'Situação financeira',
                'options' => self::options(FinancialSituation::cases()),
            ],
            [
                'key' => 'goal',
                'type' => 'choice',
                'question' => 'Entendido! E qual é seu principal objetivo agora?',
                'label' => 'Objetivo',
                'options' => self::options(FinancialGoal::cases()),
            ],
            [
                'key' => 'availability',
                'type' => 'choice',
                'question' => 'Quase lá! Qual o melhor momento para um consultor entrar em contato com você?',
                'label' => 'Melhor horário',
                'options' => self::options(ContactWindow::cases()),
            ],
            [
                'key' => 'name',
                'type' => 'text',
                'question' => 'Boa escolha. Agora me conta, como posso te chamar?',
                'label' => 'Nome',
                'placeholder' => 'Digite seu primeiro nome',
            ],
            [
                'key' => 'email',
                'type' => 'email',
                'question' => 'Quase lá! Para qual email enviamos o resumo do seu perfil?',
                'label' => 'Email',
                'placeholder' => 'Digite o seu email',
            ],
            [
                'key' => 'phone',
                'type' => 'tel',
                'question' => 'Por último: qual o seu telefone com DDD, caso a gente precise retomar o contato?',
                'label' => 'Telefone',
                'placeholder' => '(11) 91234-5678',
            ],
        ];
    }

    /**
     * @param  list<FinancialSituation|FinancialGoal|ContactWindow>  $cases
     * @return list<array{value: string, label: string}>
     */
    private static function options(array $cases): array
    {
        return array_map(fn (FinancialSituation|FinancialGoal|ContactWindow $case): array => ['value' => $case->value, 'label' => $case->label()], $cases);
    }
}
