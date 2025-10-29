<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelServiceProvider;
use App\Providers\Filament\ConsultantPanelProvider;

return [
    AppServiceProvider::class,
    AdminPanelServiceProvider::class,
    ConsultantPanelProvider::class,
];
