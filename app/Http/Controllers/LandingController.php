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
            'cardData' => [
                [
                    'title' => 'Learn',
                    'description' => 'Discover the basics of financial education.',

                ],
                [
                    'title' => 'Save',
                    'description' => 'Find out how to save money effectively.',

                ],
                [
                    'title' => 'Invest',
                    'description' => 'Learn about investment strategies.',

                ],
            ],
            'solutionsData' => [
                [
                    'title' => 'Personal Finance',
                    'description' => 'Manage your personal finances with ease.',
                    'route' => '/personal-finance',
                ],
                [
                    'title' => 'Budgeting',
                    'description' => 'Create and stick to a budget that works for you.',
                    'route' => '/budgeting',
                ],
                [
                    'title' => 'Debt Management',
                    'description' => 'Learn how to manage and reduce your debt.',
                    'route' => '/debt-management',
                ],
            ],
        ]);
    }
}
