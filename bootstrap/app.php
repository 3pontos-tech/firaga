<?php

declare(strict_types=1);

use App\Http\Middleware\CaptureLeadAttribution;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Middleware\TrustProxies;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->replace(
            TrustProxies::class,
            Monicahq\Cloudflare\Http\Middleware\TrustProxies::class
        );

        $middleware->web(append: [CaptureLeadAttribution::class]);

        // Public, unauthenticated lead endpoint: a page left open past the session
        // lifetime would otherwise lose the lead to a CSRF mismatch.
        $middleware->validateCsrfTokens(except: ['leads']);
    })
    ->withExceptions(function (Exceptions $exceptions): void {})
    ->create();
