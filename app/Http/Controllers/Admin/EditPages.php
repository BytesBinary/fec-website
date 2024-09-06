<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Models\Pages;
use Illuminate\Http\Request;

class EditPages extends Controller
{
    public function edit_page($slug)
    {
        switch ($slug) {
            case 'home':
                $controller = \App\Http\Controllers\HomePage\EditPage::class;
                break;
            default:
                return redirect()->back();
        }

        return (new $controller)->view_edited_changes();
    }

    public function edit_section($slug, $section)
    {
        switch ($slug) {
            case 'home':
                $controller = \App\Http\Controllers\HomePage\EditPage::class;
                break;
            default:
                return redirect()->back();
        }

        return (new $controller)->edit_page(get_page_id_by_slug($slug), $slug, $section);
    }

    public function save_changes(Request $request, $slug, $section)
    {
        switch ($slug) {
            case 'home':
                $controller = \App\Http\Controllers\HomePage\EditPage::class;
                break;
            default:
                return redirect()->back();
        }

        return (new $controller)->edit_section($section, $request, get_page_id_by_slug($slug));
    }
}
