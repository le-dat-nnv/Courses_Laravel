@extends('back_end.layout.index')
@section('content')
    <div class="card mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Config website</h6>
        </div>
        <div class="card-body">
            @php
                $id = [];
                foreach ($data as $data_id) {
                    $id[] = $data_id->id;
                }
                $config = implode(',' , $id);
                $key_id = 0;
            @endphp
            <form id="form_id" action="{{ route('config.update' , ['config'=>$config] ) }}" method="post" class="mb-3" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @foreach($data as $items)
                    @php
                        $key_id++;
                    @endphp
                    <label class='mb-2 mt-4'>{{$items->title}}</label>
                    @if($items->input_type=='file')
                        <div class="row align-items-end">
                            <div class="col-4">
                                <input onchange="displayImage(event)" class="form-control" type="{{$items->input_type}}" name="content_{{$key_id}}" id="content" value="{{$items->content}}">
                            </div>
                            <img class="" id="image-preview" src="{{asset('storage/'.$items->content)}}" alt="Preview" style="max-width: 200px;">
                        </div>
                    @elseif($items->input_type!='file')
                        <input onchange="displayImage(event)" class="form-control col-6" type="{{$items->input_type}}" name="content_{{$key_id}}" id="content" value="{{$items->content}}">
                    @endif
                @endforeach
                <div class="col-5 mt-4 px-0">
                    <input type="submit" value="Sửa" class="btn btn-danger"/>
                </div>
            </form>

            <script>

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
        </div>
    </div>
@endsection
