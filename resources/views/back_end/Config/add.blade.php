@extends('back_end.layout.index')
@section('content')
    <h5>Add Config</h5>
    <form action="{{ route('config.store') }}" method="post" class="mb-3" enctype="multipart/form-data">
        @csrf
        <label class='mb-2 mt-4'>Name</label>
        <input class="form-control @error('title') is-invalid @enderror" type='text' name="title" id="title" value="">
        @if($errors->has('title'))
            <p class="mb-0 invalid-feedback">
                <strong>{{ $errors->first('title') }}</strong>
            </p>
        @endif
        <label class='mb-2 mt-4'>Loại dữ liệu</label>
        <select class="form-control" name="input_type" id="input_type" onchange="changeContent()">
            <option value="file">File</option>
            <option value="textarea">Textarea</option>
            <option value="text">Text</option>
            <option value="date">Date</option>
            <option value="number">Number</option>
        </select>
        <label class='mb-2 mt-4'>Content</label>
        <div id="content-input">
            <input onchange="displayImage(event)" class="form-control col-6 @error('content') is-invalid @enderror" type="file" name="content" id="content" value="">
            @if($errors->has('content'))
                <p class="mb-0 invalid-feedback">
                    <strong>{{ $errors->first('content') }}</strong>
                </p>
            @endif
            <img class="mt-5" id="image-preview" src="https://climate.onep.go.th/wp-content/uploads/2020/01/default-image.jpg" alt="Preview" style="max-width: 200px;">
        </div>
        <div class="col-5 mt-4">
            <input type="submit" value="Thêm" class="btn btn-danger"/>
        </div>
    </form>

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
            }
            else if(inputType == "number"){
                contentInput.innerHTML = '<input class="form-control" type="number" name="content" id="content">';
            }
        }

        function displayImage(event) {
            var fileInput = event.target;
            var file = fileInput.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var imagePreview = document.getElementById("image-preview");
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }

    </script>
@endsection
