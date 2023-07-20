@extends('front_end.layout.index')
@section('content')
    @include('front_end.layout.breadcrumb' , [
        'title_breadcrumb' => 'Lecture',
        'breadcrumb' => [' Lecture ']
   ])
    <!-- team-details-area-start -->
    <section class="team-details-area grey-bg pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="authors-area mb-30">
                        <div class="team-img">
                            <img src="{{ asset('storage/'.$data->image) }}" alt="">
                        </div>
                        <div class="team-content white-bg d-flex">
                            <div class="team-text">
                                <h4>{{ $data->name }}</h4>
                                <span>{{ $data->specialize }}</span>
                                <div class="team-meta">
                                    <span><i class="far fa-book"></i> 750+ Courses</span>
                                </div>
                            </div>
                            <div class="team-media white-bg">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="author-about-content white-bg mb-30">
                        <h3>Thông tin giảng viên</h3>
                        <div class="text_config2">
                            {!! $data->description !!}
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="counter-wrapper count-wrapper-4 mb-25">
                                    <div class="counter-icon f-left">
                                        <i class="fal fa-users"></i>
                                    </div>
                                    <div class="counter-text">
                                        <h1><span class="counter">3045</span>+</h1>
                                        <span>Saticfied Students</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="counter-wrapper count-wrapper-4 mb-25">
                                    <div class="counter-icon f-left">
                                        <i class="fal fa-address-book"></i>
                                    </div>
                                    <div class="counter-text">
                                        <h1><span class="counter">7852</span>+</h1>
                                        <span>Saticfied Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="achivment-area white-bg mb-30">
                        <h3>Certifications</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accus tioloreme laudantium totam rem
                            aperiam eaque ipsa quae ab illo inventoresy veritatis quasi architecto beatae vitae dicta
                            sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="certificate-img"><img
                                        src="{{ asset('front_end/assets/img/team/c-01.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="certificate-img"><img
                                        src="{{ asset('front_end/assets/img/team/c-01.jpg') }}" alt=""></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="certificate-img"><img
                                        src="{{ asset('front_end/assets/img/team/c-01.jpg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-skill white-bg mb-30">
                        <div class="institute-area mb-30">
                            <h3>Educations</h3>
                            <ul class="institute-list">
                                <li>
                                    <div class="college-name d-flex">
                                        <div class="col-icon">
                                            <i class="fal fa-graduation-cap"></i>
                                        </div>
                                        <div class="col-name">
                                            <h6>World University</h6>
                                            <p>Computer Science</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="college-name d-flex">
                                        <div class="col-icon">
                                            <i class="fal fa-graduation-cap"></i>
                                        </div>
                                        <div class="col-name">
                                            <h6>World University</h6>
                                            <p>Computer Science</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="institute-area">
                            <h3>Experience</h3>
                            <ul class="institute-list">
                                <li>
                                    <div class="college-name d-flex">
                                        <div class="col-icon">
                                            <i class="fal fa-graduation-cap"></i>
                                        </div>
                                        <div class="col-name">
                                            <h6>Graphics Designer</h6>
                                            <p>Behance.net</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="college-name d-flex">
                                        <div class="col-icon">
                                            <i class="fal fa-graduation-cap"></i>
                                        </div>
                                        <div class="col-name">
                                            <h6>Web Developer</h6>
                                            <p>Themeforest.net</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details-area-end -->

    <!-- course-area-start -->
    <div class="course-area grey-bg">
        <div class="courses-bg white-bg">
            <h3>Popular Courses</h3>
            <div class="container">
                <div class="row">
                    @foreach($data_popular as $list)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="course-wrapper course-wrapper-02 mb-30">
                                <div class="course-inner course-inner-02">
                                    <div class="course-img pos-rel mb-25">
                                        <a href="courses-details.html"><img
                                                src="{{ asset('front_end/assets/img/course/c-01.jpg') }}" alt=""></a>
                                        <div class="course__instructor pos-abl d-flex align-items-center">
                                            <div class="course__instructor--thumb">
                                                <img style="width: 35px;"
                                                     src="{{ asset('storage/'.$list->getLecture()->image) }}" alt="">
                                                <h5>{{ $list->getLecture()->name }}</h5>
                                            </div>
                                            <div class="course__instructor--price-tag">
                                                <span>{{ $list->price }}</span>
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
                                        <h4 class="semi-title pb-30 mb-20">
                                            <a class="text_config" href="{{ url('course/'.$list->slug) }}">
                                                The course {{ $list->title }}
                                            </a>
                                        </h4>
                                        <div class="course-meta">
                                            <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                            <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-text course-text-02 theme-bg">
                                    <div class="course-cat-meta course-cat-meta-02 d-flex align-items-center mb-15">
                                        <span><a href="courses-details.html">english</a></span>
                                        <div class="review-icon">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="semi-title pb-30 mb-20">
                                        <a class="text_config" href="{{ url('course/'.$list->slug) }}">
                                            The course {{ $list->title }}
                                        </a>
                                    </h4>
                                    <div class="course__instructor d-flex align-items-center mb-25">
                                        <div class="course__instructor--thumb">
                                            <img style="width: 35px"
                                                 src="{{ asset('storage/'.$list->getLecture()->image) }}" alt="">
                                            <h5>{{ $list->getLecture()->name }}</h5>
                                        </div>
                                    </div>
                                    <div class="text_config2 text-white me-0 text_config_text mb-3">
                                            {!! $list->getLecture()->description !!}
                                    </div>
                                    <a class="c-btn" href="courses-details.html">get enrolled <i
                                            class="far fa-arrow-right"></i></a>
                                    <div class="course-meta mt-3">
                                        <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- course-area-end -->
@endsection
