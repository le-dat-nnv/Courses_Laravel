<div class="collapse navbar-collapse row justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav me-0 mb-2 mb-lg-0 justify-content-center col-8 mr-0">
        @foreach($list_menu as $item)
            <li class="nav-item me-4">
                <a class="nav-link text-white" href="#">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
<header class="header-transparent" style="@if(Route::currentRouteName() != '') position: absolute @endif">
    <div id="sticky-header" class="main-menu-area menu-padding pl-55 pr-55">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-7 col-md-6 col-8">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img style="width: 145px"
                                                      src="{{ asset('storage/'.config('tb_config.img_logo')) }}"
                                                      alt=""/></a>
                    </div>
                </div>
                <div class="col-xl-7 d-none d-xl-block">
                    <div class="main-menu text-left ml-15">
                        <nav id="mobile-menu">
                            <ul>
                                @foreach($list_menu as $item)
                                    <li class="active"><a href="{{ url($item->slug) }}">{{ $item->name }}</a>

                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 col-md-6 col-4">
                    <div class="header-right d-sm-flex align-items-center justify-content-end">
                        <div class="header-icon d-none d-md-inline-block">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="header-sing d-none d-md-inline-block">
                            @if(!Auth::check())
                                <a href="{{ route('sing_in_front_end') }}"> <i class="far fa-user-circle"></i>Sing
                                    in</a>
                            @else
                                <a href="{{ route('log_out_front_end') }}"> <i class="far fa-user-circle"></i>Log
                                    out</a>
                            @endif
                        </div>
                        <div class="hamburger-menu menu-bar info-bar">
                            <a href="#"><img src="{{ asset('front_end/assets/img/icon/bar.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
