<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
            <div class="section-title text-center mb-60">
                <span><i class="fal fa-ellipsis-h"></i> Popular Categories
                    <i class="fal fa-ellipsis-h"></i></span>
                <h2>{{ $title }}</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($data as $list)
            <div class="col-xl-3 col-lg-3 col-md-6">
            <div class="course-cat-wrapper mb-30">
                <div class="course-cat-img">
                    <a href="courses-details.html"><img src="{{ asset('storage/'.$list->image) }}" alt=""></a>
                </div>
                <div class="course-cat-text">
                    <h4><a href="courses-details.html">{{ $list->name }}</a></h4>
                    <span class="text_config">Web {{ $list->name }} Course</span>
                    <div class="course-cat-meta">
                        <span><i class="far fa-users"></i> <a href="#">250</a></span>
                        <span><i class="far fa-book"></i> <a href="#">800+ Courses</a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
