@extends('back_end.layout.index')
@section('content')
    @php
//        dd($data->description)
    @endphp
    <h5>Add Menu</h5>
    @php
        $nameTitle = ['Tên Banner' , 'Đường dẫn' , 'Image banner'  , 'Mô tả'];
        $nameInputs = ['name' , 'slug' , 'image'  , 'description'];
        $typeInputs = ['text' , 'text' , 'file'  , 'textarea'];
        $is_active = [
            1=> 'No active',
            2 => 'Active'
        ];
        $status = [
            1=> 'No active',
            2 => 'Active'
        ];
    @endphp
    <form action="{{ route('banner.update' , ['banner'=>$data->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$data->id}}">
        @foreach($nameInputs as $key=>$valueInputs)
            <label class='mb-2 mt-4' for="{{ $valueInputs }}">{{ $nameTitle[$key] }}</label>
            @if($typeInputs && $typeInputs[$key] === 'textarea')
                <textarea class="form-control @error($valueInputs) is-invalid @enderror" name="{{ $valueInputs }}" id="editor">{{ $data->$valueInputs }}</textarea>
                @error($valueInputs)
                <p class="mb-0 invalid-feedback">
                    <strong>{{$message}}</strong>
                </p>
                @enderror
            @elseif($typeInputs && $typeInputs[$key] === 'file')
                <div class="row">
                    <div class="col-4">
                        <input id="image" type="file" name="{{ $valueInputs }}" class="form-control @error($valueInputs) is-invalid @enderror" id="{{ $valueInputs }}" >
                        @error($valueInputs)
                            <p class="mb-0 invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>

                </div>
                <div class="mt-5 mb-4">
                    <img class="col-6" id="image-preview" src="{{asset('storage/'.$data->image)}}"  style="width: 600px ; height: auto"/>
                </div>

            @else
                <input type="text" class="form-control @error($valueInputs) is-invalid @enderror" name="{{ $valueInputs }}" value="{{ $data->$valueInputs }}">
                @error($valueInputs)
                    <p class="mb-0 invalid-feedback">
                        <strong>{{$message}}</strong>
                    </p>
                @enderror
            @endif

        @endforeach
        <label class='mb-2 mt-4' for="is_active">Kích hoạt</label>
        <select class="form-control @error('is_active') is-invalid @enderror" name="is_active" id="is_active">
            @foreach($is_active as $key=>$active)
                <option value="{{ $key }}">
                    {{$active}}
                </option>
            @endforeach
        </select>
        @error('is_active')
            <p class="mb-0 invalid-feedback">
                <strong>{{ $message }}</strong>
            </p>
        @enderror
        <label class='mb-2 mt-4' for="status">Trạng thái</label>
        <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" >
            @foreach($status as $key=>$sta)
                <option value="{{ $key }}" {{ isset($data) && $key == $data->status ? 'selected' : '' }}>
                    {{$sta}}
                </option>
            @endforeach
        </select>
        @error('status')
        <p class="mb-0 invalid-feedback">
            <strong>{{ $message }}</strong>
        </p>
        @enderror
        <button class="btn btn-danger mt-4 mb-3" type="submit">Update Banner</button>
    </form>
    <script>
        $(document).ready(function () {
            $('#image').change(function (e) {
                var input_img = event.target;
                var file = input_img.files[0];
                var reader = new FileReader();

                reader.onload = function (e) {
                    var imagePre = $('#image-preview');
                    imagePre.attr('src' , e.target.result);
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection

