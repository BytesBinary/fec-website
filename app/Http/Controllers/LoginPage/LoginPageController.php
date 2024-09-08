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
        if(Auth::check() && Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.dashboard');
        }
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
            return redirect()->intended('admin/dashboard');
        }
        return back()->withErrors([
            'failed' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
