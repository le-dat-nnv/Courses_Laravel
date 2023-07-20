<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
            <div class="section-title section-title-theme text-center mb-75">
                <span><i class="fal fa-ellipsis-h"></i> Popular Courses <i class="fal fa-ellipsis-h"></i></span>
                <h2>{{ $title }}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($data as $list)
            @php
                $nameLecture = $list->getLecture()->name;
                $firstName = last(explode(' ', $nameLecture));
                $firstName = trim($firstName);
            @endphp
            <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-wrapper white-bg mb-30">
                <div class="course-inner">
                    <div class="course-img pos-rel mb-25">
                        <a href="courses-details.html"><img src="{{ asset('front_end/assets/img/course/c-01.jpg') }}" alt=""></a>
                        <div class="course__instructors pos-abl d-flex align-items-center">
                            <div class="course__instructor--thumb">
                                <img style="width: 35px" src="{{ asset('storage/'.$list->getLecture()->image) }}" alt="">
                                <h5>{{ 'Teacher '.$firstName }}</h5>
                            </div>
                            <div class="course__instructor--price-tag">
                                <span>{{ $list->price.'VND' }}</span>
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
                        <h4 class="semi-title pb-30 mb-20"><a href="courses-details.html">{{ $list->title.' For
                                Learning
                                English Courses' }} </a></h4>
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
                    <h4 class="semi-title mb-30"><a href="courses-details.html">{{ $list->title.' For
                            Learning
                            English Courses' }}</a></h4>
                    <div class="course__instructor d-flex align-items-center mb-25">
                        <div class="course__instructor--thumb">
                            <img style="width: 35px" src="{{ asset('storage/'.$list->getLecture()->image) }}" alt="">
                            <h5>{{ 'Teacher '.$firstName }}</h5>
                        </div>
                    </div>
                    <div class="text_config2">{!! $list->description !!}</div>
                    <a class="c-btn mb-4 mt-3" href="courses-details.html">get enrolled <i class="far fa-arrow-right"></i></a>
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
            <div class="course-btn text-center mt-35 mb-30">
                <a class="c-btn" href="{{ route('course.listFrontEnd') }}">view all courses <i class="fal fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
