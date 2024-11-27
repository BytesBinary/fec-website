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
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@fec.com',
            'designation' => 'super_admin',
            'password' => bcrypt('admin'),
        ]);
        $this->call([
            ShieldSeeder::class,
            CourseSeeder::class,
            SettingsSeeder::class,
            ResidenceSeeder::class,
        ]);
        $this->run_command();
    }

    public function run_command()
    {
        Artisan::call('shield:generate', ['--all' => true]);
        Artisan::call('shield:super-admin');

        $this->command->info('Shield generation completed.');
    }
}
