<?php

namespace App;

use App\Filament\Components\CodeComponent;
use App\Filament\Components\FaqComponent;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Webid\Druid\Components\ComponentInterface;
use Webid\Druid\Components\TextComponent;

class TemplateRender
{
    public static function make(): self
    {
        return new self;
    }

    public function render(string $type, array $data = []): View
    {

        $component = $this->resolveComponent($type);

        return $component->toBlade($data);
    }

    private function resolveComponent(string $type): ComponentInterface
    {
        return match ($type) {
            'text' => app(TextComponent::class),
            'faq' => app(FaqComponent::class),
            'code' => app(CodeComponent::class),
            default => throw new \InvalidArgumentException(__('Unsupported component type: :type', ['type' => $type])),
        };

    }
}
