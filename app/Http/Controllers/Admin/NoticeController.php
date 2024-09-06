<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function uploadNotice()
    {
        return view('admin.notices.notices');
    }
}
