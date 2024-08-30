<?php

namespace App\Http\Controllers\LoginPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPageController extends Controller
{
    public function students_login_page()
    {
        return view('pages.students-login');
    }
    public function teachers_login_page()
    {
        return view('pages.teachers-login');
    }
    public function admin_login_page()
    {
        return view('pages.admin-login');
    }

    public function admin_login( Request $request )
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'failed' => 'The provided credentials do not match our records.',
        ]);
    }
}
