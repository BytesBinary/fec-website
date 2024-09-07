<?php

namespace App\Http\Controllers\AcademicPage;

use App\Http\Controllers\Controller;
use App\Models\CommonResource;
use App\Models\Notices;
use Illuminate\Http\Request;

class AcademicPageController extends Controller
{
    public function syllabus(){
        $page = get_page_details('syllabus');
        $syllabuses = CommonResource::where('type','syllabus')->orderBy('created_at', 'desc')->get();
        return view('pages.syllabus',compact('page','syllabuses'));
    }
    public function calender(){
        return view('pages.calender');
    }
}
