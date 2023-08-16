@extends('front_end.layout.index')
@section('content')
    @include('front_end.layout.breadcrumb' , [
        'title_breadcrumb' => 'Contact Us',
        'breadcrumb' => [' Contact Us ']
    ])
    <!--cta-area start-->
    <section class="cta-area grey-bg pt-130 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="cta-content mb-30">
                        <div class="section-title text-left mb-20 pr-160">
                            <span><i class="fal fa-ellipsis-h"></i>Liên hệ nhanh</span>
                            <h2>{{ $data->name }}</h2>
                            <p>{!! $data->summary !!}</p>
                        </div>
                        <ul class="contact-list mb-40">
                            <li>
                                <div class="cta-box d-flex align-items-center mb-20">
                                    <div class="cta-icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="cta-text">
                                        <h6>Locations</h6>
                                        <span>{{ $data->location }}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cta-box d-flex align-items-center mb-20">
                                    <div class="cta-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="cta-text">
                                        <h6>Email Us</h6>
                                        <span><a href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6c5c3c6c6d9c4c2f6d1dbd7dfda98d5d9db">{{ $data->email }}</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cta-box d-flex align-items-center mb-20 pb-20">
                                    <div class="cta-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="cta-text">
                                        <h6>Phone Us</h6>
                                        <span>{{ $data->telephone }}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="contact-icon">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="map-area contact-map mb-30">
                        {!! $data->iframe !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-area end-->

    <!-- contact-area-start -->
    <div class="contact-area grey-bg pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                    <div class="section-title text-center mb-60">
                            <span><i class="fal fa-ellipsis-h"></i> Liên hệ <i
                                    class="fal fa-ellipsis-h"></i></span>
                        <h3>Để lại tin nhắn cho chúng tôi</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-form-area">
                        <form action="#" class="subscribe contact-post-form contact-form">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="input-text">
                                        <input class="form-control" type="text" placeholder="Full Name Here">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="input-text email-text">
                                        <input class="form-control" type="text" placeholder="Email Here">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="input-text phone-text">
                                        <input class="form-control" type="text" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-text message-text">
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Write  Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="lg-btn lg-btn-03 text-center">
                                        <a class="c-btn" href="#">send message <i
                                                class="far fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
