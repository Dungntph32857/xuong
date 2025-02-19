@extends('admin.layouts.master');


@section('title')
Chi tiết Danh mục sản phẩm:{{$model->name}}
@endsection

@section('content')
<table>
    <tr>
        <th>Trường</th>
        <th>Giá trị</th>
    </tr>
    @foreach ($model->toArray() as $key => $value)
        <tr>
            <td>{{$key}}</td>
            <td>
                @php
                    if($key == 'cover'){
                        $url =\Storage::url($value);
                        echo "<img src='$url' width='70px' alt=''>";
                    }elseif(\Str::contains($key,'is_')){
                       echo $value 
                        ? '<span class="badge bg-primary">Yes</span>'
                            :'<span class="badge bg-danger">No</span>';
                    }
                    else{
                        echo $value;
                    }
                @endphp
            </td>
        </tr>
    @endforeach
</table>

@endsection

