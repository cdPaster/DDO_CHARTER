<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\CharterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Create user first
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            OfficeSeeder::class,
            ServiceSeeder::class,
            RequirementsSeeder::class,
        ]);
    }
}