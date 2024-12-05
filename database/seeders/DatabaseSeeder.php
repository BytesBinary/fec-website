<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@fec.com',
            'designation' => 'super_admin',
            'password' => bcrypt('admin'),
        ]);
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            SettingsSeeder::class,
            ResidenceSeeder::class,
        ]);
    }
}
