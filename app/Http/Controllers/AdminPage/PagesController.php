<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomePage\EditPage;
use App\Models\Pages;

class PagesController extends Controller
{
    public function all_pages()
    {
        $pages = Pages::all();
        return view('admin.pages', ['pages' => $pages]);
    }

    public function edit_page($slug)
    {
        $id = Pages::where('page_slug', $slug)->first()->id;
        if($slug === 'home') {
            return (new EditPage)->edit_page($id, $slug);
        }

        return redirect()->back();
    }
}
