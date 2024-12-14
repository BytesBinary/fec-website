<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $seeders = [
            UserSeeder::class,
            CourseSeeder::class,
            SettingsSeeder::class,
            ResidenceSeeder::class,
        ];
        $this->call($seeders);
    }
}
