<?php

namespace App\Http\Controllers;

use App\Models\CMS\Page;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function show(Page $page): View
    {
        return view('pages.index', [
            'page' => $page,
        ]);
    }
}
