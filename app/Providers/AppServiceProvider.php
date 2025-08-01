<?php

namespace App\Providers;

use App\View\Components\Navbar;
use BezhanSalleh\FilamentShield\FilamentShield;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::component('navbar', Navbar::class);

        $this->configurePolicies();

        $this->configureDB();

        $this->configureModels();

        $this->configureFilament();

        URL::forceHttps($this->app->isProduction() || $this->app->environment('staging'));

    }

    private function configurePolicies(): void {}

    private function configureDB(): void
    {
        DB::prohibitDestructiveCommands($this->app->environment('production'));
    }

    private function configureModels(): void
    {
        Model::preventAccessingMissingAttributes();

        Model::automaticallyEagerLoadRelationships();

        Model::unguard();
    }

    private function configureFilament(): void
    {
        FilamentShield::prohibitDestructiveCommands($this->app->isProduction());

        Table::configureUsing(fn (Table $table): Table => $table->paginationPageOptions([10, 25, 50]));
    }
}
