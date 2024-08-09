@php
$pages = get_pages();
dd($pages);
@endphp
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="#" class="logo d-flex align-items-center me-auto">
            <img src="{{asset('assets\img\FEClogo.png')}}" alt="">
            <h1 class="sitename">FEC</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                @foreach ($pages as $page)
                    @if ( $page->page_type !== 'parent' )
                        <li><a href="{{ route($page->page_slug)  }}" class="{{ is_active_route($page->page_slug) }}">{{ $page->page_title }}</a></li>
                    @else
                    <li class="dropdown"><a href="#"><span>{{ $page->page_title }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            @if( isset($page->subpages) )
                                @foreach ($page->subpages as $subpage )
                                    <li href=""><a href="">{{ $subpage->page_title }}</a></li>
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
