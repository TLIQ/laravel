@extends('layouts.app')
@section('content')
<div class="col-md-8 blog-main">
    <h1>Редактирование новости {{ $id }}</h1>

@foreach($news as $n)
    @if($n['id'] == $id)
        <div class="blog-post">
            <h3>Заголовок новости: {{ $n['title'] }}</h3>
            <p>Категория новости: {{ $n['category'] }}</p>
            <p>Текст новости: {{ $n['text']  }}</p>
        </div>

    @endif
@endforeach
</div>
@stop
