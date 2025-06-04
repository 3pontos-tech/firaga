<?php

arch()
    ->expect('App')
    ->not->toUse(['die', 'dd', 'dump']);
arch()->preset()->php();
arch()->preset()->laravel()->ignoring(expect('App\Http\Controllers')
    ->not->toHavePublicMethodsBesides(['__construct', '__invoke', 'index', 'show', 'create', 'store', 'edit', 'update', 'destroy', 'middleware']));

arch()->preset()->security()->ignoring('assert');
