<?php

namespace App\Http\Controllers\DepartmentsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsPageController extends Controller
{
    public function computer_science(){
        return view('departments.computer-science-&-engineering');
    }

    public function electrical_electronics(){
        return view('deparments.electrical-&-electronic-engineering');
    }
    public function civil(){
        return view('departments.civil-engineering');
    }
    public function non_tech(){
        return view('departments.non-tech');
    }
}
