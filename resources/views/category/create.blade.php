@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Добавление категории</h1>
        <br>
        <form method="post" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Название категории</label>
                <input name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше название" value="{{ old('name') }}">
                @if($errors->has('name'))
                    <div class="alert alert-danger mt-2">
                        @foreach($errors->get('name') as $error)
                            <p> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Описание категории</label>
                @if($errors->has('description'))
                    <div class="alert alert-danger mt-2">
                        @foreach($errors->get('description') as $error)
                            <p> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <textarea name="description" class="form-control" aria-label="With textarea" id="full_reference" cols="30" rows="10" placeholder="Ваш текст">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-success">Добавить</button>
        </form>
    </div>
@stop
