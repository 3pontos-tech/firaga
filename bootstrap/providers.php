<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelServiceProvider;
use App\Providers\Filament\ConsultantPanelServiceProvider;
use App\Providers\FilamentServiceProvider;

return [
    AppServiceProvider::class,
    FilamentServiceProvider::class,
    AdminPanelServiceProvider::class,
    ConsultantPanelServiceProvider::class,
];
