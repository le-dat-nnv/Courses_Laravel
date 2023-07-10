@extends('back_end.layout.index')
@section('content')
    @php
        $nameHeading = ['Tên Banner' , 'Tên Đường Dẫn' , 'ảnh banner' , 'Trạng thái'];
        $listField = ['name' , 'slug' , 'image' , 'status'];
        $url = 'banner';
    @endphp
    <h5>List Danh Mục Banner</h5>
    <table class="table">
        <thead>
        <tr>
            <td><input style="position: relative;" class="form-check-input" id="all" v-model="isChecked" @change="checkAll" type="checkbox"></td>
            <td>#</td>
            @foreach ($nameHeading as $lableName)
                <td class="text-uppercase">{{ $lableName }}</td>
            @endforeach
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        </thead>
        <tbody id="product-list-body">
        @foreach ($data as $index => $list)
            <tr>
                <td><input style="position: relative;" class="form-check-input" type="checkbox" value="" id="{{ $list->id }}"></td>
                <td>{{ $index + 1 }}</td>
                @foreach ($listField as $title)
                    @if($title === 'image')
                        <td><img width="200px" height="200px" src="{{ asset('storage/'.$list->image) }}" alt="Your Image"></td>
                    @elseif($title==='status')
                        @if($list->status=='1')
                            <td>Actived</td>
                        @else
                            <td>No Actived</td>
                        @endif
                    @else
                        <td>{!! $list->{$title} !!}</td>
                    @endif
                @endforeach
                <td><a href="{{ route($url . '.edit', [$url => $list->id]) }}" class="btn btn-danger">Sửa</a></td>
                <td>
                    <form action="{{ route('banner.destroy' , ['banner'=>$list->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <div class="mb-3 d-flex justify-content-center align-items-center">
        {{ $data->links() }}
    </div>
@endsection
