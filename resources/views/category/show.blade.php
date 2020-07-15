@extends('layouts.app')


@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 border-bottom">
            Список новостей категории <span class="font-italic">{{ $category->name }}</span>:
        </h3>

        @foreach($category->news as $news)
            <div class="blog-post">
                <h3 class="blog-post-title " > {{ $news->title }}</h3>
                <p class="blog-post-meta" >Создано: {{ $news->created_at }}</p>
                <p class="blog-post-meta" >Обновлено: {{ $news->updated_at }}</p>
                <p class="blog-post-meta" > {{ $news->text }}</p>
            </div><!-- /.blog-post -->
            <hr>
        @endforeach


    </div><!-- /.blog-main -->
@stop
