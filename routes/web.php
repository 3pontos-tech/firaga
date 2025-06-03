<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{page:slug}', [PagesController::class, 'getPage'])
    ->name('page.show')
    ->where('page', '[a-zA-Z0-9\-]+');
