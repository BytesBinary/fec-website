<?php

namespace Database\Seeders;

use App\Models\Designation;
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
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Rasel Ahmed',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Zillur Rahman',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Shah Jamal Molla',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Zannatun Naeem',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Chandra Mohan Halder',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Sameya Akter',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Rany Ahmed',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ayesha Akter',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Afia Begum',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Mohammad Shamsul Islam',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Md. Tuhin Reza',
                'designation' => Designation::where('designation', 'Teacher')->first()->id,
                'email' => fake()->email,
                'password' => bcrypt('password'),
            ],
        ];

        $programmers = [
            [
                'name' => 'admin',
                'email' => 'admin@fec.edu.bd',
                'designation' => Designation::where('designation', 'Programmer')->first()->id,
                'email_verified_at' => now(),
                'is_admin_verified' => true,
                'password' => bcrypt('BytesbinaryIsGreat'),
            ],
        ];

        foreach ($teachers as $teacher) {
            User::create($teacher);
        }

        foreach ($programmers as $programmer) {
            User::create($programmer);
        }
    }
}
