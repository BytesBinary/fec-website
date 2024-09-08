<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::create([
            'name' => 'Jakiur Rahman',
            'email' => 'ajdmjakiurrahman1234@gmail.com',
            'phone' => '01752887426',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
