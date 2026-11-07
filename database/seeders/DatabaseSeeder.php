<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Demo account for testing
        User::firstOrCreate(
            ['email' => 'demo@artistack.com'],
            [
                'name' => 'Demo Artist',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
