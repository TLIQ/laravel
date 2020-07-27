@extends('layouts.app')


@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список новостей:
        </h3>

        @foreach($news as $n)
            <div class="blog-post">
                <h3 class="blog-post-title " >Название: {{ $n->title }}</h3>
                <div>
                    <p class="blog-post-meta mr-4" >Айди категории: {{ $n->id }}</p>
                    <p class="blog-post-meta mr-4">Статус: {{ $n->status }}</p>
                    <p class="blog-post-meta mr-4">Создана: {{ $n->created_at }}</p>
                    <p class="blog-post-meta mr-4">Изменена: {{ $n->updated_at }}</p>
                    <p class="blog-post-meta mr-4">Текст новости: {{ $n->text }}</p>
                </div>

                <a class="btn btn-secondary mb-2" href="{{ route('news.edit', ['news' => $n]) }}"> Изменить</a>

                <form action="{{ route('news.destroy', $n) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-secondary">Удалить</button>
                </form>


            </div><!-- /.blog-post -->
        @endforeach
        <nav class="blog-pagination">
            {!! $news->links() !!}
        </nav>
    </div><!-- /.blog-main -->
@stop
