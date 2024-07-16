<?php

if( ! function_exists( 'is_active_route' ) ) {
    function is_active_route($route)
    {
        return request()->routeIs($route) ? 'active' : 'sdfsadfas';
    }
}
