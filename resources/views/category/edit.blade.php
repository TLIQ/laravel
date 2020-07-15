@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Редактирование категории</h1>
        <br>
        <form method="post" action="{{ route('categories.edit') }}">
            @csrf
            <div class="form-group">
                <label for="name">Название категории</label>
                <input name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше название" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="text">Описание категории</label>
                <textarea name="description" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Ваш текст"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Сохранить</button>
        </form>
    </div>
@stop
