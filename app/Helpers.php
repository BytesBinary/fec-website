<?php

if( ! function_exists( 'is_active_route' ) ) {
    function is_active_route($route) : string
    {
        return request()->routeIs($route) ? 'active' : '';
    }
}
