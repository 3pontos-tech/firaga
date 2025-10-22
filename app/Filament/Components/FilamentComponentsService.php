<?php

namespace App\Filament\Components;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Illuminate\Support\HtmlString;
use Webmozart\Assert\Assert;

class FilamentComponentsService
{
    public function getFlexibleContentFieldsForModel(string $modelClassName): Builder
    {
        $blocks = [];

        $componentsConfig = config('cms.components');
        Assert::isArray($componentsConfig);

        foreach ($componentsConfig as $component) {
            /** @var ComponentContract $componentClass */
            $componentClass = $component['class'];

            if (
                isset($component['disabled_for']) &&
                is_array($component['disabled_for']) &&
                in_array($modelClassName, $component['disabled_for'], true)
            ) {
                continue;
            }

            $name = sprintf('[%s] %s', $componentClass::getGroup(), str($componentClass::fieldName())->title()->replace('-', ' '));
            $blocks[] =
                Block::make($componentClass::fieldName())
                    ->label(fn () => new HtmlString(sprintf('<span style="display: inline-block; width: 1rem; height: 1rem; background-color: %s; margin-right: 0.5rem; vertical-align: middle;"></span>%s', $componentClass::featuredColor(), $name)))
                    ->schema($componentClass::blockSchema());
        }

        return Builder::make('content')
            ->blockPickerColumns(2)
            ->blockPickerWidth('2xl')
            ->blocks($blocks)
            ->blockNumbers(false)
            ->addActionLabel(__('Add a component'))
            ->collapsed();
    }
}
