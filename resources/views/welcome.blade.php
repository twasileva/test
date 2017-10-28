<!DOCTYPE html>
<html>
<head>
    <title>Список товара</title>
</head>
<body>
    <h1>Список товара</h1>
    <h3><a href="submit">Добавить товар</a></h3>
    <ol>
        @foreach ($lists as $val) 
            <li>{{ $val->title }}</li>
        @endforeach
    </ol>
</body>
</html>