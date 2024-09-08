@php
    $pages = get_pages();
@endphp

@if(is_active_route('home'))
    <!-- Top Navigation Section -->
    <div id="top-section" class="top-section d-flex justify-content-center align-items-center">
        <a href="#" class="mx-2"><i class="bi bi-key-fill"></i> FEC Login</a>
        <a href="{{route('events')}}" class="mx-2"><i class="bi bi-calendar-check"></i> Events</a>
        <a href="{{route('researches')}}" class="mx-2"><i class="bi bi-calendar"></i> Research</a>
        <a href="{{route('contactus')}}" class="mx-2"><i class="bi bi-send-check"></i> Contact Us</a>
    </div>
@endif

<!-- Main Header Section -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="#" class="logo d-flex align-items-center me-auto">
            <img src="{{asset('static/logo.png')}}" alt="">
            <h1 class="sitename">FEC</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                @foreach ($pages as $page)
                    @if ( $page['page_slug'] === 'clubs' )
                        <li><a href="{{ route($page['page_slug'])  }}" class="{{ is_active_route($page['page_slug']) }}">{{ $page['page_title'] }}</a></li>
                        @continue
                    @endif
                    @if ( $page['page_type'] !== 'parent' )
                        <li><a href="{{ route($page['page_slug'])  }}" class="{{ is_active_route($page['page_slug']) }}">{{ $page['page_title'] }}</a></li>
                    @else
                        <li class="dropdown"><a href="#"><span>{{ $page['page_title'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                @if( isset($page['subpages']) )
                                    @foreach ($page['subpages'] as $subpage )
                                        <li><a href="{{ route( $subpage['page_slug'] )  }}">{{ $subpage['page_title'] }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
