<?php

namespace App\Http\Controllers\LoginPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function students_login()
    {
        return view('pages.login.students-login');
    }
    public function teachers_login()
    {
        return view('pages.login.teachers-login');
    }
    public function admin_login()
    {
        return view('admin.login');
    }
}
