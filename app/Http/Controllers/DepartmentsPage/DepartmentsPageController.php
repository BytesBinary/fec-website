<?php

namespace App\Http\Controllers\DepartmentsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsPageController extends Controller
{
    public function computer_science(){
        return view('pages.departments.computer-science-&-engineering');
    }

    public function electrical_electronics(){
        return view('pages.departments.electrical-&-electronic-engineering');
    }
    public function civil(){
        return view('pages.departments.civil');
    }
    public function non_tech(){
        return view('pages.departments.non-tech');
    }
}
