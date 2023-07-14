<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
            <div class="section-title text-center mb-65">
                <span><i class="fal fa-ellipsis-h"></i> Team Members <i class="fal fa-ellipsis-h"></i></span>
                <h2>{{ $title }}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($data as $list)
            <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="team-wrapper mb-30">
                <div class="team-img pos-rel">
                    <div class="fix">
                        <img style="height: 250px" src="{{ asset('storage/'.$list->image) }}" alt="{{ $list->name }}">
                    </div>
                    <div class="team-02-icon">
                        <div class="inner-team-icon pos-rel">
                            <div class="team-icon">
                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <a href="#"><i class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-text">
                    <h6><a href="team-details.html">{{ $list->name }}</a></h6>
                    <span>{{ $list->specialize }}</span>
                    <div class="team-meta">
                        <span><i class="far fa-book"></i> 750+ Courses</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
