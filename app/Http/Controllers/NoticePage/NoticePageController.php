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
        $notices = Notices::where('type','notice')->orderBy('created_at', 'desc')->get();
        return view('pages.notice', compact('page', 'notices'));
    }
}
