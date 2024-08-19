<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function admin()
    {
        return view('pages.admin');
    }
}
