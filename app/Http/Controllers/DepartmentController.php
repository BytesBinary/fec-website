<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function cse()
    {
        return view('departments.cse-department');
    }

    public function eee()
    {
        return view('departments.eee-department');
    }

    public function ce()
    {
        return view('departments.ce-department');
    }
}
