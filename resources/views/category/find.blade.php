@extends('layouts.app')
@section('content')
<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
    Страница категории {{ $category }}
    </h3>

@foreach($news as $n)
    @if($n['category'] == $category)
        <div class="blog-post">
            <h2>Заголовок: {{ $n['title'] }}</h2>
            <h3>Категория: {{ $n['category'] }}</h3>
            <p>Текст: {{ $n['text']  }}</p>
        </div>
    @endif

@endforeach
</div>
@stop

