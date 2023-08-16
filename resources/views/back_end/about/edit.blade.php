@extends('back_end.layout.index')
@section('content')
    @php
        $nameTitle = ['Tên' , 'Mô tả' , 'Địa chỉ' , 'email' , 'Số điện thoại' , 'Bản đồ'];
        $nameInput = ['name' , 'summary' , 'location' , 'email' , 'telephone' , 'iframe'];
        $typeInput = ['text' , 'textarea' , 'text' , 'text' , 'text' , 'text'];
    @endphp
    <div class="card mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Config</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('about.update' , ['about'=>$data->id]) }}" method="post" class="mb-3" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @foreach($nameInput as $key=>$name)
                    <label class='mb-2 mt-4'>{{ $name }}</label>
                    @if($typeInput[$key] === 'textarea')
                        <textarea name="{{ $nameInput[$key] }}" id="editor"
                                  class="ckeditors_ledat">{{ old($name, isset($data) ? $data->$name : '') }}</textarea>
                        @error($nameInput[$key])
                        <p class="mb-0 invalid-feedback">
                            <strong>{{ $errors->first($nameInput[$key]) }}</strong>
                        </p>
                        @enderror
                    @else
                        <input class="form-control @error($nameInput[$key]) is-invalid @enderror" type='{{ $typeInput[$key] }}'
                               name="{{ $nameInput[$key] }}" id="title"
                               value="{{ old($name, isset($data) ? $data->$name : '') }}">
                    @error($nameInput[$key])
                        <p class="mb-0 invalid-feedback">
                            <strong>{{ $errors->first($nameInput[$key]) }}</strong>
                        </p>
                    @enderror
                    @endif
                @endforeach
                <div class="col-5 mt-4 me-0 pl-0">
                    <input type="submit" value="Update" class="btn btn-danger me-0"/>
                </div>
            </form>
        </div>
    </div>

    <script>
        function changeContent() {
            var inputType = document.getElementById("input_type").value;
            // console.log((inputType));
            var contentInput = document.getElementById("content-input");

            if (inputType == "file") {
                contentInput.innerHTML = '<input class="form-control col-6" type="file" name="content" id="content" onchange="displayImage(event)">' +
                    '<img class="mt-5" id="image-preview" src="https://climate.onep.go.th/wp-content/uploads/2020/01/default-image.jpg" alt="Preview" style="max-width: 200px;">';
            } else if (inputType == "textarea") {
                contentInput.innerHTML = '<textarea class="form-control" name="content" id="content"></textarea>';
            } else if (inputType == "text") {
                contentInput.innerHTML = '<input class="form-control" type="text" name="content" id="content">';
            } else if (inputType == "content") {
                contentInput.innerHTML = '<input class="form-control" type="date" name="content" id="content">';
            } else if (inputType == "number") {
                contentInput.innerHTML = '<input class="form-control" type="number" name="content" id="content">';
            }
        }

        function displayImage(event) {
            var fileInput = event.target;
            var file = fileInput.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                var imagePreview = document.getElementById("image-preview");
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }

    </script>
@endsection
