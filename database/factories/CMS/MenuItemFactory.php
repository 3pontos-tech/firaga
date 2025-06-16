<?php

namespace Database\Factories\CMS;

use App\Models\CMS\Menu;
use App\Models\CMS\MenuItem;
use App\Models\CMS\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Webid\Druid\Enums\MenuItemTarget;

class MenuItemFactory extends Factory
{
    protected $model = MenuItem::class;

    public function definition(): array
    {
        return [
            'menu_id' => MenuFactory::new(),
            'label' => $this->faker->name,
            'order' => $this->faker->numberBetween(0, 30),
            'parent_item_id' => null,
            'target' => MenuItemTarget::SELF->value,
            'type' => 'page',
        ];
    }

    public function forMenu(Menu $menu): self
    {
        return $this->state(function () use ($menu): array {
            return [
                'menu_id' => $menu->getKey(),
            ];
        });
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
        return $this->state(function () use ($page): array {
            return [
                'model_id' => $page->getKey(),
                'model_type' => $page->getMorphClass(),
                'label' => $page->getMenuLabel(),
                'type' => 'page',
            ];
        });
    }

    public function forCustomUrl(string $url, string $label): self
    {
        return $this->state(function () use ($url, $label): array {
            return [
                'model_id' => null,
                'model_type' => null,
                'custom_url' => $url,
                'label' => $label,
                'type' => 'custom',
            ];
        });
    }
}
