<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Persists campaign parameters in the session using first-touch attribution: the first
 * request of the session that carries any allowlisted parameter wins, and later
 * navigation (with or without parameters) never overwrites it.
 */
class CaptureLeadAttribution
{
    public const string SESSION_KEY = 'lead_attribution';

    /**
     * @var list<string>
     */
    public const array PARAMETERS = [
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
        'utm_term',
        'gclid',
        'gbraid',
        'wbraid',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->isMethod('GET') && $request->hasSession() && !$request->session()->has(self::SESSION_KEY)) {
            $attribution = collect(self::PARAMETERS)
                ->mapWithKeys(fn (string $parameter): array => [$parameter => $request->query($parameter)])
                ->filter(fn (mixed $value): bool => is_string($value) && mb_trim($value) !== '')
                ->all();

            if ($attribution !== []) {
                $request->session()->put(self::SESSION_KEY, $attribution);
            }
        }

        return $next($request);
    }
}
