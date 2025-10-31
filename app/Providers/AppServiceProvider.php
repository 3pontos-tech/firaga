<?php

namespace App\Providers;

use App\Adapter\AbacatePayAdapter;
use App\Contracts\PaymentGatewayContract;
use App\View\Components\Navbar;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //        Http::preventStrayRequests();

        Blade::component('navbar', Navbar::class);

        $this->configurePolicies();

        $this->configureDB();

        $this->configureModels();

        $this->configureFilament();

        PendingRequest::macro('withLocation', fn () => $this->withQueryParameters([
            'locationId' => config('services.highlevel.location'),
        ]));

        PendingRequest::macro('withDefaultVersion', fn (?string $version = null) => $this->withHeader(
            'Version',
            $version ?? config('services.highlevel.version')
        ));

        PendingRequest::macro('withDefaultCompany', fn (?string $companyId = null) => $this->withQueryParameters(
            ['companyId' => $companyId ?? config('services.highlevel.company')]
        ));

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

        Table::configureUsing(fn (Table $table): Table => $table->paginationPageOptions([10, 25, 50]));
    }
}
