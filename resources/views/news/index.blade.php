
@extends('layouts.app')

{{--@section('top-menu')--}}
{{--    <div class="nav-scroller py-1 mb-2">--}}
{{--        <nav class="nav d-flex justify-content-between">--}}
{{--            @foreach($categories as $c)--}}
{{--                <a class="p-2 text-muted" href="{{ route('category.find', ['id' => $c->id]) }}">{{ $c->name }}</a>--}}
{{--            @endforeach--}}

{{--        </nav>--}}
{{--    </div>--}}
{{--@stop--}}

@section('content')
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Список новостей
        </h3>
        @foreach($news as $n)
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $n->title }}</h2>
            <p class="blog-post-meta">
                @if(!is_null($n->updated_at)) {{ $n->updated_at->format('d-m-Y H:m') }}
                    @else {{ $n->created_at->format('d-m-Y H:m') }}
                @endif</p>
{{--                    <a class="btn btn-secondary mb-2" href="{{ route('news.edit', ['news' => $n]) }}"> Изменить</a>--}}

{{--                    <form action="{{ route('news.destroy', $n) }}" method="post">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-secondary mb-2">Удалить</button>--}}
{{--                    </form>--}}
            @foreach($categories as $c)
                @if ($n->cat_id === $c->id)
                    <h3>Категория новости: {!! $c->name !!} </h3>
                @endif
            @endforeach

            <p>Текст новости: {!! $n->text !!}</p>

        </div><!-- /.blog-post -->
        @endforeach

        <nav class="blog-pagination">
            {!! $news->links() !!}
        </nav>

    </div><!-- /.blog-main -->
    @stop
