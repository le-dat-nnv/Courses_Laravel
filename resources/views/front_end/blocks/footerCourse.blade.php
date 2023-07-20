<div class="container">
    <div class="row mb-55 no-gutters align-items-center">
        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
            <div class="footer-logo">
                <a href="index.html"><img style="width: 145px;" src="{{ asset('storage/'.config('tb_config.img_logo')) }}" alt=""></a>
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
                    @foreach($data_cat as $list)
                        <li><a href="#">{{ $list->name }}</a></li>
                    @endforeach
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
                    <p>Copyright Cao đẳng <a href="#">FPT</a> Polytechnic</p>
                </div>
            </div>
        </div>
    </div>
</div>
