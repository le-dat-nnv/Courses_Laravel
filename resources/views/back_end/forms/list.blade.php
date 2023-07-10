<table class="table">
    <thead>
    <tr>
        <td><input style="position: relative;" class="form-check-input" id="all" v-model="isChecked" @change="checkAll" type="checkbox"></td>
        <td>#</td>
        @foreach ($nameTitle as $lableName)
            <td>{{ $lableName }}</td>
        @endforeach
        <td>Sửa</td>
        @if(isset($url_delete))
        <td>Xóa</td>
        @endif
    </tr>
    </thead>

    <tbody id="product-list-body">
    @foreach ($data as $index => $product)
        <tr>
            <td><input style="position: relative;" class="form-check-input" type="checkbox" value="" id="{{ $product->id }}" ref="{{ $product->id }}" ></td>
            <td>{{ $index + 1 }}</td>
            @foreach ($list as $title)
                @if($title === 'image')
                    <td><img width="200px" height="200px" src="{{ asset($product->image) }}" alt="Your Image"></td>
                @elseif($title === 'id_category')
                    <td>{{ $product->getCat()->id}}</td>
                @else
                    <td>{!! $product->{$title} !!}</td>
                @endif
            @endforeach
            <td><a href="{{ route($url . '.edit', [$url => $product->id]) }}" class="btn btn-danger">Sửa</a></td>

            @if(isset($url_delete))
                <td>
                    <form action="{{ URL::to('admin/' ."$url_delete/$product->id") }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Xóa</button>
                    </form>
                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
<div class="mb-3 d-flex justify-content-center align-items-center">
    {{ $data->links() }}
</div>

