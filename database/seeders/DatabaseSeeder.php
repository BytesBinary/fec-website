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
            SettingsSeeder::class,
            UserSeeder::class,
            CourseSeeder::class,
            ResidenceSeeder::class,
            EventSeeder::class,
        ];
        $this->call($seeders);
    }
}
