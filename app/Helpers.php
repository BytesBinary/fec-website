<?php

if( ! function_exists( 'is_active_route' ) ) {
    function is_active_route($route) : string
    {
        return request()->routeIs($route) ? 'active' : '';
    }
}

if( ! function_exists( 'get_page_slug' ) ) {
    function get_page_slug($id) {
        $page = \App\Models\Pages::where('id', $id)->first();
        return $page->page_slug;
    }
}

if( ! function_exists( 'get_pages' ) ) {
    function get_pages() {
        $pages = \App\Models\Pages::all();
        $convertedPages = [];
        foreach($pages as $page) {
            $pageData = $page->toArray();
            if( $page->page_parent ) {
                $slug = get_page_slug($page->page_parent);
                $convertedPages[$slug]['subpage'][$page->page_slug] = $pageData;
            } else {
                if( $page->page_type === 'parent' ) {
                    if( array_key_exists('subpage', $convertedPages[$page->page_slug] ) ) {
                        $pageData['subpage'] = $convertedPages[$page->page_slug]['subpage'];
                    }
                    $convertedPages[$page->page_slug] = $pageData;
                }
                else {
                    $convertedPages[$page->page_slug] = $pageData;
                }
            }
        }
        return $convertedPages;
    }
}
