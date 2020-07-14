@extends('layouts.app')


@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список категорий:
        </h3>

        @foreach($category as $c)
            <div class="blog-post">
                <a class="blog-post-title " href="{{ route('category.find', ['category' => $c->id]) }}">Название: {{ $c->name }}</a>
                <br>
                <a class="blog-post-meta" href="{{ route('category.find', ['category' => $c->id]) }}">Айди категории: {{ $c->id }}</a>
            </div><!-- /.blog-post -->
        @endforeach
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

    </div><!-- /.blog-main -->
@stop
