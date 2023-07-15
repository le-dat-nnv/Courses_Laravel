@extends('front_end.layout.index')
@section('content')
    @include('front_end.layout.breadcrumb' , [
        'title_breadcrumb' => 'Our Courses',
        'breadcrumb' => [' Our Courses ']
    ])
    <!--page-title-area end-->

    <!-- course-area-start -->
    <div class="course-area course-area-02 pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-menu portfolio-menu-02 pr-menu-03 text-center mb-30 pr-70 pl-70">
                        <button class="active" data-filter="*">Show All</button>
                        @foreach($data as $key=>$list)
                            <button data-filter="{{ '.cat'.$key+1 }}" class="">{{ $list->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="portfolio-grid" class="row row-portfolio">
                @foreach($course as $key=>$listCourse)
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-item {{ 'cat'.$listCourse->id_category }}">
                        <div class="course-wrapper course-wrapper-03 white-bg mb-30">
                            <div class="course-inner">
                                <div class="course-img course-img-02 pos-rel mb-25">
                                    <a href="{{ url('Categories/'.$listCourse->slug) }}">
                                        <img src="{{ asset('front_end/assets/img/course/c-04.jpg') }}" alt="">
                                    </a>
                                    <div class="course__instructor pos-abl d-flex align-items-center">
                                        <div class="course__instructor--thumb">
                                            <img src="{{ asset('front_end/assets/img/course/instructor1.png') }}"
                                                 alt="">
                                            <h5>Warner</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-text course-text-inner">
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
                                    <h5 class="semi-title pb-25">
                                        <a href="{{ url('Categories/'.$listCourse->slug) }}" class="text_config">
                                            {{ 'The course ' .$listCourse->title }}
                                        </a>
                                    </h5>
                                    <h6 class="mt-3 mb-3">{{ $listCourse->price.' VND' }}</h6>
                                    <div class="course-meta">
                                        <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="course-text course-text-02 course-text-inner theme-bg2">
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
                                <h5 class="semi-title mb-30">
                                    <a href="courses-details.html">
                                        {{ $listCourse->title }}
                                    </a>
                                </h5>
                                <div class="course__instructor d-flex align-items-center mb-25">
                                    <div class="course__instructor--thumb">
                                        <img src="{{ asset('front_end/assets/img/course/instructor1.png') }}" alt="">
                                        <h5>Warner</h5>
                                    </div>
                                </div>
                                <div class="text_config2">{!! $listCourse->description !!}</div>
                                <a class="c-btn btn-round-02 mb-25 mt-3"
                                   href="{{ url('Categories/'.$listCourse->slug) }}">get enrolled <i
                                        class="far fa-arrow-right"></i></a>
                                <div class="course-meta">
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
    <!-- course-area-end -->


    <!-- team-area-start -->
    <div class="team-area grey-bg pt-130 pb-100">
        @include('front_end.blocks.TeamCourse')
    </div>
    <!-- team-area-end -->

@endsection
