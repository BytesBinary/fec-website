<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Fundamentals of Computers and Computing',
                'code' => 'CSE-1101',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '2.0',
                'semester' => '1st',
            ],
            [
                'title' => 'Discrete Mathematics',
                'code' => 'CSE-1102',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '1st',
            ],
            [
                'title' => 'Electrical Circuits',
                'code' => 'EEE-1103',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '1st',
            ],
            [
                'title' => 'Chemistry',
                'code' => 'CHE-1104',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '1st',
            ],
            [
                'title' => 'Differential and Integral Calculus',
                'code' => 'MATH-1105',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '1st',
            ],
            [
                'title' => 'Government and Public Administration',
                'code' => 'SS-1106',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '2.0',
                'semester' => '1st',
            ],
            [
                'title' => 'Fundamentals of Computers and Computing Lab',
                'code' => 'CSE-1111',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '1st',
            ],
            [
                'title' => 'Electrical Circuits Lab',
                'code' => 'EEE-1113',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '1st',
            ],
            [
                'title' => 'Chemistry Lab',
                'code' => 'CHE-1114',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '1st',
            ],
            [
                'title' => 'Fundamentals of Programming',
                'code' => 'CSE-1201',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '2nd',
            ],
            [
                'title' => 'Digital Logic Design',
                'code' => 'CSE-1202',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '2nd',
            ],
            [
                'title' => 'Physics',
                'code' => 'PHY-1203',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '2nd',
            ],
            [
                'title' => 'Methods of Integration, Differential Equations and Series',
                'code' => 'MATH-1204',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '2nd',
            ],
            [
                'title' => 'Developing English Language Skills',
                'code' => 'ENG-1205',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '2.0',
                'semester' => '2nd',
            ],
            [
                'title' => 'Fundamentals of Programming Lab',
                'code' => 'CSE-1211',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '3.0',
                'semester' => '2nd',
            ],
            [
                'title' => 'Digital Logic Design Lab',
                'code' => 'CSE-1212',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '2nd',
            ],
            [
                'title' => 'Physics Lab',
                'code' => 'PHY-1213',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '2nd',
            ],
            [
                'title' => 'Developing English Language Skills Lab',
                'code' => 'ENG-1215',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '2nd',
            ],

            [
                'title' => 'Data Structures and Algorithms',
                'code' => 'CSE-2101',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '3rd',
            ],
            [
                'title' => 'Object Oriented Programming',
                'code' => 'CSE-2102',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '3rd',
            ],
            [
                'title' => 'Digital Electronics and Pulse Technique',
                'code' => 'CSE-2103',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '3rd',
            ],
            [
                'title' => 'Electronic Devices and Circuits',
                'code' => 'EEE-2104',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '3rd',
            ],
            [
                'title' => 'Linear Algebra',
                'code' => 'MATH-2105',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '3.0',
                'semester' => '3rd',
            ],
            [
                'title' => 'Bangladesh Studies',
                'code' => 'SS-2106',
                'department' => 'CSE',
                'type' => 'theory',
                'credit' => '2.0',
                'semester' => '3rd',
            ],
            [
                'title' => 'Data Structures and Algorithms Lab',
                'code' => 'CSE-2111',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '3rd',
            ],
            [
                'title' => 'Object Oriented Programming Lab',
                'code' => 'CSE-2112',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '3rd',
            ],
            [
                'title' => 'Digital Electronics and Pulse Technique Lab',
                'code' => 'CSE-2113',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '1.5',
                'semester' => '3rd',
            ],
            [
                'title' => 'Electronic Devices and Circuits Lab',
                'code' => 'EEE-2114',
                'department' => 'CSE',
                'type' => 'Lab',
                'credit' => '0.75',
                'semester' => '3rd',
            ],
        ];
        foreach($courses as $course){
            DB::table('courses')->insert([
                $course
            ]);
        }
    }
}
