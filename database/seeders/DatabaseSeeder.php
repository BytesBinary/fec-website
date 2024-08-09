<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
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
