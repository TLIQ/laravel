@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Администрирование</h1>
        <a class="btn btn-outline-secondary mb-3" href="{!! route('news.create') !!}">Добавить новость</a><br>
        <a class="btn btn-outline-secondary mb-3" href="{{ route('categories.create') }}">Добавить категорию</a><br>
        <a class="btn btn-outline-secondary mb-3" href="{{ route('users.index') }}">Список пользователей</a><br>
        <a class="btn btn-outline-secondary" href="{!! route('account') !!}">Личный кабинет</a>
    </div>
@stop
