<?php

namespace App\View;

use App\Enums\CustomComponent;
use Illuminate\Contracts\View\View;
use Illuminate\View\ViewException;
use Webid\Druid\Components\ComponentInterface;

class TemplateRenderer
{
    public static function make(): self
    {
        return new self;
    }

    /**
     * @throws ViewException
     */
    public function render(string $type, array $data = []): View
    {
        $component = $this->resolveComponent($type);

        return $component->toBlade($data);
    }

    private function resolveComponent(string $type): ComponentInterface
    {
        throw_unless(CustomComponent::tryFrom($type), new ViewException(sprintf("Component type '%s' is not recognized.", $type)));

        return CustomComponent::from($type)->getComponent();
    }
}
