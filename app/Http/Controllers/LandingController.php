<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function __invoke()
    {
        $heading = 'Viva melhor com educação financeira';

        return view('welcome', [
            'heroData' => [
                'headline' => $heading,
                'subheading' => 'A simple, beautiful, and fast landing page.',
                'buttonText' => 'Get Started',
                'buttonUrl' => '/blog',
            ],
        ]);
    }
}
