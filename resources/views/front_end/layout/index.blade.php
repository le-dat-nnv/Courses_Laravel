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
                    <a href="index.html">
                        <img src="assets/img/logo/logo-02.png" alt="logo">
                    </a>
                </div>
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20">About Us</h4>
                        <p class="mb-30">
                            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                            was born and will give you a complete account of the system and expound the actual teachings of
                            the great explore
                        </p>
                        <a class="c-btn btn-round-02" href="contact.html">Contact Us</a>
                    </div>
                </div>
                <div class="offset-widget mb-30 pr-10">
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Contact Info</h4>
                        <p> <i class="fal fa-address-book"></i> 23/A, Miranda City Likaoli Prikano, Dope</p>
                        <p> <i class="fal fa-phone"></i> +0989 7876 9865 9 </p>
                        <p> <i class="fal fa-envelope-open"></i> <a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb5b2bab39cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</a> </p>
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
            <!-- hero-area start -->
            <section class="hero-area pos-rel">
{{--                slider show --}}

                @include('front_end.blocks.banner')
                <div class="hero-slider">
                    <div class="single-slider slider-height d-flex align-items-center"
                         data-background="{{ asset('front_end/assets/img/slider/01.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-9">
                                    <div class="hero-content mt-80">
                                        <div class="hero-slider-caption">
                                        <span data-animation="fadeInUp" data-delay=".5s"><i
                                                class="fal fa-ellipsis-h"></i>
                                            Welcome To EduPlus</span>
                                            <h2 class="mb-45" data-animation="fadeInUp" data-delay=".7s">More than 1200
                                                Online Courses</h2>
                                            <form class="slider-search-form">
                                                <input type="text" placeholder="Search Courses">
                                                <button type="submit"><i class="far fa-search"></i></button>
                                            </form>
                                        </div>
                                        <div class="row support-area align-items-center">
                                            <div class="col-xl-6">
                                                <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="support d-flex align-items-center">
                                                    <div class="support-icon">
                                                        <!-- <i class="fal fa-user-headset"></i> -->
                                                        <i class="flaticon-24-hours"></i>
                                                    </div>
                                                    <div class="support-text">
                                                        <span>online support</span>
                                                        <h6>+012 (345) 6789</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero-area end -->

            <!-- counter-area-start -->
            <div class="counter-area pb-100" id="strengths">
                @include('front_end.blocks.strengths')
            </div>
            <!-- counter-area-end -->

            <!-- course-cat-area-start -->
            <div class="course-cat-area pb-100">
                @include('front_end.blocks.categories')
            </div>
            <!-- course-cat-area-end -->

            <!-- course-area-start -->
            <div class="course-area pt-130 pb-100 black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title section-title-theme text-center mb-75">
                            <span><i class="fal fa-ellipsis-h"></i> Popular Courses <i
                                    class="fal fa-ellipsis-h"></i></span>
                                <h2>Available Courses</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="course-wrapper white-bg mb-30">
                                <div class="course-inner">
                                    <div class="course-img pos-rel mb-25">
                                        <a href="courses-details.html"><img src="assets/img/course/c-01.jpg" alt=""></a>
                                        <div class="course__instructor pos-abl d-flex align-items-center">
                                            <div class="course__instructor--thumb">
                                                <img src="assets/img/course/instructor1.png" alt="">
                                                <h5>Warner</h5>
                                            </div>
                                            <div class="course__instructor--price-tag">
                                                <span>$59.95</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-text">
                                        <div class="course-cat-meta d-flex align-items-center mb-15">
                                            <span><a href="courses-details.html">english</a></span>
                                            <div class="review-icon">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="semi-title pb-30 mb-20"><a href="courses-details.html">Best Courses For
                                                Learning
                                                English Courses</a></h4>
                                        <div class="course-meta">
                                            <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-text course-text-02 theme-bg">
                                    <div class="course-cat-meta course-cat-meta-02 d-flex align-items-center mb-15">
                                        <span><a href="courses-details.html">business</a></span>
                                        <div class="review-icon">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="semi-title mb-30"><a href="courses-details.html">Best Courses For Learning
                                            English Courses</a></h4>
                                    <div class="course__instructor d-flex align-items-center mb-25">
                                        <div class="course__instructor--thumb">
                                            <img src="assets/img/course/instructor1.png" alt="">
                                            <h5>Warner</h5>
                                        </div>
                                        <div class="course__instructor--price-tag">
                                            <span>$59.95</span>
                                        </div>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus
                                        error sit voluptatem accusantium dolorque laudantium totam rem aperiam</p>
                                    <a class="c-btn mb-50" href="courses-details.html">get enrolled <i
                                            class="far fa-arrow-right"></i></a>
                                    <div class="course-meta">
                                        <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="course-wrapper white-bg mb-30">
                                <div class="course-inner">
                                    <div class="course-img pos-rel mb-25">
                                        <a href="courses-details.html"><img src="assets/img/course/c-01.jpg" alt=""></a>
                                        <div class="course__instructor pos-abl d-flex align-items-center">
                                            <div class="course__instructor--thumb">
                                                <img src="assets/img/course/instructor1.png" alt="">
                                                <h5>Warner</h5>
                                            </div>
                                            <div class="course__instructor--price-tag">
                                                <span>$59.95</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-text">
                                        <div class="course-cat-meta d-flex align-items-center mb-15">
                                            <span><a href="courses-details.html">english</a></span>
                                            <div class="review-icon">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="semi-title pb-30 mb-20"><a href="courses-details.html">Best Courses For
                                                Learning
                                                English Courses</a></h4>
                                        <div class="course-meta">
                                            <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-text course-text-02 theme-bg">
                                    <div class="course-cat-meta course-cat-meta-02 d-flex align-items-center mb-15">
                                        <span><a href="courses-details.html">business</a></span>
                                        <div class="review-icon">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="semi-title mb-30"><a href="courses-details.html">Best Courses For Learning
                                            English Courses</a></h4>
                                    <div class="course__instructor d-flex align-items-center mb-25">
                                        <div class="course__instructor--thumb">
                                            <img src="assets/img/course/instructor1.png" alt="">
                                            <h5>Warner</h5>
                                        </div>
                                        <div class="course__instructor--price-tag">
                                            <span>$59.95</span>
                                        </div>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus
                                        error sit voluptatem accusantium dolorque laudantium totam rem aperiam</p>
                                    <a class="c-btn mb-50" href="courses-details.html">get enrolled <i
                                            class="far fa-arrow-right"></i></a>
                                    <div class="course-meta">
                                        <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="course-wrapper white-bg mb-30">
                                <div class="course-inner">
                                    <div class="course-img pos-rel mb-25">
                                        <a href="courses-details.html"><img src="assets/img/course/c-02.jpg" alt=""></a>
                                        <div class="course__instructor pos-abl d-flex align-items-center">
                                            <div class="course__instructor--thumb">
                                                <img src="assets/img/course/instructor1.png" alt="">
                                                <h5>Warner</h5>
                                            </div>
                                            <div class="course__instructor--price-tag">
                                                <span>$59.95</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-text">
                                        <div class="course-cat-meta d-flex align-items-center mb-15">
                                            <span><a href="courses-details.html">english</a></span>
                                            <div class="review-icon">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="semi-title pb-30 mb-20"><a href="courses-details.html">Best Courses For
                                                Learning
                                                English Courses</a></h4>
                                        <div class="course-meta">
                                            <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-text course-text-02 theme-bg">
                                    <div class="course-cat-meta course-cat-meta-02 d-flex align-items-center mb-15">
                                        <span><a href="courses-details.html">business</a></span>
                                        <div class="review-icon">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="semi-title mb-30"><a href="courses-details.html">Best Courses For Learning
                                            English Courses</a></h4>
                                    <div class="course__instructor d-flex align-items-center mb-25">
                                        <div class="course__instructor--thumb">
                                            <img src="assets/img/course/instructor1.png" alt="">
                                            <h5>Warner</h5>
                                        </div>
                                        <div class="course__instructor--price-tag">
                                            <span>$59.95</span>
                                        </div>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus
                                        error sit voluptatem accusantium dolorque laudantium totam rem aperiam</p>
                                    <a class="c-btn mb-50" href="courses-details.html">get enrolled <i
                                            class="far fa-arrow-right"></i></a>
                                    <div class="course-meta">
                                        <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="course-btn text-center mt-35 mb-30">
                                <a class="c-btn" href="courses.html">view all courses <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course-area-end -->

            <!-- gallery-area-start -->
            <div class="gallery-area pt-130 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-60">
                            <span><i class="fal fa-ellipsis-h"></i> Photo & Album <i
                                    class="fal fa-ellipsis-h"></i></span>
                                <h2>Campus Gallery</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="portfolio-menu text-center mb-50">
                                <button class="active" data-filter="*">Show All </button>
                                <button data-filter=".cat1" class="">University</button>
                                <button data-filter=".cat2" class="">Group Study </button>
                                <button data-filter=".cat3" class="">Awards</button>
                                <button data-filter=".cat4" class="">Students</button>
                                <button data-filter=".cat5" class="">Teachers</button>
                                <button data-filter=".cat6" class="">Campus</button>
                            </div>
                        </div>
                    </div>
                    <div id="portfolio-grid" class="row row-portfolio">
                        <div class="grid-sizer"></div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat5">
                            <div class="gallery-wrapper mb-30">
                                <div class="gallery-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/01.jpg" alt=""></a>
                                    <div class="gallery-text">
                                        <h3><a href="blog-details.html">Group Study</a></h3>
                                        <span>University Campus</span>
                                    </div>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/01.jpg"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat6 cat4">
                            <div class="gallery-wrapper mb-30">
                                <div class="gallery-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/02.jpg" alt=""></a>
                                    <div class="gallery-text">
                                        <h3><a href="blog-details.html">Group Study</a></h3>
                                        <span>University Campus</span>
                                    </div>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/02.jpg"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat2 cat4">
                            <div class="gallery-wrapper mb-30">
                                <div class="gallery-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/03.jpg" alt=""></a>
                                    <div class="gallery-text">
                                        <h3><a href="blog-details.html">Group Study</a></h3>
                                        <span>University Campus</span>
                                    </div>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/03.jpg"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat4 cat6">
                            <div class="gallery-wrapper mb-30">
                                <div class="gallery-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/04.jpg" alt=""></a>
                                    <div class="gallery-text">
                                        <h3><a href="blog-details.html">Group Study</a></h3>
                                        <span>University Campus</span>
                                    </div>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/04.jpg"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat4">
                            <div class="gallery-wrapper mb-30">
                                <div class="gallery-img pos-rel">
                                    <a href="#"><img src="assets/img/gallery/05.jpg" alt=""></a>
                                    <div class="gallery-text">
                                        <h3><a href="blog-details.html">Group Study</a></h3>
                                        <span>University Campus</span>
                                    </div>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/05.jpg"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat5 cat3">
                            <div class="gallery-wrapper mb-30">
                                <div class="gallery-img pos-rel">
                                    <a href="blog-details.html"><img src="assets/img/gallery/06.jpg" alt=""></a>
                                    <div class="gallery-text">
                                        <h3><a href="#">Group Study</a></h3>
                                        <span>University Campus</span>
                                    </div>
                                    <div class="gallery-icon">
                                        <a class="popup-image" href="assets/img/gallery/06.jpg"><i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- gallery-area-end -->

            <!-- team-area-start -->
            <div class="team-area grey-bg pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-65">
                            <span><i class="fal fa-ellipsis-h"></i> Team Members <i
                                    class="fal fa-ellipsis-h"></i></span>
                                <h2>Expert Instructors</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team-wrapper mb-30">
                                <div class="team-img pos-rel">
                                    <div class="fix">
                                        <img src="assets/img/team/01.jpg" alt="">
                                    </div>
                                    <div class="team-02-icon">
                                        <div class="inner-team-icon pos-rel">
                                            <div class="team-icon">
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                                                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </div>
                                            <a href="#"><i class="fal fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-text">
                                    <h4><a href="team-details.html">Somalia D Silva</a></h4>
                                    <span>Math Teacher</span>
                                    <div class="team-meta">
                                        <span><i class="far fa-book"></i> 750+ Courses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team-wrapper mb-30">
                                <div class="team-img pos-rel">
                                    <div class="fix">
                                        <img src="assets/img/team/02.jpg" alt="">
                                    </div>
                                    <div class="team-02-icon">
                                        <div class="inner-team-icon pos-rel">
                                            <div class="team-icon">
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                                                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </div>
                                            <a href="#"><i class="fal fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-text">
                                    <h4><a href="team-details.html">David D Warner</a></h4>
                                    <span>English Teacher</span>
                                    <div class="team-meta">
                                        <span><i class="far fa-book"></i> 3850+ Courses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team-wrapper mb-30">
                                <div class="team-img pos-rel">
                                    <div class="fix">
                                        <img src="assets/img/team/03.jpg" alt="">
                                    </div>
                                    <div class="team-02-icon">
                                        <div class="inner-team-icon pos-rel">
                                            <div class="team-icon">
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                                                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </div>
                                            <a href="#"><i class="fal fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-text">
                                    <h4><a href="team-details.html">Xavi Toni Crusse</a></h4>
                                    <span>Computer Teacher</span>
                                    <div class="team-meta">
                                        <span><i class="far fa-book"></i> 632+ Courses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team-wrapper mb-30">
                                <div class="team-img pos-rel">
                                    <div class="fix">
                                        <img src="assets/img/team/04.jpg" alt="">
                                    </div>
                                    <div class="team-02-icon">
                                        <div class="inner-team-icon pos-rel">
                                            <div class="team-icon">
                                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                                                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </div>
                                            <a href="#"><i class="fal fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-text">
                                    <h4><a href="team-details.html">Shaine Watson</a></h4>
                                    <span>Math Teacher</span>
                                    <div class="team-meta">
                                        <span><i class="far fa-book"></i> 750+ Courses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- team-area-end -->

            <!-- events-area-start -->
            <div class="events-area pt-130 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-60">
                            <span><i class="fal fa-ellipsis-h"></i> Latest Events <i
                                    class="fal fa-ellipsis-h"></i></span>
                                <h2>Upcoming Events</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="events-wrapper mb-30">
                                <div class="events-img pos-rel">
                                    <div class="fix">
                                        <a href="#"><img src="assets/img/events/01.jpg" alt=""></a>
                                    </div>
                                    <div class="eventsa-tag">
                                        <a href="#">$20</a>
                                    </div>
                                </div>
                                <div class="events-text grey-bg">
                                    <div class="events-meta">
                                        <span><i class="far fa-calendar-alt"></i> <a href="#">25 Nov 2020</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">08 am - 09 pm</a></span>
                                        <span><i class="far fa-map-marker-alt"></i> <a href="#">Paris, France</a></span>
                                    </div>
                                    <h3><a href="events-details.html">Web Design & Development Conference 2020</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et</p>
                                    <a class="c-btn" href="events-details.html">join event <i
                                            class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="events-single mb-30">
                                        <div class="events-02-img pos-rel">
                                            <a href="events-details.html"><img src="assets/img/events/02.jpg" alt=""></a>
                                            <div class="events-tag">
                                                <a href="#">$20</a>
                                            </div>
                                            <div class="events-content">
                                                <div class="events-02-meta">
                                                <span><i class="far fa-calendar-alt"></i> <a href="#">25 Nov
                                                        2020</a></span>
                                                    <span><i class="far fa-book"></i> <a href="#">08 am - 09 pm</a></span>
                                                </div>
                                                <h3><a href="#">Annual Conference 2020</a></h3>
                                                <a href="events-details.html">join event <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-6">
                                    <div class="events-single mb-30">
                                        <div class="events-02-img pos-rel">
                                            <a href="#"><img src="assets/img/events/03.jpg" alt=""></a>
                                            <div class="events-tag">
                                                <a href="#">$20</a>
                                            </div>
                                            <div class="events-content">
                                                <div class="events-02-meta">
                                                <span><i class="far fa-calendar-alt"></i> <a href="#">25 Nov
                                                        2020</a></span>
                                                    <span><i class="far fa-book"></i> <a href="#">08 am - 09 pm</a></span>
                                                </div>
                                                <h3><a href="events-details.html">Annual Conference 2020</a></h3>
                                                <a href="events-details.html">join event <i
                                                        class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="events-button text-center mt-30">
                                <a class="c-btn" href="events.html">view all events <i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- events-area-end -->

            <!-- testimonial-area-start -->
            <div class="testimonial-area pt-130 pb-100" data-background="assets/img/bg/01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center section-title-white  mb-60">
                            <span><i class="fal fa-ellipsis-h"></i> Students Feedback <i
                                    class="fal fa-ellipsis-h"></i></span>
                                <h2>What Our Students Say</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="testimonial-active">
                                <div class="testimonial-wrapper mb-30">
                                    <div class="testimonial-text">
                                    <span>Sed ut perspiciatis unde omnis
                                        natus error sit voluptatem accusa
                                        ntium dolore mque lauda enim ad
                                        minima veniam quis nostrumexe
                                        rcitationem ullam corporise</span>
                                        <p>Rnimad minima veniam quis nostreercit ationem ullam corporis suscipit laboriosam
                                            nisiut</p>
                                        <div class="clientsay-name">
                                            <div class="client-say-img">
                                                <img src="assets/img/testimonial/01.png" alt="">
                                            </div>
                                            <div class="client-say-content">
                                                <h4>Sousa Fernandes</h4>
                                                <span>CEO & Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-wrapper mb-30">
                                    <div class="testimonial-text">
                                    <span>Sed ut perspiciatis unde omnis
                                        natus error sit voluptatem accusa
                                        ntium dolore mque lauda enim ad
                                        minima veniam quis nostrumexe
                                        rcitationem ullam corporise</span>
                                        <p>Rnimad minima veniam quis nostreercit ationem ullam corporis suscipit laboriosam
                                            nisiut</p>
                                        <div class="clientsay-name">
                                            <div class="client-say-img">
                                                <img src="assets/img/testimonial/01.png" alt="">
                                            </div>
                                            <div class="client-say-content">
                                                <h4>Sousa Fernandes</h4>
                                                <span>CEO & Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-wrapper mb-30">
                                    <div class="testimonial-text">
                                    <span>Sed ut perspiciatis unde omnis
                                        natus error sit voluptatem accusa
                                        ntium dolore mque lauda enim ad
                                        minima veniam quis nostrumexe
                                        rcitationem ullam corporise</span>
                                        <p>Rnimad minima veniam quis nostreercit ationem ullam corporis suscipit laboriosam
                                            nisiut</p>
                                        <div class="clientsay-name">
                                            <div class="client-say-img">
                                                <img src="assets/img/testimonial/01.png" alt="">
                                            </div>
                                            <div class="client-say-content">
                                                <h4>Sousa Fernandes</h4>
                                                <span>CEO & Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="test-img mb-30">
                                <img src="assets/img/testimonial/test.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial-area-end -->

            <!-- instructor-area-start -->
            <div class="instructor-area grey-bg pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                            <div class="instructor-img">
                                <img class="img-fluid" src="assets/img/bg/01.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                            <div class="instructor-wrapper">
                                <div class="section-title mb-45">
                                    <span><i class="fal fa-ellipsis-h"></i> Build A Career</span>
                                    <h2>Become an Instructor</h2>
                                    <p>Sed ut perspiciati unde omnis iste natus error sit voluptatem accusanc
                                        tium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore
                                        veritatis et quasi architecto beatae
                                        vitae dicta sun</p>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                        <div class="instructor-text">
                                            <div class="instructor-icon">
                                                <i class="fal fa-laptop-code"></i>
                                            </div>
                                            <h4>Digitalization</h4>
                                            <p>Sed ut perspia unde omnis
                                                aste natus error sit volu</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                        <div class="instructor-text ins-info">
                                            <div class="instructor-icon">
                                                <i class="fal fa-book-heart"></i>
                                            </div>
                                            <h4>Book Friendly</h4>
                                            <p>Sed ut perspia unde omnis
                                                aste natus error sit volu</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-button mt-15">
                                    <a class="c-btn btn-theme f-left mr-15" href="contact.html">join with us <i
                                            class="fal fa-long-arrow-right"></i></a>
                                    <a class="c-btn btn-white" href="contact.html">Become a Partner</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- instructor-area-end -->

            <!-- blog-area-start -->
            <div class="blog-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title text-center mb-60">
                            <span><i class="fal fa-ellipsis-h"></i> Artices & Tipes <i
                                    class="fal fa-ellipsis-h"></i></span>
                                <h2>Latest News & Blog</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30 pos-rel">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/01.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Nov
                                            2020</a></span>
                                        <span><i class="far fa-comments"></i> <a href="blog-details.html">Com(30)</a></span>
                                    </div>
                                    <h4><a href="blog-details.html">Learning Resources In
                                            Challenec Times Online Workshops</a></h4>
                                    <div class="inner-blog">
                                        <div class="blog-2-img f-left">
                                            <img src="assets/img/blog/01.png" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <h5>David Simala</h5>
                                        </div>
                                    </div>
                                    <div class="blog-button">
                                        <a href="blog-details.html"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30 pos-rel">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/02.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Nov
                                            2020</a></span>
                                        <span><i class="far fa-comments"></i> <a href="blog-details.html">Com(30)</a></span>
                                    </div>
                                    <h4><a href="blog-details.html">Djang Models Admin And Harness Rela Tional
                                            Database</a></h4>
                                    <div class="inner-blog">
                                        <div class="blog-2-img f-left">
                                            <img src="assets/img/blog/01.png" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <h5>David Simala</h5>
                                        </div>
                                    </div>
                                    <div class="blog-button">
                                        <a href="blog-details.html"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30 pos-rel">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="assets/img/blog/03.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                    <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">25 Nov
                                            2020</a></span>
                                        <span><i class="far fa-comments"></i> <a href="blog-details.html">Com(30)</a></span>
                                    </div>
                                    <h4><a href="blog-details.html">Smash Podcast With Laura Kalbag What Is Online
                                            Privacy</a></h4>
                                    <div class="inner-blog">
                                        <div class="blog-2-img f-left">
                                            <img src="assets/img/blog/01.png" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <h5>David Simala</h5>
                                        </div>
                                    </div>
                                    <div class="blog-button">
                                        <a href="blog-details.html"><i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->

            <!-- brand-area-start -->
            <div class="brand-area theme-bg pb-65 pt-65">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2 text-center">
                            <div class="single-brand text-center">
                                <img src="assets/img/brand/01.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 text-center">
                            <div class="single-brand">
                                <img src="assets/img/brand/02.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 text-center">
                            <div class="single-brand">
                                <img src="assets/img/brand/03.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 text-center">
                            <div class="single-brand">
                                <img src="assets/img/brand/04.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 text-center">
                            <div class="single-brand">
                                <img src="assets/img/brand/05.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2 text-center">
                            <div class="single-brand">
                                <img src="assets/img/brand/01.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
            <!-- footer-area-start -->
            <footer class="footer-area pt-65 pb-45" data-background="assets/img/bg/fot-01-bg.png">
                <div class="container">
                    <div class="row mb-55 no-gutters align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/footer-01-logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                            <div class="footer-social-icon text-right pb-70">
                                <a class="fot-fb active pb-70" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                                <a class="fot-twitter pb-70" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                                <a class="fot-google pb-70" href="#"><i class="fab fa-youtube"></i> Youtube</a>
                                <a class="fot-insta pb-70" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-8 col-12">
                            <div class="footer-widget mb-30">
                                <h4 class="footer-widget-title mb-25">Our Courses</h4>
                                <ul class="footer-list">
                                    <li><a href="#">Wed Development</a></li>
                                    <li><a href="#">Business Studies</a></li>
                                    <li><a href="#">Computer Engineering</a></li>
                                    <li><a href="#">English Learning</a></li>
                                    <li><a href="#">Graphics Design</a></li>
                                    <li><a href="#">Color Combinitions</a></li>
                                    <li><a href="#">Software Development</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Advance WordPress</a></li>
                                    <li><a href="#">Basic PSD To HTML</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                            <div class="footer-widget widget-center text-center mb-30">
                                <h4 class="footer-widget-title mb-25">Company</h4>
                                <ul class="footer-list footer-02-list">
                                    <li><a href="#">About Eduket</a></li>
                                    <li><a href="#">Meet Advisors</a></li>
                                    <li><a href="#">Join A Career</a></li>
                                    <li><a href="#">Latest Courses</a></li>
                                    <li><a href="#">Newsletters</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                            <div class="footer-widget mb-30">
                                <h4 class="footer-widget-title mb-25">Newsletters</h4>
                                <p class="mb-25">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu
                                    santium doloremque laudantium totam rem aperiam </p>
                                <form class="slider-search-form">
                                    <input type="text" placeholder="Enter Your Email">
                                    <button type="submit"><i class="far fa-long-arrow-alt-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-area mt-15 text-center pt-20 pb-20">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="copyright-text">
                                    <p>Copyright © 2020 <a href="#">BDevs</a> All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->


        </main>



        <!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
