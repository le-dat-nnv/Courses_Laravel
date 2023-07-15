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
                        <a href="{{ url('/') }}"><img style="width: 145px" src="{{ asset('storage/'.config('tb_config.img_logo')) }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-xl-7 d-none d-xl-block">
                    <div class="main-menu text-left ml-15">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active"><a href="index.html">Home <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="index.html">Home Style 1</a></li>
                                        <li><a href="index-2.html">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Courses <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="courses.html">Course</a>
                                        <li><a href="courses%20-2.html">Course List</a>
                                        <li><a href="courses-details.html">Course Details</a>
                                    </ul>
                                </li>
                                <li><a href="#">Events <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="events.html">Events</a>
                                        <li><a href="events-details.html">Events Details</a>
                                    </ul>
                                </li>
                                <li><a href="https://devsnews.com/template/micoach/micoach/blog.html/">News <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-side.html">Blog Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages <i class="far fa-angle-down"></i></a>
                                    <ul class="sub-menu text-left">
                                        <li><a href="about.html">About</a>
                                        <li><a href="team.html">Team</a>
                                        <li><a href="team-details.html">Team Details</a>
                                        <li><a href="faq.html">Faq</a>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
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
                                <a href="{{ route('sing_in_front_end') }}"> <i class="far fa-user-circle"></i>Sing in</a>
                            @else
                                <a href="{{ route('log_out_front_end') }}"> <i class="far fa-user-circle"></i>Log out</a>
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
