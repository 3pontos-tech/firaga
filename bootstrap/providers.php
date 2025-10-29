<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelServiceProvider;
use App\Providers\Filament\ConsultantPanelServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelServiceProvider::class,
    ConsultantPanelServiceProvider::class,
];
