<!DOCTYPE html>
<html>
<head>
    <title>Форма добавления нового товара</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Добавить товар</h1>
            <form action="/submit" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Наименование">
                </div>
                <div class="form-group">
                    <label for="img">Фото</label>
                    <input type="file" class="form-control" id="img" name="img" placeholder="Фото">
                </div>
                <div class="form-group">
                    <label for="description">Описание товара</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Описание"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Добавить товар</button>
            </form>
        </div>
    </div>
@endsection
</body>
</html>