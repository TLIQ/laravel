@extends('layouts.app')
@section('content')
<div class="col-md-8 blog-main">
    <h1>Добавление новости</h1>
    <br>
    <form method="post" action="{{ route('news.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Название новости</label>
            <input name="title" id="title" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше название" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="text">Текст новости</label>
            <textarea name="text" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Ваш текст"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Добавить</button>
    </form>
</div>
@stop
