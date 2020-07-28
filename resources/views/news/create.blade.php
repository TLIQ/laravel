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
            @if($errors->has('title'))
                <div class="alert alert-danger mt-2">
                    @foreach($errors->get('title') as $error)
                        <p> {{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="text">Текст новости</label>
            @if($errors->has('text'))
                <div class="alert alert-danger mt-2">
                    @foreach($errors->get('text') as $error)
                        <p> {{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <textarea name="text" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Ваш текст">{!! old('text') !!}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-success">Добавить</button>
    </form>
</div>
@stop
@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('full_reference');
    </script>
@endpush
