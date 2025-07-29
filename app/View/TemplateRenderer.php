<?php

namespace App\View;

use App\Enums\CustomComponent;
use App\Filament\Components\AbstractCustomComponent;
use App\Models\CMS\Page;
use App\Models\CMS\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\ViewException;

class TemplateRenderer
{
    public static function make(): self
    {
        return new self;
    }

    /**
     * @throws ViewException
     */
    public function render(Page|Post $renderable, string $type, array $data): View
    {
        $component = $this->resolveComponent($type);

        return view($component->getView(), [
            ...$component->setupRenderPayload($data),
            'renderable' => $renderable,
        ]);
    }

    private function resolveComponent(string $type): AbstractCustomComponent
    {
        throw_unless(CustomComponent::tryFrom($type), new ViewException(sprintf("Component type '%s' is not recognized.", $type)));

        return CustomComponent::from($type)->getComponent();
    }
}
