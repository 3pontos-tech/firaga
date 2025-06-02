<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        if (app()->environment('local', 'staging')) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]);
        }
    }
}
