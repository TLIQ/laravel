{{--<a href="{{ route('news.edit', ['id' => $id]) }}">Перейти на страницу</a> с #ID = {{ $id }}--}}
@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список новостей
        </h3>
        @foreach($news as $n)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $n['title'] }}</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="{{ route('news.edit', ['id' => $n['id']]) }}">Изменить</a></p>
            <h3>Категория новости:{!! $n['category'] !!} </h3>
            <p>Текст новости: {!! $n['text'] !!}</p>

        </div><!-- /.blog-post -->
        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
    @stop

@section('top-menu')
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach($category as $c)
                <a class="p-2 text-muted" href="{{ route('category.find', ['category' => $c['id']]) }}">{{ $c['name'] }}</a>
            @endforeach

        </nav>
    </div>
    @stop
{{--@foreach($news as $n)--}}
{{--    <a href="{{ route('news.edit', ['id' => $n['id']]) }}">Заголовок новости: {{ $n['title'] }}</a>--}}
{{--    <p>Категория новости: {{ $n['category'] }}</p>--}}
{{--    <p>Текст новости: {{ $n['text']  }}</p>--}}
{{--    <hr>--}}
{{--    <br>--}}
{{--    @endforeach--}}
