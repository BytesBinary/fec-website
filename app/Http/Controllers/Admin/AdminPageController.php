<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;

class AdminPageController extends Controller
{
   public function load_dashboard_page()
   {
       return view('admin.dashboard');
   }

    public function get_all_editable_pages()
    {
        $pages = Pages::where(function($query) {
            $query->where('page_type', '!=', 'parent')
                ->orWhereNull('page_type');
        })
            ->where('is_editable', 'true')
            ->get();
        return view('admin.pages', ['pages' => $pages]);
    }
}
