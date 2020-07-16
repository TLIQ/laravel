@extends('layouts.app')
@section('content')
<div class="col-md-8 blog-main">
    <h1>Редактирование новости {{ $news->id }}</h1>
{{--    <h1>Редактирование новости {{ $id }}</h1>--}}


        <div class="blog-post">
            <form method="post" action="{{ route('news.update', ['news' => $news->id]) }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Название новости</label>
                    <input name="title" id="title" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше название" value="{{ $news->title }}">
                    @if($errors->has('title'))
                        <div class="alert alert-danger mt-2">
                            @foreach($errors->get('title') as $error)
                                <p> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group">
{{--                    <p>Категория новости: {{ $news->category }}</p>--}}
                </div>
                <div class="form-group">
                    <label for="text">Текст новости</label>
                    <textarea name="text" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Текст новости">{{ $news->text  }}</textarea>
                    @if($errors->has('text'))
                        <div class="alert alert-danger mt-2">
                            @foreach($errors->get('text') as $error)
                                <p> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-outline-success">Редактировать</button>
{{--                <button  class="btn btn-outline-warning">Удалить</button>--}}
            </form>

        </div>


</div>
@stop






