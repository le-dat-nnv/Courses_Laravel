<div class="card mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            @if(isset($title_add))
                {{ $title_add }}
            @else
                {{ 'Add Form' }}
            @endif

            @if (session('message'))
                <div class="alert alert-success mt-4">
                    {{ session('message') }}
                </div>
            @endif
        </h6>
    </div>
    <div class="card-body">
        <form ref="btn_form_submit" id="form_submit" action="@if(isset($action))
        {{ isset($data) ? route($action.'.update' , [$action , $data->id]) : route($action.'.store') }}
            @elseif($action1)
            {{ isset($data) ? route($action1.'.update' , $data->id) : route($action1.'.store') }}
        @endif
        " method="{{ $method }}" enctype="multipart/form-data">
            @if(isset($data))
                @method('PUT')
            @endif
            {{ csrf_field() }}
            <input id="id" type="hidden" name="id_s" value="{{ isset($data) ? $data->id : '' }}"  >
            @foreach ($inputNames as $index => $inputName)
                <label class='mb-2 mt-4' for="{{ $inputName }}">{{ $TitleNames[$index] }}</label>
                @if ($inputTypes && $inputTypes[$index] === 'textarea')
                    <textarea class="form-control @error($inputName) is-invalid @enderror" name="{{ $inputName }}" id="editor">{{ isset($data) ? $data->$inputName : old($inputName) }}</textarea>
                @elseif($inputTypes && $inputTypes[$index] === 'textarea1')
                    <textarea class="form-control @error($inputName) is-invalid @enderror" name="{{ $inputName }}">{{ isset($data) ? $data->$inputName : old($inputName) }}</textarea>
                @elseif ($inputTypes && $inputTypes[$index] === 'select')
                    @if(isset($select))
                        {!! $select !!}
                    @endif
                    @if(!empty($select_add))

                        {!! $select_add !!}

                    @endif

                @elseif ($inputTypes && $inputTypes[$index] === 'file')
                    <div class="row">
                        <div class="col-4">
                            <input id="formFile" ref="{{ $inputName }}"  type="file" name="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">
                        </div>

                        <div class="col-6" id="image-preview" data-width = "{{ empty($width) ? '200px' : $width }}" data-height = "{{ empty($height) ? '200px' : $height }}">
                            <img src="@if(isset($data)){{ asset('storage/'.$data->image) }} @endif" alt="your_name">
                        </div>
                    </div>

                @elseif($inputTypes[$index] == 'date')
                        <div class="row">
                            <div class="col-4">
                                <input id="formFile" ref="{{ $inputName }}"  type="date" name="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">
                            </div>
                        </div>

                @elseif($inputTypes[$index] == 'time')
                        <div class="row">
                            <div class="col-4">
                                <input id="formFile" ref="{{ $inputName }}"  type="time" name="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">
                            </div>
                        </div>

                @else
                    <input ref="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" type="{{ $inputTypes ? $inputTypes[$index] : 'text' }}" name="{{ $inputName }}" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">

                @endif
                @error($inputName)
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            @endforeach

            @if(!empty($slot))

                <div class="form-group">
                    {!! $slot !!}
                </div>
            @endif

            @if (count($inputNames) == 1 && $inputNames[0] === 'content')
                <label class='mb-2' for="{{ $inputNames[0] }}">{{ $TitleNames[0] }}</label>
                <textarea class="form-control" name="{{ $inputNames[0] }}" id="editor">{{ old($inputNames[0]) }}</textarea>
                @if(isset($data) && isset($data->dulieu))
                    <input type="hidden" name="trường" value="{{ $data->dulieu }}">
                @endif
            @endif
            <button class="btn btn-danger mt-4 mb-3" type="submit">{{ $buttonText }}</button>
        </form>
    </div>
</div>
