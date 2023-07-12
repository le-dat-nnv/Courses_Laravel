<div class="container">
    <div class="counter-bg">
        <div class="row">
            @if(isset($list_strengths))
                @foreach($list_strengths as $strengths)
                    <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="counter-wrapper mb-30">
                    <div class="counter-icon f-left">
                        {!! $strengths->icon_svg !!}
                    </div>
                    <div class="counter-text">
                        <h1><span class="counter">{{ $strengths->name_short }}</span>+</h1>
                        <span>{{ $strengths->name }}</span>
                    </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
