<?php

namespace App\Http\Controllers\NoticePage;

use App\Http\Controllers\Controller;
use App\Models\Notices;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class NoticePageController extends Controller
{
    public function load_page()
    {
        $page = get_page_details('notices');
        $notices = Notices::all();
        return view('notice', compact('page', 'notices'));
    }
}
