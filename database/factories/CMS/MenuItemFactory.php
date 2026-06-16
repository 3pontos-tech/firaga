<?php

declare(strict_types=1);

namespace Database\Factories\CMS;

use App\Enums\MenuItemTarget;
use App\Models\CMS\Menu;
use App\Models\CMS\MenuItem;
use App\Models\CMS\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MenuItem>
 */
class MenuItemFactory extends Factory
{
    protected $model = MenuItem::class;

    public function definition(): array
    {
        return [
            'menu_id' => MenuFactory::new(),
            'label' => fake()->name,
            'order' => fake()->numberBetween(0, 30),
            'parent_item_id' => null,
            'target' => MenuItemTarget::SELF->value,
            'type' => 'page',
        ];
    }

    public function forMenu(Menu $menu): self
    {
        return $this->state(fn (): array => [
            'menu_id' => $menu->getKey(),
        ]);
    }

    /**
     * @param  array<string, mixed>  $params
     */
    public function withPageItem(array $params = []): self
    {
        return $this->state(function () use ($params): array {
            /** @var Page $page */
            $page = PageFactory::new()->create($params);

            return [
                'model_id' => $page->getKey(),
                'model_type' => $page->getMorphClass(),
                'type' => 'page',
            ];
        });
    }

    public function forExistingPage(Page $page): self
    {
        return $this->state(fn (): array => [
            'model_id' => $page->getKey(),
            'model_type' => $page->getMorphClass(),
            'label' => $page->getMenuLabel(),
            'type' => 'page',
        ]);
    }

    public function forCustomUrl(string $url, string $label): self
    {
        return $this->state(fn (): array => [
            'model_id' => null,
            'model_type' => null,
            'custom_url' => $url,
            'label' => $label,
            'type' => 'custom',
        ]);
    }
}
