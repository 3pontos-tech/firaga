<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelServiceProvider;
use Webid\Druid\DruidServiceProvider;

return [
    AppServiceProvider::class,
    AdminPanelServiceProvider::class,
    DruidServiceProvider::class,
];
