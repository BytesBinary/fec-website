<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use Illuminate\Http\Request;

class EditPage extends Controller
{
    public function edit_page($id, $slug)
    {
        $page = get_page_details($slug);
        $page_metas = PageMetas::where('page_id', $id)->get();
        foreach ($page_metas as $meta) {
            $meta->meta_value = json_decode($meta->meta_value, true);
        }
        return view('admin.edit-pages.edit-home', compact('page','page_metas'));
    }
}
