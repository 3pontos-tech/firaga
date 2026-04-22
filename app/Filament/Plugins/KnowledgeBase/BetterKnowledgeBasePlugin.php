<?php

declare(strict_types=1);

namespace App\Filament\Plugins\KnowledgeBase;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\Support\Icons\Heroicon;
use Filament\View\PanelsRenderHook;
use Guava\FilamentKnowledgeBase\Contracts\Documentable;
use Guava\FilamentKnowledgeBase\Enums\NodeType;
use Guava\FilamentKnowledgeBase\KnowledgeBaseRegistry;
use Guava\FilamentKnowledgeBase\Plugins\KnowledgeBasePlugin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

class BetterKnowledgeBasePlugin extends KnowledgeBasePlugin
{
    public function register(Panel $panel): void
    {
        $this->docsPath ??= base_path('docs'.DIRECTORY_SEPARATOR.$panel->getId());

        $panel->resources([
            BetterKnowledgeDocumentationResource::class,
        ]);

        resolve(KnowledgeBaseRegistry::class)->docsPath($panel->getId(), $this->getDocsPath());

    }

    public function boot(Panel $panel): void
    {
        Filament::serving(function () use ($panel): void {
            $user = Auth::user();
            $locale = $user?->locale;

            if (filled($locale)) {
                App::setLocale($locale);
            }

            $isDocsRoute = request()->routeIs('filament.*.resources.docs.*');

            if (!$isDocsRoute) {
                $this->registerDocumentationNavItem($panel);

                return;
            }

            $this->overrideNavigationWithDocs($panel);
        });
    }

    /**
     * Adds a "Documentation" nav item to the regular admin sidebar.
     */
    protected function registerDocumentationNavItem(Panel $panel): void
    {
        $firstDoc = BetterFlatfileNode::query()
            ->where('panel_id', $panel->getId())
            ->where('active', true)
            ->type(NodeType::Documentation)
            ->get()
            ->sort(fn (Documentable $d1, Documentable $d2) => $d1->getOrder() <=> $d2->getOrder())
            ->first();

        if (!$firstDoc) {
            return;
        }

        $url = BetterViewDocumentation::getUrl(
            parameters: ['record' => $firstDoc],
            panel: $panel->getId(),
        );

        $panel->navigationItems([
            NavigationItem::make(__('filament-knowledge-base::translations.knowledge-base'))
                ->icon(Heroicon::OutlinedBookOpen)
                ->url($url)
                ->sort(999),
        ]);
    }

    /**
     * Replaces the entire sidebar with documentation navigation + a "Go Back" item.
     */
    protected function overrideNavigationWithDocs(Panel $panel): void
    {
        $allNodes = BetterFlatfileNode::query()
            ->where('panel_id', $panel->getId())
            ->get();

        $groups = $allNodes
            ->filter(fn (BetterFlatfileNode $node) => $node->getType() === NodeType::Group)
            ->sort(fn (BetterFlatfileNode $a, BetterFlatfileNode $b) => $a->getOrder() <=> $b->getOrder());

        $docNodes = $allNodes
            ->filter(fn (BetterFlatfileNode $node) => $node->isActive() && in_array($node->getType(), [NodeType::Documentation, NodeType::Link]))
            ->sort(fn (Documentable $a, Documentable $b) => $a->getOrder() <=> $b->getOrder());

        $panelId = $panel->getId();
        $makeUrl = fn (BetterFlatfileNode $node): string => BetterViewDocumentation::getUrl(
            parameters: ['record' => $node],
            panel: $panelId,
        );

        $ungroupedItems = $docNodes
            ->filter(fn (BetterFlatfileNode $node) => $node->parent()?->getType() !== NodeType::Group)
            ->map(function (Documentable $node) use ($makeUrl): NavigationItem {
                $url = $makeUrl($node);

                return NavigationItem::make($node->getTitle())
                    ->sort($node->getOrder())
                    ->icon($node->getIcon())
                    ->url($url)
                    ->isActiveWhen(fn () => url()->current() === $url);
            })
            ->values()
            ->all();

        $navigationGroups = $groups->map(function (BetterFlatfileNode $group) use ($docNodes, $makeUrl): NavigationGroup {
            $hasGroupIcon = filled($group->getIcon());

            $groupItems = $docNodes
                ->filter(fn (BetterFlatfileNode $node) => $node->parent()?->id === $group->id)
                ->map(function (Documentable $node) use ($hasGroupIcon, $makeUrl): NavigationItem {
                    $url = $makeUrl($node);
                    $item = NavigationItem::make($node->getTitle())
                        ->sort($node->getOrder())
                        ->url($url)
                        ->isActiveWhen(fn () => url()->current() === $url);

                    if (!$hasGroupIcon) {
                        $item->icon($node->getIcon());
                    }

                    return $item;
                })
                ->values()
                ->all();

            return NavigationGroup::make($group->getTitle())
                ->icon($group->getIcon())
                ->items($groupItems);
        })->values()->all();

        $dashboardUrl = Dashboard::getUrl(panel: $panel->getId());

        FilamentView::registerRenderHook(
            PanelsRenderHook::SIDEBAR_NAV_START,
            fn () => Blade::render(
                '<a href="{{ $url }}" class="flex items-center gap-x-2 px-3 py-2 mb-3 rounded-lg text-sm text-gray-500 dark:text-gray-400 bg-gray-50 dark:bg-white/5 hover:bg-gray-100 dark:hover:bg-white/10 hover:text-primary-600 dark:hover:text-primary-400 transition duration-150 ease-in-out group">
                    <x-filament::icon icon="heroicon-o-arrow-left" class="h-4 w-4 shrink-0 transition-transform duration-150 group-hover:-translate-x-0.5" />
                    <span>{{ $label }}</span>
                </a>',
                [
                    'url' => $dashboardUrl,
                    'label' => __('knowledge_base.back_to_panel', ['panel' => mb_ucfirst($panel->getId())]),
                ],
            ),
        );

        $panel->navigation(fn (NavigationBuilder $builder): NavigationBuilder => $builder
            ->items([
                ...$ungroupedItems,
            ])
            ->groups($navigationGroups));
    }
}
