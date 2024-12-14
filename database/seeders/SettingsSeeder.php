<?php

namespace Database\Seeders;

use App\Models\AcademicSession;
use App\Models\Batch;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create Academic Sessions and Batches
         */
         $sessions = "2023-2024,2022-2023,2021-2022,2020-2021,2019-2020";;
         $batch = 11;
         foreach ( explode(',', $sessions) as $session ) {
             $details = AcademicSession::create([
                 'session_year' => $session,
             ]);
             if( $details ) {
                 Batch::create([
                     'number' => $batch,
                     'session' => $details->session_year,
                 ]);
             }
             $batch--;
         }

         /**
          * Create Designations
          */
        $designations = [
            ['designation' => 'Teacher'],
            ['designation' => 'Student'],
            ['designation' => 'Principal'],
            ['designation' => 'Department_Head'],
            ['designation' => 'Lab_In_Charge'],
            ['designation' => 'Librarian'],
            ['designation' => 'Programmer'],
        ];

        foreach ( $designations as $designation ) {
            Designation::create($designation);
        }

        $departments = [
            [
                'title' => 'Computer Science And Engineering',
                'short_title' => 'CSE',
            ],
            [
                'title' => 'Electrical And Electronics Engineering',
                'short_title' => 'EEE',
            ],
            [
                'title' => 'Civil Engineering',
                'short_title' => 'CE',
            ]
        ];

        foreach ( $departments as $department ) {
            Department::create($department);
        }
    }
}
