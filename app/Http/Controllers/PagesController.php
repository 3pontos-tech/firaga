<?php

namespace App\Http\Controllers;

use App\Models\CMS\Page;

class PagesController extends Controller
{
    public function getPage(Page $page)
    {
        return response()->json($page);
    }
}
