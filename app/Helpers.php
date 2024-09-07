<?php

use App\Models\PageMetas;
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

if( !function_exists( 'create_unique_meta_key' ) ) {
    function create_unique_meta_key( $base_key )
    {
        $metaKey = $base_key;
        $count = 1;
        while( PageMetas::where('meta_key', $metaKey)->exists() ) {
            $metaKey = $base_key . '_' . $count;
            $count++;
        }

        return $metaKey;
    }
}

if( ! function_exists( 'get_page_id_by_slug') ) {
    function get_page_id_by_slug( $slug )
    {
        $page =  Pages::where('page_slug', $slug)->first();

        if( $page ) {
            return $page->id;
        }

        return false;
    }
}

if( ! function_exists('get_page_meta' )) {
    function get_page_meta( $pageId, $keyName , $keyValue )
    {
        $metas = PageMetas::where('page_id', $pageId)
            ->where($keyName, $keyValue)
            ->get();

        $metas = $metas->toArray();

        if( isset( $metas->meta_value ) ) {
            $metas['meta_value'] = json_decode($metas['meta_value'], true);
        }

        foreach ( $metas as $key=>$meta ) {
            $metas[$key]['meta_value'] = json_decode($metas[$key]['meta_value'], true);
        }

        return $metas;
    }
}

if( ! function_exists('getFirstTenWords') ) {
    function getFirstTenWords($htmlContent) {
        // Strip HTML tags
        $text = strip_tags($htmlContent);

        // Normalize spaces and trim the text
        $text = preg_replace('/\s+/', ' ', $text);
        $text = trim($text);

        // Split text into words
        $words = preg_split('/\s+/', $text);

        // Get the first 10 words
        $firstTenWords = array_slice($words, 0, 10);

        // Join words into a string
        $result = implode(' ', $firstTenWords);

        return $result;
    }
}
