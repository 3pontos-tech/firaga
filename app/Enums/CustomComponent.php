<?php

declare(strict_types=1);

namespace App\Enums;

use App\Filament\Components\AbstractCustomComponent;
use LogicException;

enum CustomComponent: string
{
    /**
     * @return array<int, array{class: AbstractCustomComponent}>
     */
    public static function allComponents(): array
    {
        return array_map(
            fn (CustomComponent $component): array => ['class' => $component->getComponent()],
            self::cases(),
        );
    }

    public function getComponentClass(): string
    {
        throw new LogicException('No components registered.');
    }

    public function getComponent(): AbstractCustomComponent
    {
        return resolve($this->getComponentClass());
    }
}
