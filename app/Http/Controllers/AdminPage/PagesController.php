<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomePage\EditPage;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function all_pages()
    {
        $pages = Pages::all();
        return view('admin.pages', ['pages' => $pages]);
    }

    public function edit_page($slug, $section)
    {
        $id = Pages::where('page_slug', $slug)->first()->id;
        if($slug === 'home') {
            return (new EditPage)->edit_page($id, $slug, $section);
        }

        return redirect()->back();
    }

    public function save_page(Request $request, $slug, $section)
    {
        $id = Pages::where('page_slug', $slug)->first()->id;
        if($slug === 'home') {
            return (new EditPage)->edit_section($section, $request, $id);
        }

        return redirect()->back();
    }
}
