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
                'title'      => 'Fundamentals of Computers and Computing',
                'code'       => 'CSE-1101',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '2.0',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Discrete Mathematics',
                'code'       => 'CSE-1102',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Electrical Circuits',
                'code'       => 'EEE-1103',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Chemistry',
                'code'       => 'CHE-1104',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Differential and Integral Calculus',
                'code'       => 'MATH-1105',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Government and Public Administration',
                'code'       => 'SS-1106',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '2.0',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Fundamentals of Computers and Computing Lab',
                'code'       => 'CSE-1111',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Electrical Circuits Lab',
                'code'       => 'EEE-1113',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Chemistry Lab',
                'code'       => 'CHE-1114',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '1st',
            ],
            [
                'title'      => 'Fundamentals of Programming',
                'code'       => 'CSE-1201',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Digital Logic Design',
                'code'       => 'CSE-1202',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Physics',
                'code'       => 'PHY-1203',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Methods of Integration, Differential Equations and Series',
                'code'       => 'MATH-1204',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Developing English Language Skills',
                'code'       => 'ENG-1205',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '2.0',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Fundamentals of Programming Lab',
                'code'       => 'CSE-1211',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '3.0',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Digital Logic Design Lab',
                'code'       => 'CSE-1212',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Physics Lab',
                'code'       => 'PHY-1213',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '2nd',
            ],
            [
                'title'      => 'Developing English Language Skills Lab',
                'code'       => 'ENG-1215',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '2nd',
            ],

            [
                'title'      => 'Data Structures and Algorithms',
                'code'       => 'CSE-2101',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Object Oriented Programming',
                'code'       => 'CSE-2102',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Digital Electronics and Pulse Technique',
                'code'       => 'CSE-2103',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Electronic Devices and Circuits',
                'code'       => 'EEE-2104',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Linear Algebra',
                'code'       => 'MATH-2105',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '3.0',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Bangladesh Studies',
                'code'       => 'SS-2106',
                'department' => 'CSE',
                'type'       => 'theory',
                'credit'     => '2.0',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Data Structures and Algorithms Lab',
                'code'       => 'CSE-2111',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Object Oriented Programming Lab',
                'code'       => 'CSE-2112',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Digital Electronics and Pulse Technique Lab',
                'code'       => 'CSE-2113',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '1.5',
                'semester'   => '3rd',
            ],
            [
                'title'      => 'Electronic Devices and Circuits Lab',
                'code'       => 'EEE-2114',
                'department' => 'CSE',
                'type'       => 'Lab',
                'credit'     => '0.75',
                'semester'   => '3rd',
            ],
            // Semester VII
            ['title' => 'Artificial Intelligence', 'code' => 'CSE-4101', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Mathematical and Statistical Analysis for Engineers', 'code' => 'CSE-4102', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Entrepreneurship for IT Business', 'code' => 'SS-4103', 'department' => 'SS', 'type' => 'Theory', 'credit' => '2.0', 'semester' => '7th'],
            ['title' => 'Artificial Intelligence Lab', 'code' => 'CSE-4111', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Internet Programming Lab', 'code' => 'CSE-4113', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Project', 'code' => 'CSE-4114', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '2.0', 'semester' => '7th'],

            // Option-I Courses
            ['title' => 'Robotics Science and Systems', 'code' => 'CSE-4121', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Computational Methods in Bio-molecular Sequence & Structure Analysis', 'code' => 'CSE-4123', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Machine Learning', 'code' => 'CSE-4125', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Information Retrieval', 'code' => 'CSE-4127', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to VLSI Design', 'code' => 'CSE-4131', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Algorithm Engineering', 'code' => 'CSE-4133', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Software Requirements Specification and Analysis', 'code' => 'CSE-4135', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Cryptography and Security', 'code' => 'CSE-4137', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Computer Graphics', 'code' => 'CSE-4139', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Robotics Science and Systems Lab', 'code' => 'CSE-4151', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Computational Methods in Bio-molecular Sequence & Structure Analysis Lab', 'code' => 'CSE-4153', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Introduction to Machine Learning Lab', 'code' => 'CSE-4155', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Information Retrieval Lab', 'code' => 'CSE-4157', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Introduction to VLSI Design Lab', 'code' => 'CSE-4161', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Algorithm Engineering Lab', 'code' => 'CSE-4163', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Software Requirements Specification and Analysis Lab', 'code' => 'CSE-4165', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Cryptography and Security Lab', 'code' => 'CSE-4167', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],
            ['title' => 'Computer Graphics Lab', 'code' => 'CSE-4169', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '7th'],



            // Option-II Courses
            ['title' => 'Mathematics for Robotics', 'code' => 'CSE-4122', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Bioinformatics', 'code' => 'CSE-4124', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Data Science', 'code' => 'CSE-4126', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Wireless Networks', 'code' => 'CSE-4128', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Quantum Logic', 'code' => 'CSE-4130', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Graph Theory', 'code' => 'CSE-4132', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Software Project Management', 'code' => 'CSE-4134', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Computer Security', 'code' => 'CSE-4136', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Compiler Design', 'code' => 'CSE-4140', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],


            // Semester VIII
            ['title' => 'Economics', 'code' => 'ECO-4201', 'department' => 'ECO', 'type' => 'Theory', 'credit' => '2.0', 'semester' => '8th'],
            ['title' => 'Society and Technology', 'code' => 'CSE-4202', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '2.0', 'semester' => '8th'],
            ['title' => 'Engineering Ethics', 'code' => 'SS-4203', 'department' => 'SS', 'type' => 'Theory', 'credit' => '2.0', 'semester' => '8th'],
            ['title' => 'Project', 'code' => 'CSE-4214', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],

            // Option-II Courses
            ['title' => 'Mathematics for Robotics', 'code' => 'CSE-4122', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Bioinformatics', 'code' => 'CSE-4124', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Data Science', 'code' => 'CSE-4126', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Wireless Networks', 'code' => 'CSE-4128', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Introduction to Quantum Logic', 'code' => 'CSE-4130', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Graph Theory', 'code' => 'CSE-4132', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Software Project Management', 'code' => 'CSE-4134', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Computer Security', 'code' => 'CSE-4136', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],
            ['title' => 'Compiler Design', 'code' => 'CSE-4140', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '7th'],

            // VIII Option-III Courses
            ['title' => 'Robot Learning', 'code' => 'CSE-4221', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Fundamentals of Genomics and Proteomics', 'code' => 'CSE-4223', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Introduction to Data Mining and Warehousing', 'code' => 'CSE-4225', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Cloud Computing', 'code' => 'CSE-4227', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Introduction to Reversible Computing', 'code' => 'CSE-4229', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Computational Geometry', 'code' => 'CSE-4231', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Software Testing and Verification', 'code' => 'CSE-4233', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Digital Forensic', 'code' => 'CSE-4235', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Digital Image Processing', 'code' => 'CSE-4237', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Parallel and Distributed Systems', 'code' => 'CSE-4239', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],

            // 8th Option-III Lab Courses
            ['title' => 'Robot Learning Lab', 'code' => 'CSE-4251', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Fundamentals of Genomics and Proteomics Lab', 'code' => 'CSE-4253', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Introduction to Data Mining and Warehousing Lab', 'code' => 'CSE-4255', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Cloud Computing Lab', 'code' => 'CSE-4257', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Introduction to Reversible Computing Lab', 'code' => 'CSE-4259', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Computational Geometry Lab', 'code' => 'CSE-4261', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Software Testing and Verification Lab', 'code' => 'CSE-4263', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Digital Forensic Lab', 'code' => 'CSE-4265', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Digital Image Processing Lab', 'code' => 'CSE-4267', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],
            ['title' => 'Parallel and Distributed Systems Lab', 'code' => 'CSE-4269', 'department' => 'CSE', 'type' => 'Lab', 'credit' => '1.5', 'semester' => '8th'],

            // 8th Option-IV Theory Courses
            ['title' => 'Human Robot Interaction', 'code' => 'CSE-4222', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Mobile Robotics', 'code' => 'CSE-4224', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Aerial Robotics', 'code' => 'CSE-4226', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Application of Computational Biology', 'code' => 'CSE-4228', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Human Computer Interaction', 'code' => 'CSE-4230', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Internet of Things', 'code' => 'CSE-4232', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Introduction to Multiple-Valued Logic', 'code' => 'CSE-4234', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'VLSI Layout Algorithms', 'code' => 'CSE-4236', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Concepts of Concurrent Computation', 'code' => 'CSE-4238', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Applied Cryptography', 'code' => 'CSE-4240', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Computer Vision', 'code' => 'CSE-4242', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Computer and Network Security', 'code' => 'CSE-4244', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],
            ['title' => 'Natural Language Processing', 'code' => 'CSE-4246', 'department' => 'CSE', 'type' => 'Theory', 'credit' => '3.0', 'semester' => '8th'],

        ];
        foreach ($courses as $course) {
            DB::table('courses')->insert([
                $course
            ]);
        }
    }
}
