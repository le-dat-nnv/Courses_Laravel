@extends('front_end.layout.index')
@section('content')
    <main>

        @include('front_end.layout.breadcrumb' , [
            'title_breadcrumb' => 'Our Courses',
            'breadcrumb' => [' Our Courses ']
        ])

        <!--page-title-area end-->

        <!-- course-area-start -->
        <section class="course-curriculumn-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="course-left-area">
                            <div class="improve-skill-area mb-50">
                                <div class="video-learn-area pos-rel mb-30">
                                    <div class="skill-thumb pos-rel">
                                        <img src="{{ asset('front_end/assets/img/course/c-19.jpg') }}" alt="">
                                    </div>
                                    <div class="video-area">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=D-goSWGqI2U"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="review-icon">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star-half-alt"></i></a>
                                </div>
                                <h3 class="course-title-03 mb-25">Kỹ năng được sẽ được phát triển</h3>
                                <p>{!! $courses_detail->description !!}</p>
                            </div>
                            <div class="curriculumn-area mb-65">
                                <h3 class="course-title-03 mb-20">Chương trình giảng dạy</h3>
                                <p class="mb-25">{!! $courses_detail->curriculum !!}</p>
                                <ul class="curriculumn-list">
                                    <li><a href="#">Lesson 01 : Introduced About Web Design <span class="f-right"><i
                                                    class="far fa-play-circle"></i> 05:59 hr</span> </a></li>
                                    <li><a href="#">Lesson 02 : What Is UX/UI Design ? <span class="f-right"><i
                                                    class="far fa-play-circle"></i> 05:59 hr</span> </a></li>
                                    <li><a href="#">Lesson 03 : Why Need UX/UI Role In Web Design ? <span
                                                class="f-right"><i class="far fa-play-circle"></i> 05:59 hr</span> </a>
                                    </li>
                                    <li><a href="#">Lesson 04 : What Is UX Manager ? <span class="f-right"><i
                                                    class="far fa-play-circle"></i> 05:59 hr</span> </a></li>
                                    <li><a href="#">Lesson 05 : What’s Your Design Goals? <span class="f-right"><i
                                                    class="far fa-play-circle"></i> 05:59 hr</span> </a></li>
                                </ul>
                            </div>
                            <div class="faq-area mb-60">
                                <div class="faq-thumbs mb-40">
                                    <img src="assets/img/course/c-20.jpg" alt="">
                                </div>
                                <h3 class="course-title-03 mb-20">Frequently Asked Questions</h3>
                                <p>Wuisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                                    quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    Best Online Course For Basic Web Design For Beginners
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="card-content fix">
                                                    <div class="card-thumb f-left"><img src="assets/img/course/c-21.jpg"
                                                                                        alt=""></div>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusan mque
                                                        laud totam rem aperiam, eaque ipsa quae ab illo inventore
                                                        veritatis etq ectosd beatae vitae dicta sunt explicabo. Nemo
                                                        enim ipsam voluptatem quiatas sit asperatur aut odit aut fugit
                                                        sed quia consequuntur magni dolores</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                    Why We Are The Best Online Courses ?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="card-content fix">
                                                    <div class="card-thumb f-left"><img src="assets/img/course/c-21.jpg"
                                                                                        alt=""></div>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusan mque
                                                        laud totam rem aperiam, eaque ipsa quae ab illo inventore
                                                        veritatis etq ectosd beatae vitae dicta sunt explicabo. Nemo
                                                        enim ipsam voluptatem quiatas sit asperatur aut odit aut fugit
                                                        sed quia consequuntur magni dolores</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    Creating Secure Password Flows With NodeJS And MySQL
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="card-content fix">
                                                    <div class="card-thumb f-left"><img
                                                            src="{{ asset('front_end/assets/img/course/c-21.jpg') }}"
                                                            alt=""></div>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusan mque
                                                        laud totam rem aperiam, eaque ipsa quae ab illo inventore
                                                        veritatis etq ectosd beatae vitae dicta sunt explicabo. Nemo
                                                        enim ipsam voluptatem quiatas sit asperatur aut odit aut fugit
                                                        sed quia consequuntur magni dolores</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                    Creating Secure Password Flows With NodeJS And MySQL
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="card-content fix">
                                                    <div class="card-thumb f-left"><img src="assets/img/course/c-21.jpg"
                                                                                        alt=""></div>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusan mque
                                                        laud totam rem aperiam, eaque ipsa quae ab illo inventore
                                                        veritatis etq ectosd beatae vitae dicta sunt explicabo. Nemo
                                                        enim ipsam voluptatem quiatas sit asperatur aut odit aut fugit
                                                        sed quia consequuntur magni dolores</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-intructor-area">
                                <h3 class="course-title-03 mb-20">Giảng viên khóa học</h3>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="instructors text-center mb-30">
                                            <div class="instructors-thumb mb-30"><img class="rounded-1"
                                                    src="{{ asset('storage/'.$courses_detail->lecture_image) }}"
                                                    alt=""></div>
                                            <div class="instructors-name">
                                                <h4><a href="team-details.html">{{ $courses_detail->name }}</a></h4>
                                                <span>{{ $courses_detail->specialize }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="course-right-area">
                            <div class="widget mb-40">
                                <ul class="widget-course-list">
                                    <li><a href="#">
                                            <i class="far fa-usd-circle"></i>Course Price
                                            <span class="f-right">{{ $courses_detail->price . ' VND' }}</span>
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fal fa-user-circle"></i> Instructors <span
                                                class="f-right">{{ $courses_detail->name }}</span></a></li>
                                    <li><a href="#"><i class="fal fa-clock"></i> Duration <span class="f-right">
                                                {{ $courses_detail->duration }}Hours</span></a></li>
                                    <li><a href="#"><i class="fal fa-book"></i> Lectures <span class="f-right">20
                                                Lessons</span></a></li>
                                    <li><a href="#"><i class="fal fa-users"></i> Enrolled <span class="f-right">963
                                                Students</span></a></li>
                                    <li><a href="#"><i class="fal fa-flag"></i> Language <span
                                                class="f-right">English</span></a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i> Deadline <span
                                                class="f-right">06 March 2021</span></a></li>
                                </ul>
                                <div class="enroll-btn mb-40 text-center">
                                    <a href="{{ route('addToCart.add-to-cart' , ['id'=>$courses_detail->id]) }}" class="c-btn btn btn-success text-white">Đăng ký ngay</a>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-advertisement">
                                    <img src="{{ asset('front_end/assets/img/course/add-01.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-area-end -->

    </main>
@endsection
