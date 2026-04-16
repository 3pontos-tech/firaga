<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use AlizHarb\ActivityLog\ActivityLogPlugin;
use App\Enums\FilamentPanel;
use App\Enums\NavigationGroup;
use App\Filament\Pages\Authentication;
use App\Filament\Plugins\KnowledgeBase\BetterKnowledgeBasePlugin;
use Basement\BetterMails\Filament\FilamentBetterEmailPlugin;
use Filament\Actions\Action;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup as BaseNavigationGroup;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Guava\FilamentKnowledgeBase\Plugins\KnowledgeBaseCompanionPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use Joaopaulolndev\FilamentEditProfile\Pages\EditProfilePage;

class AdminPanelServiceProvider extends PanelProvider
{
    private FilamentPanel $panelId = FilamentPanel::Admin;

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(Authentication::class)
            ->colors([
                'primary' => Color::Amber,
                'success' => Color::Green,
                'warning' => Color::Yellow,
                'danger' => Color::Red,
                'info' => Color::Indigo,
                'gray' => Color::Gray,
            ])
            ->topbar(false)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->viteTheme(sprintf('resources/css/filament/%s/theme.css', $this->panelId->value))
            ->defaultThemeMode(config('sycorax.filament.theme_mode'))
            ->discoverResources(in: modules_path('panel-admin/src/Filament/Resources'), for: 'He4rt\\Admin\\Filament\\Resources')
            ->discoverPages(in: modules_path('panel-admin/src/Filament/Pages'), for: 'He4rt\\Admin\\Filament\\Pages')
            ->discoverWidgets(in: modules_path('panel-admin/src/Filament/Widgets'), for: 'He4rt\\Admin\\Filament\\Widgets')
            ->discoverClusters(in: modules_path('panel-admin/src/Filament/Clusters'), for: 'He4rt\\Admin\\Filament\\Clusters')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->navigationGroups(collect(NavigationGroup::navigation())
                ->map(fn ($group) => BaseNavigationGroup::make()->label($group->getLabel()))
                ->toArray())
            ->userMenuItems([
                'profile' => Action::make('profile')
                    ->label(fn (): string => __('My Profile'))
                    ->url(fn (): string => EditProfilePage::getUrl())
                    ->icon('fas-user-pen'),
            ])
            ->plugins([
                FilamentBetterEmailPlugin::make(),
                BetterKnowledgeBasePlugin::make(),
                KnowledgeBaseCompanionPlugin::make()
                    ->helpMenuRenderHook(PanelsRenderHook::SIDEBAR_FOOTER)
                    ->knowledgeBasePanelId('admin')
                    ->disableKnowledgeBasePanelButton()
                    ->modalPreviews()
                    ->slideOverPreviews(),
                ActivityLogPlugin::make()
                    ->label('Log')
                    ->pluralLabel('Logs')
                    ->navigationGroup(NavigationGroup::System),
                FilamentEditProfilePlugin::make()
                    ->slug('profile')
                    ->setTitle(__('My Profile'))
                    ->setNavigationLabel(__('My Profile'))
                    ->setNavigationGroup(__('Group Profile'))
                    ->shouldRegisterNavigation(false)
                    ->shouldShowDeleteAccountForm(false)
                    ->shouldShowBrowserSessionsForm()
                    ->shouldShowLocaleForm(
                        options: [
                            'en' => 'English',
                            'pt_BR' => 'Português',
                        ],
                    )
                    ->shouldShowThemeColorForm(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
