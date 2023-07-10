<form ref="btn_form_submit" id="form_submit" action="{{ isset($data) ? route($action.'.update' , [$action , $data->id]) : route($action.'.create') }}" method="{{ $method }}" enctype="multipart/form-data">
    @if(isset($data))
        @method('PUT')
    @endif
    {{ csrf_field() }}
    <input id="id" type="hidden" name="id_s" value="{{ isset($data) ? $data->id : '' }}"  >
    @foreach ($inputNames as $index => $inputName)
        <label class='mb-2 mt-4' for="{{ $inputName }}">{{ $TitleNames[$index] }}</label>
        @if ($inputTypes && $inputTypes[$index] === 'textarea')
            <textarea class="form-control @error($inputName) is-invalid @enderror" name="{{ $inputName }}" id="editor">{{ isset($data) ? $data->$inputName : old($inputName) }}</textarea>
        @elseif ($inputTypes && $inputTypes[$index] === 'select')
            <select class="form-control" name="{{ $inputName }}" id="{{ $inputName }}">
                @php
                    $uniqueCategories = [];
                @endphp
                @if(isset($data))
                @foreach ($product as $category)
                    @if ($category->getCat() && !in_array($category->getCat()->id, $uniqueCategories))
                        <option value="{{ $category->getCat()->id }}" {{ isset($category) && $category->getCat()->id == $category->id ? 'selected' : '' }}>
                            {{ $category->getCat()->name }}
                        </option>
                        @php
                            $uniqueCategories[] = $category->getCat()->id;
                        @endphp
                    @endif

                    <option value="{{ $category->id }}" {{ isset($category) && $category->id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
                @endif
            </select>
            @if(!empty($select_add))

                    {!! $select_add !!}

            @endif

        @elseif ($inputTypes && $inputTypes[$index] === 'file')
            <div class="row">
                <div class="col-4">
                    <input id="formFile" ref="{{ $inputName }}"  type="file" name="{{ $inputName }}" class="form-control @error($inputName) is-invalid @enderror" id="{{ $inputName }}" value="{{ old($inputName, isset($data) ? $data->$inputName : '') }}">
                </div>

                <div class="col-6" id="image-preview" data-width = "{{ empty($width) ? '200px' : $width }}" data-height = "{{ empty($height) ? '200px' : $height }}">

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
