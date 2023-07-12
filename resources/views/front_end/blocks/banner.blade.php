@if(count($list_banner) == 1)

@else
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($list_banner as $key=>$banner_view)
                <div class="swiper-slides">
                    <div class="slider-img d-none d-sm-block">
                        <img class="img-fluid" src="{{ asset('front_end/assets/img/slider/01.png') }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
@endif
