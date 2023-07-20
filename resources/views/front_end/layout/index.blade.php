<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('front_end/css/home.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('front_end/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/main.css') }}">
</head>
    <body>
        <!-- header-start -->
{{--        {!! config('tb_config.svg_phone') !!}--}}
        @include('front_end.blocks.menu')

        <!-- header-start -->
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
            </div>

            <!-- offset-sidebar start -->
            <div class="offset-sidebar">
                <div class="offset-widget offset-logo mb-30">
                    <a href="{{ url('/') }}">
                        <img style="width: 145px;" src="{{ asset('storage/'.config('tb_config.img_logo')) }}" alt="logo">
                    </a>
                </div>
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20">Giới thiệu</h4>
                        <p class="mb-30">
                            {{ config('tb_config.giới thiệu') }}
                        </p>
                        <a class="c-btn btn-round-02 btn_tr" href="contact.html">liên hệ</a>
                    </div>
                </div>
                <div class="offset-widget mb-30 pr-10">
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Thông tin liên hệ</h4>
                        <p> <i class="fal fa-address-book"></i>{{ config('tb_config.address') }}</p>
                        <p> <i class="fal fa-phone"></i>{{ config('tb_config.phone_home') }}</p>
                        <p> <i class="fal fa-envelope-open"></i> <a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb5b2bab39cb9a4bdb1acb0b9f2bfb3b1">{{ config('tb_config.email') }}</a> </p>
                    </div>
                </div>
            </div>
            <!-- offset-sidebar end -->

            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li class="has-dropdown">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Style 1</a></li>
                            <li><a href="index-2.html">Home Style 2</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="courses.html">Course</a>
                            <li><a href="courses%20-2.html">Course List</a>
                            <li><a href="courses-details.html">Course Details</a>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Events</a>
                        <ul class="sub-menu">
                            <li><a href="events.html">Events List</a></li>
                            <li><a href="events-details.html">Events Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown"><a href="#">Blogs</a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-side.html">Blog Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a>
                            <li><a href="team.html">Team</a>
                            <li><a href="team-details.html">Team Details</a>
                            <li><a href="faq.html">Faq</a>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contacts</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        <main>
            <!-- footer-area-start -->
            @yield('content')
            <footer class="footer-area pt-65 pb-45" data-background="{{ asset('front_end/assets/img/bg/fot-01-bg.png') }}">
                @include('front_end.blocks.footerCourse')
            </footer>
            <!-- footer-area-end -->
        </main>



        <!-- JS here -->
        <script src="{{ asset('front_end/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/jquery.easypiechart.js') }}"></script>
        <script src="{{ asset('front_end/assets/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
