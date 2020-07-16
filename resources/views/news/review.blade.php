@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Оставьте свой отзыв о проекте:</h1>
        <br>
        <form method="post" action="{{ route('review.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Введите свое имя</label>
                @if($errors->has('name'))
                    <div class="alert alert-danger mt-2">
                        @foreach($errors->get('name') as $error)
                            <p> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <input name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше имя" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="review">Текст отзыва</label>
                @if($errors->has('review'))
                    <div class="alert alert-danger mt-2">
                        @foreach($errors->get('review') as $error)
                            <p> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <textarea name="review" class="form-control" aria-label="With textarea" id="review" cols="30" rows="10" placeholder="Ваш текст">{{ old('review') }}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Добавить</button>
        </form>
    </div>
@stop
