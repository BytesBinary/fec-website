<?php

namespace App\Http\Controllers\NoticePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticePageController extends Controller
{
    public function load_page()
    {
        return view('notice');
    }
}
