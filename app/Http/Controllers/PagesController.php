<?php

namespace App\Http\Controllers;

use App\Models\CMS\Page;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function show(?string $page = null): View
    {
        if (request()->is('/')) {
            $page = '/';
        }

        $page = Page::query()->where('slug', $page)
            ->where('status', 'published')
            ->with('media')
            ->whereNull('deleted_at')
            ->firstOrFail();

        return view('pages.index', [
            'page' => $page,
        ]);
    }
}
