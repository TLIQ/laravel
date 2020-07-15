@extends('layouts.app')


@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список категорий:
        </h3>

        @foreach($categories as $c)
            <div class="blog-post">
                <h3 class="blog-post-title " >Название: {{ $c->name }}</h3>

                <p class="blog-post-meta" >Айди категории: {{ $c->id }}</p>
            </div><!-- /.blog-post -->
        @endforeach
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@stop
