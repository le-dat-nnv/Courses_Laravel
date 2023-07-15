@extends('back_end.layout.index')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Bộ lọc Khóa Học
            </h6>
        </div>
        <div class="card-body">
            <div class="container mb-3" style="padding: 0px;">
                <div class="row py-3" style="align-items: center; border: 1px solid #e1e1e1;">
                    <div class="form-group col-md-4">
                        <label for="price">Giá khóa học</label>
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0">VNĐ</span>
                            </div>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="category">Danh mục khóa học</label>
                        <select class="form-control mt-2" id="id_category" name="id_category">
                            <option value="">-- Chọn danh mục --</option>
                            @php
                                $uniqueCategories = [];
                            @endphp

                            @foreach ($data as $category)
                                @if ($category->getCat() && !in_array($category->getCat()->id, $uniqueCategories))
                                    <option value="{{ $category->getCat()->id }}" {{ isset($category) && $category->getCat()->id == $category->id ? 'selected' : '' }}>
                                        {{ $category->getCat()->name }}
                                    </option>
                                    @php
                                        $uniqueCategories[] = $category->getCat()->id;
                                    @endphp
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nameTitle">Tìm kiếm</label>
                        <input type="text" class="form-control mt-2" id="nameTitle" name="nameTitle">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <label for="difficulty">Mức độ khó</label>
                        <select class="form-control mt-2" id="difficulty" name="difficulty">
                            <option value="">-- Chọn mức độ --</option>
                            <option value="Cơ bản">Cơ bản</option>
                            <option value="Nâng cao">Nâng cao</option>
                            <option value="Chuyên sâu">Chuyên sâu</option>
                            <!-- Thêm các tùy chọn mức độ khó khác vào đây -->
                        </select>
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <label for="rating">Đánh giá</label>
                        <select class="form-control mt-2" id="rating" name="rating">
                            <option value="">-- Chọn đánh giá --</option>
                            <option value="5">5 sao</option>
                            <option value="4">4 sao</option>
                            <option value="3">3 sao</option>
                            <option value="2">2 sao</option>
                            <option value="1">1 sao</option>
                            <!-- Thêm các tùy chọn đánh giá khác vào đây -->
                        </select>
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <label for="language">Ngôn ngữ</label>
                        <select class="form-control mt-2" id="language" name="language">
                            <option value="">-- Chọn ngôn ngữ --</option>
                            <option value="Tiếng Anh">Tiếng Anh</option>
                            <option value="Tiếng Việt">Tiếng Việt</option>
                            <!-- Thêm các tùy chọn ngôn ngữ khác vào đây -->
                        </select>
                    </div>

                    <div class="form-group col-md-4 mt-3">
                        <label for="duration">Thời lượng khóa học</label>
                        <select class="form-control mt-2" id="duration" name="duration">
                            <option value="">-- Chọn thời lượng --</option>
                            <option value="Dưới 1 giờ">Dưới 1 giờ</option>
                            <option value="1-5 giờ">1-5 giờ</option>
                            <option value="Trên 5 giờ">Trên 5 giờ</option>
                            <!-- Thêm các tùy chọn thời lượng khác vào đây -->
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('back_end.forms.list' , [
    'nameTitle' => ['title' , 'ảnh' , 'price' , "Danh mục" , 'Đường dẫn'],
    'list' => ['title' , 'image' , 'price' , 'id_category' , 'slug'],
    'url' => 'Courses',
    'url_delete' => 'ledat'
])
@endsection
