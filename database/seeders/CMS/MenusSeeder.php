<?php

declare(strict_types=1);

namespace Database\Seeders\CMS;

use App\Models\CMS\Menu;
use App\Models\CMS\Page;
use Database\Factories\CMS\MenuFactory;
use Database\Factories\CMS\MenuItemFactory;
use Illuminate\Database\Seeder;
use Webid\Druid\Facades\Druid;

class MenusSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->getMenusStructure() as $menuPayload) {

            $pages = $menuPayload['pages'] ?? [];
            unset($menuPayload['pages']);

            /** @var Menu $menu */
            $menu = MenuFactory::new()->create([
                ...$menuPayload,
                'lang' => Druid::getDefaultLocale(),
            ]);

            foreach (config('firaga.pages') as $index => $page) {

                MenuItemFactory::new()
                    ->forExistingPage(Page::query()->where('slug', $page['slug'])->first())
                    ->forMenu($menu)
                    ->create(['order' => $index]);
            }

            MenuItemFactory::new()
                ->forCustomUrl(route('blog.index'), 'Blog')
                ->forMenu($menu)
                ->create(['order' => count($pages) + 1]);

        }
    }

    /**
     * @return array<int, array<string, array<string, string>>>
     */
    protected function getMenusStructure(): array
    {
        return [
            [
                'title' => 'Main menu',
                'slug' => 'main-menu',
            ],
            [
                'title' => 'Footer menu',
                'slug' => 'footer-menu',
            ],
        ];
    }
}
