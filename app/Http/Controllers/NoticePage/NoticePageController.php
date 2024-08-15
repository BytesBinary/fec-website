<?php

namespace App\Http\Controllers\NoticePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticePageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('notices');
        return view('notice', compact('page'));
    }
}
