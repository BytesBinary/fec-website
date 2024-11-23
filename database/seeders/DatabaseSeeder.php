<?php

namespace Database\Seeders;

use App\Models\Designation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

use Database\Seeders\CourseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ShieldSeeder::class,
            CourseSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@fec.com',
            'password' => bcrypt('admin'),
        ]);
        $this->create_designations();
        $this->run_command();
    }

    public function create_designations()
    {
        Designation::factory()->createMany([
            ['designation' => 'Teacher'],
            ['designation' => 'Student'],
            ['designation' => 'Principal'],
            ['designation' => 'Department_Head'],
            ['designation' => 'Lab_In_Charge'],
            ['designation' => 'Librarian'],
        ]);
    }

    public function run_command()
    {
        Artisan::call('shield:generate', ['--all' => true]);
        Artisan::call('shield:super-admin');

        $this->command->info('Shield generation completed.');
    }
}
