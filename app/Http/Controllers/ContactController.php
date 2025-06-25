<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactController extends Controller
{
    public function __invoke(): View
    {
     return view('contact.index');
    }
}
