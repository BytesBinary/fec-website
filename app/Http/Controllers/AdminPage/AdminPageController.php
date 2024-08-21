<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
   public function load_page()
   {
       return view('admin.dashboard');
   }
}
