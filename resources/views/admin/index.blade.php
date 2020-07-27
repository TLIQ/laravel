@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1 class="mb-4">Администрирование</h1>
        <h3>Изменить новости</h3>
        <div class="d-flex mb-4">
            <a class="btn btn-outline-secondary mb-3" href="{!! route('news.create') !!}">Добавить новость</a>
            <a class="btn btn-outline-secondary mb-3 ml-3" href="{{ route('news.index') }}">Список новостей</a>
        </div>

        <h3>Изменить категории</h3>
        <div class="d-flex mb-4">
            <a class="btn btn-outline-secondary mb-3" href="{{ route('categories.create') }}">Добавить категорию</a><br>
            <a class="btn btn-outline-secondary mb-3 ml-3" href="{{ route('categories.index') }}">Показать все</a>
        </div>
        <h3>Изменить пользователей</h3>
        <a class="btn btn-outline-secondary mb-3" href="{{ route('users.index') }}">Список пользователей</a><br>


    </div>
@stop
