<?php

namespace App\Http\Controllers;

use Webid\Druid\Models\Page;

class PagesController extends Controller
{
    public function getPage(Page $page)
    {
        return response()->json($page);
    }
}
