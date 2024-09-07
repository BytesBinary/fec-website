<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Models\CommonResource;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestStatus\Notice;

class NoticeController extends Controller
{
    public function uploadNotice()
    {
        return view('admin.notices.notices');
    }

    public function modifyNotice(){
        $resources = CommonResource::where('type', 'notice')->get();
        return view('admin.notices.modify-notices', compact('resources'));
    }

}
