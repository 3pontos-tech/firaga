<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use Webid\Druid\DruidServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
    DruidServiceProvider::class,
];
