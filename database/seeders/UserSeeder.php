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
            ['name' => 'Md. Alamgir Hossain', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Khalil Uddin', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Eklashur Rahman', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Muhammad Yunus Ali', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Abdus Sattar Mia', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Sanowar Hossain', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Engr. Raihan Khan Apu', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Shamsul Islam', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Jannatun Naeem', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Shahjamal Mollah', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Rakibul Islam', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Ekhlas Uddin', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Zillur Rahman', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Partha Mondal', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Tuhin Reza', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Suman Reza', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Samiya Akter', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Afiya Begum', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Shahed Mahmud', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Sohanur Rahman', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Fahad Hossain', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Shihab Uddin', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Md. Rafiqul Islam', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            // Part-time teachers start here
            ['name' => 'Puja Brahma', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Faisal Ahmed', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Anwar Hossain', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Rony Ahmed', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Tanmay Chowdhury Sohel', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
            ['name' => 'Momen Shahriar Shoshi', 'designation' => Designation::where('designation', 'Teacher')->first()->id, 'email' => fake()->email, 'password' => bcrypt('password')],
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
