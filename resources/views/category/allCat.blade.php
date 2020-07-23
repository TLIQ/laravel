@extends('layouts.app')


@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список категорий:
        </h3>

        @foreach($categories as $c)
            <div class="blog-post">
                <h3 class="blog-post-title " >Название: {{ $c->name }}</h3>
                    <div>
                        <p class="blog-post-meta mr-4" >Айди категории: {{ $c->id }}</p>
                        <p class="blog-post-meta mr-4">{{ $c->description }}</p>
                    </div>

                    <a class="btn btn-secondary mb-2" href="{{ route('categories.edit', ['category' => $c]) }}"> Изменить</a>

                    <form action="{{ route('categories.destroy', $c) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-secondary">Удалить</button>
                    </form>


            </div><!-- /.blog-post -->
        @endforeach
{{--        <a class="btn btn-success mb-3" href="{{ route('categories.create') }}">Добавить категорию</a>--}}
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@stop
