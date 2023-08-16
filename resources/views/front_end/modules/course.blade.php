@extends('front_end.layout.index')
@section('content')
    @include('front_end.layout.breadcrumb' , [
        'title_breadcrumb' => 'Course',
        'breadcrumb' => [' course ']
    ])
    <!-- course-area-start -->
    <div class="course-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                @foreach($data_course as $list)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="course-wrapper course-wrapper-02 mb-30">
                            <div class="course-inner course-inner-02">
                                <div class="course-img pos-rel mb-25">
                                    <a href="courses-details.html"><img
                                            src="{{ asset('front_end/assets/img/course/c-01.jpg') }}" alt=""></a>
                                    <div class="course__instructor pos-abl d-flex align-items-center">
                                        <div class="course__instructor--thumb">
                                            <img class="border border-5 rounded-5" style="width: 40px; height: 40px;"
                                                 src="{{ asset('storage/'.$list->getLecture()->image) }}" alt="">
                                            <span class="text-white">{{ $list->getLecture()->name }}</span>
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
                                    <h4 class="semi-title pb-30 mb-20"><a class="text_config"
                                                                          href="courses-details.html">The
                                            course {{ $list->title }}</a></h4>
                                    <div class="course-meta">
                                        <span><i class="far fa-users"></i> <a href="#">25</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">36hr</a></span>
                                        <span><i class="far fa-book"></i> <a href="#">2.5k</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="course-text course-text-02 theme-bg">
                                <div class="course-cat-meta course-cat-meta-02 d-flex align-items-center mb-15">
                                    <span><a href="{{ url('course/'.$list->slug) }}">english</a></span>
                                    <div class="review-icon">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                    </div>
                                </div>
                                <h4 class="semi-title mb-30"><a class="text_config" href="{{ url('course/'.$list->slug) }}">The
                                        course {{ $list->title }}</a></h4>
                                <div class="course__instructor d-flex align-items-center mb-25">
                                    <div class="course__instructor--thumb">
                                        <img class="border border-5 rounded-5" style="width: 40px; height: 40px;"
                                             src="{{ asset('storage/'.$list->getLecture()->image) }}" alt="">
                                        <span class="text-white">{{ $list->getLecture()->name }}</span>
                                    </div>
                                </div>
                                <div class="text_config2">{!! $list->description !!}</div>
                                <a class="c-btn mb-20 mt-3" href="{{ url('add-to-cart/'.$list->slug) }}">Đăng ký ngays<i
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
            <div class="row">
                <div class="col-xl-12">
                    <div class="course-btn-02 text-center mt-35 mb-30">
                        <a class="c-btn" href="courses.html">Xem tất cả khóa học<i
                                class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course-area-end -->

    <!-- team-area-start -->
    @include('front_end.blocks.TeamCourse')
    <!-- team-area-end -->

    @include('front_end.blocks.brandCourse')
@endsection
