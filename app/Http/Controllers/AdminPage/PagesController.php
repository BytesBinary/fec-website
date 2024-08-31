<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomePage\EditPage;
use App\Models\PageMetas;
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

    public function change_page_status($slug, $action)
    {
        if(  $action !==  'publish' && $action !== 'unpublish' ) {
            return redirect()->back();
        }

        $page = Pages::where('page_slug', $slug)->first();

        if($page) {
            $page->page_status = $action;
            $page->save();
        }

        return redirect()->back();
    }

    public function delete_meta($id)
    {
        $meta = PageMetas::find($id);
        if( $meta ) {
            $meta_value = json_decode($meta->meta_value, true);
            if( isset($meta_value['image']) ) {
                $image_path = public_path('/images/home/' . $meta_value['image']);
                if( file_exists($image_path) ) {
                    unlink($image_path);
                }
            }
            $meta->delete();
            session()->flash('message', 'Meta deleted successfully');
        }
        return redirect()->back();
    }
}
