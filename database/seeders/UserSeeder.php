<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Md. Suman Reza',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Rasel Ahmed',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Zillur Rahman',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Shah Jamal Molla',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Zannatun Naeem',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Chandra Mohan Halder',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Sameya Akter',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Rany Ahmed',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ayesha Akter',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Afia Begum',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Mohammad Shamsul Islam',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Tuhin Reza',
                'designation' => 'Teacher',
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
        ];

        foreach ( $teachers as $teacher ) {
            $teacher = User::create($teacher);
        }
    }
}
