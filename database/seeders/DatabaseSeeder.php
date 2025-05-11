<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => env('ADMIN_ROOT', 'Test User'),
            'email' => env('ADMIN_EMAIL', 'testuser@example.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
        ]);
        $this->call([
            MaterialSeeder::class,
            MaterialContentSeeder::class,
            VideoSeeder::class,
        ]);
    }
}
