<?php

declare(strict_types=1);

use App\Filament\Components\Landing\IconSolutionsComponent;
use App\Filament\Components\Landing\MainHeroComponent;
use App\Filament\Resources\CMS\MenuResource\RelationManagers\ItemsRelationManager;
use App\Models\CMS\Category;
use App\Models\CMS\Menu;
use App\Models\CMS\MenuItem;
use App\Models\CMS\Page;
use App\Models\CMS\Post;
use App\Models\User;
use Awcodes\Curator\Models\Media;
use Webid\Druid\Models\ReusableComponent;
use Webid\Druid\Services\ContentRenderer\BladeRenderer;

return [
    /*
     |--------------------------------------------------------------------------
     | Models
     |--------------------------------------------------------------------------
     */

    'models' => [
        'user' => User::class,
        'media' => Media::class,
        'page' => Page::class,
        'post' => Post::class,
        'category' => Category::class,
        'menu' => Menu::class,
        'menu_item' => MenuItem::class,
        'reusable_component' => ReusableComponent::class,
    ],

    /*
     |--------------------------------------------------------------------------
     | Menu
     |--------------------------------------------------------------------------
     */

    'enable_menu_module' => true,
    'menu' => [
        'menu_items_relation_manager' => ItemsRelationManager::class,
    ],

    /*
     |--------------------------------------------------------------------------
     | Page
     |--------------------------------------------------------------------------
     */

    'enable_page_module' => true,

    /*
     |--------------------------------------------------------------------------
     | Multilingual feature
     |--------------------------------------------------------------------------
     */
    'enable_multilingual_feature' => false,
    'locales' => [
        'en' => [
            'label' => 'English',
        ],
        'fr' => [
            'label' => 'French',
        ],
        'de' => [
            'label' => 'German',
        ],
    ],
    'default_locale' => 'en',

    /*
     |--------------------------------------------------------------------------
     | SEO
     |--------------------------------------------------------------------------
     */
    'disable_robots_follow' => env('DISABLE_ROBOTS_FOLLOW', false),

    /*
     |--------------------------------------------------------------------------
     | Components
     |--------------------------------------------------------------------------
     | Components are reusable blocks that can be used in pages or posts.
     | You can create your own components by implementing the ComponentInterface.
     |--------------------------------------------------------------------------
     */
    'components' => [
        // Landing Components
        ['class' => MainHeroComponent::class],
        ['class' => IconSolutionsComponent::class],

        // Blog components
        ['class' => \App\Filament\Components\Blog\TextComponent::class],
    ],

    /*
     |--------------------------------------------------------------------------
     | Contents renderer
     |--------------------------------------------------------------------------
     */
    'content_renderer' => [
        'type' => BladeRenderer::class,
    ],

    /*
     |--------------------------------------------------------------------------
     | Blog
     |--------------------------------------------------------------------------
     */
    'enable_blog_module' => false,
    'enable_default_blog_routes' => false,
    'blog' => [
        'posts_per_page' => 10,
        'prefix' => 'blog',
    ],
];
