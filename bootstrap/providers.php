<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelServiceProvider;
use App\Providers\Filament\ConsultantPanelServiceProvider;
use TresPontosTech\Consultant\ConsultantServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelServiceProvider::class,
    ConsultantPanelServiceProvider::class,
    ConsultantServiceProvider::class,
];
