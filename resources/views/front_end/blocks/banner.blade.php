@if(count($list_banner) == 1)
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($list_banner as $key=>$banner_view)
                <div class="swiper-slide">
                    <img style="width: 100%;" src="{{ asset('storage/'.$banner_view->image) }}" alt="{{ $banner_view->name }}">
                    <div class="banner_of_slidershow">
                        <div class="container text_of_banner">
                            <div class="row">
                                <div class="col-7 container_text_banner">
                                    <div class="info_source">
                                        <h5 class="text-white">Edifying is sponsored by <span class="text-danger">W3layouts</span></h5>
                                        <div id="typed-strings" class="agileits_w3layouts_strings" style="display: none;">
                                            <h3>better <i>education</i> for better world</h3>
                                            <h3><i>education</i> is a journey not a race</h3>
                                            <h3>character is a wish for a perfect <i>education</i></h3>
                                        </div>
                                        <span class="text-white" id="typed" style="white-space:pre;">character is a wish for a perfect <i>education</i></span><span class="icon_enter mx-2">|</span>
                                    </div>
                                </div>
                                <p style="font-size: 12px" class="mt-3 text-white">Nulla viverra pharetra sem, eget pulvinar neque pharetra ac. Vestibulum faucibus metus eu auctor vehicula</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($list_banner as $key=>$banner_view)
                <div class="swiper-slide">
                    <img style="width: 100%; height: 100vh;" src="{{ asset('storage/'.$banner_view->image) }}" alt="{{ $banner_view->name }}">
                    <div class="banner_of_slidershow">
                        <div class="container text_of_banner">
                            <div class="row">
                                <div class="col-7 container_text_banner">
                                    <div class="info_source">
                                        <h5 class="text-white">Edifying is sponsored by <span class="text-danger">W3layouts</span></h5>
                                        <div id="typed-strings" class="agileits_w3layouts_strings" style="display: none;">
                                            <h3>better <i>education</i> for better world</h3>
                                            <h3><i>education</i> is a journey not a race</h3>
                                            <h3>character is a wish for a perfect <i>education</i></h3>
                                        </div>
                                        <span class="text-white" id="typed" style="white-space:pre;">character is a wish for a perfect <i>education</i></span><span class="icon_enter mx-2">|</span>
                                    </div>
                                </div>
                                <p style="font-size: 12px" class="mt-3 text-white">Nulla viverra pharetra sem, eget pulvinar neque pharetra ac. Vestibulum faucibus metus eu auctor vehicula</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
@endif


<script>
    var swiper = new Swiper('.swiper', {
        loop: true,
    });
</script>
