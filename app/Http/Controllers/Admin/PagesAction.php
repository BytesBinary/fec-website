<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageMetas;
use App\Models\Pages;

class PagesAction extends Controller
{
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
        if( is_string($id) ) {
            $meta = PageMetas::where('meta_key',$id)->first();
        }
        if( $meta ) {
            $meta_value = json_decode($meta->meta_value, true);
            if( isset($meta_value['image']) ) {
                $image_path = public_path($meta_value['image']);
                if( file_exists($image_path) ) {
                    unlink($image_path);
                }
            }
            if( isset($meta_value['bg_images']) ) {
                $meta_value['bg_images'] = json_decode($meta_value['bg_images'], true);
                foreach ( $meta_value['bg_images'] as $image ) {
                    $image_path = public_path($image);
                    if( file_exists($image_path) ) {
                        unlink($image_path);
                    }
                }
            }
            $meta->delete();
            session()->flash('message', 'Meta deleted successfully');
        }
        return redirect()->back();
    }
}
