<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                HomePageSeeder::class,
                AboutCollegePageSeeder::class,
                NoticesPageSeeder::class,
                AcademicPageSeeder::class,
                DepartmentsPageSeeder::class,
                ClubsPageSeeder::class,
                AdmissionPageSeeder::class,
                ContactUsPageSeeder::class
            ]
        );
    }
}
