<?php

use App\Models\Pages;

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
    function get_pages($status = 'publish') {
        $pages = \App\Models\Pages::where('page_status', $status)->get();
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

if( ! function_exists('get_page_details') ) {
    function get_page_details( $slug, $status = 'publish' )
    {
        return Pages::where('page_slug', $slug )
            ->where('page_status',$status)
            ->first();
    }
}

if( ! function_exists('convertToCamelCase') ) {
    function convertToCamelCase( $string )
    {
        $string = ucwords(str_replace(['-', '_'], ' ', $string));
        return str_replace(' ', ' ', $string);
    }
}

if( ! function_exists('sanitize_request') ) {
    function sanitize_request($request, $exchanges = [], $excepts = []) {
        $data = $request->all();
        foreach ($exchanges as $key => $exchange) {
            if (array_key_exists($key, $data)) {
                $data[$key] = $exchange;
            } else {
                $data[$key] = $exchange;
            }
        }

        $excepts = array_merge($excepts, ['_token', 'submit']);

        foreach ($excepts as $except) {
            unset($data[$except]);
        }

        return $data;
    }
}
