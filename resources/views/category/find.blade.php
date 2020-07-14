@extends('layouts.app')
@section('content')
<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
    Страница категории: {{ $category->name }}
    </h3>

@foreach($news as $n)
    @if($n->cat_id == $id)
        <div class="blog-post">
            <h2>{{ $n->title }}</h2>
            <p>{{ $n->text }}</p>
        </div>
    @endif

@endforeach
</div>
@stop

