<section class="page-title-area"
         style="background-image: url({{ asset('front_end/assets/img/bg/page-title-bg-01.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center">
                    <h1>@if(isset($title_breadcrumb))
                            {{ $title_breadcrumb }}
                        @endif
                    </h1>
                    <div class="breadcrumb">
                        <ul class="breadcrumb-list">
                            <li><a href="{{ url('/') }}">Home <i class="far fa-chevron-right"></i></a></li>
                            @if(isset($breadcrumb))
                                @foreach($breadcrumb as $item)
                                    <li><a class="active"
                                           href="{{ Route::getFacadeRoot()->current()->uri() }}">{{ $item }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
