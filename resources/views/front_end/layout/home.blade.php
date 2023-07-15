@extends('front_end.layout.index')
@section('content')
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
    <div class="course-area pt-130 pb-100 black-bg" id="course_popular">
        @include('front_end.blocks.coursePopular')
    </div>
    <!-- course-area-end -->

    <!-- team-area-start -->
    <div class="team-area grey-bg pt-130 pb-100" id="team_course">
        @include('front_end.blocks.TeamCourse')
    </div>
    <!-- team-area-end -->

    <!-- brand-area-start -->
    <div class="brand-area theme-bg pb-65 pt-65" id="brand-course">
        @include('front_end.blocks.brandCourse')
    </div>
    <!-- brand-area-end -->
@endsection
