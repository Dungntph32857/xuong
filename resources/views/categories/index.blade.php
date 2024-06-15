<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list danh mục</title>
</head>
<body>
    <h1>List Danh Mục</h1>
    <a href="{{route('categories.create')}}">Thêm Mới</a>
    @if (session('msg'))
    <h2>{{session('msg')}}</h2>
        
    @endif
    <table border="">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>create at</th>
            <th>update at</th>
            <th>act</th>
        </tr>
        @foreach ($data as $item)

        <tr>
            <td>{{$item ->id}}</td>
            <td>{{$item ->name}}</td>
            <td>{{$item ->created_at}}</td>
            <td>{{$item ->updated_at}}</td>
            <td>
                <a href="{{route('categories.show',$item)}}">show</a>
                <a href="{{route('categories.edit',$item)}}">Sửa</a>
                <form action="{{route('categories.destroy',$item)}}" method="post">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" onclick="return confirm('Chắc chắn xóa ko')">delete</button>
                </form>
               
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->links()}}
</body>
</html>