@extends('back_end.layout.index')
@section('content')
    @php
        $nameTitle = ['Tên Modules' , 'Summary' , 'Content'];
        $nameInputs = ['name' , 'summary' , 'content'];
        $inputType = ['text' , 'textarea' , 'textarea'];
    @endphp
    <div class="card mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Module config
            </h6>
        </div>
        <div class="card-body">
            <form id="form_submit" action="{{ route('modules.store') }}" method="post">
                @csrf
                @foreach($nameTitle as $key=>$name)
                    <label class='mb-2 mt-4' for="{{ $name }}">{{ $name }}</label>
                    @if($inputType[$key] === 'textarea')
                        <textarea class="form-control ckeditors_ledat @error($nameInputs[$key]) is-invalid @enderror" name="{{ $nameInputs[$key] }}"></textarea>
                    @else
                        <input class="form-control @error($nameInputs[$key]) is-invalid @enderror" type="{{ $inputType[$key] }}" name="{{ $nameInputs[$key] }}">
                    @endif
                @endforeach
                    <label class='mb-2 mt-4' for="modules_choose">Modules choose</label>
                    <select class="form-select" aria-label="Default select example" name="module" id="checkModule">
                        @foreach($list_table as $tb_list)
                            <option value="{{ $tb_list->name }}">{{ $tb_list->name }}</option>
                        @endforeach
                    </select>
                    <div id="moduleFields">
                        <!-- Trường "Limit" sẽ được hiển thị tại đây sau khi thay đổi giá trị của "Modules" -->
                    </div>
                    <button type="submit" class="btn btn-success mt-4 mb-3">
                        @if(isset($data))
                            Update
                        @else
                            Add
                        @endif
                        Modules
                    </button>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#checkModule').click(function () {
            var selectedModule = $(this).val();

            // Gửi yêu cầu Ajax để lấy nội dung từ server và đặt vào #moduleFields
            $.ajax({
                type: 'GET',
                url: '{{ url('get_module') }}/' +selectedModule,
                success: function (response) {
                    $('#moduleFields').empty();

                    if (response.length > 0) {
                            var itemHTML = '<div class="module-item">';
                            itemHTML += '<label class="mb-2 mt-4" for="categories">Categories choose</label>';
                            itemHTML += '<select class="form-select" aria-label="Default select example" name="categories" id="checkCategories">';
                            $.each(response, function (index, item) {
                                itemHTML += '<option value="' + item.id + '">' + item.name + '</option>';
                            });
                            itemHTML += '</select>';
                            itemHTML += '<label class="mb-2 mt-4" for="limit">Limit</label>';
                            itemHTML += '<input type="text" name="limit" class="form-control">';
                            itemHTML += '</div>';

                            $('#moduleFields').append(itemHTML);
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>
@endsection

