<?php

namespace App\Http\Controllers;

use App\Models\CMS\Page;
use Illuminate\View\View;

class MarketingLandingController extends Controller
{
    public function __invoke(Page $page): View
    {
        return view('marketing', [
            'page' => $page,
        ]);
    }
}
