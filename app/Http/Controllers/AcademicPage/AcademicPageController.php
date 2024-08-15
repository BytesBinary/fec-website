<?php

namespace App\Http\Controllers\AcademicPage;

use App\Http\Controllers\Controller;
use App\Models\Notices;
use Illuminate\Http\Request;

class AcademicPageController extends Controller
{
    public function syllabus(){
        $page = get_page_details('academics/syllabus');
        $syllabuses = Notices::where('type','syllabus')->orderBy('created_at', 'desc')->get();
        return view('academics.syllabus',compact('page','syllabuses'));
    }
    public function semester_plan(){
        return view('academics.semester-plan');
    }
    public function login(){
        return view('academics.login');
    }
}
