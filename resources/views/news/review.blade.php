@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Оставьте свой отзыв о проекте:</h1>
        <br>
        <form method="post" action="{{ route('news.send') }}">
            @csrf
            <div class="form-group">
                <label for="name">Введите свое имя</label>
                <input name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше имя">
            </div>
            <div class="form-group">
                <label for="text">Текст отзыва</label>
                <textarea name="text" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Ваш текст"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Добавить</button>
        </form>
    </div>
@stop
