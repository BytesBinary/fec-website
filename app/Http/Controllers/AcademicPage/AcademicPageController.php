<?php

namespace App\Http\Controllers\AcademicPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicPageController extends Controller
{
    public function syllabus(){
        return view('academics.syllabus');
    }
    public function semester_plan(){
        return view('academics.semester-plan');
    }
    public function login(){
        return view('academics.login');
    }
}
