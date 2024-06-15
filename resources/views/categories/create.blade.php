<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới danh mục</title>
</head>
<body>
    <h1>Thêm Mới Danh mục</h1>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Gửi</button>
    </form>
</body>
</html>