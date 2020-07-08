@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Форма получания выгрузки данных:</h1>

        <form method="post" action="{{ route('news.unloadingSend') }}">
            @csrf
            <div class="form-group">
                <label for="name">Введите свое имя</label>
                <input name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше имя">
            </div>
            <div class="form-group">
                <label for="phone">Введите номер телефона</label>
                <input name="phone" id="phone" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="+7(***)***-**-**">
            </div>

            <div class="form-group">
                <label for="email">Введите свой e-mail</label>
                <input name="email" id="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="e-mail">
            </div>
            <div class="form-group">
                <label for="text">Введите информациб о том, что хотите получить</label>
                <textarea name="info" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Ваш текст"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Добавить</button>
        </form>
    </div>
@stop
