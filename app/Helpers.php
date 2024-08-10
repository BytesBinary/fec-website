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
                $convertedPages[$slug]['subpages'][$page->page_slug] = $pageData;
            } else {
                if( $page->page_type === 'parent' ) {
                    $slug = get_page_slug($page->id);
                    if( array_key_exists($slug, $convertedPages) && array_key_exists('subpages', $convertedPages[$page->page_slug] ) ) {
                        $pageData['subpages'] = $convertedPages[$page->page_slug]['subpages'];
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
