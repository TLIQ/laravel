@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Редактирование пользователя - {{ $user->name }}</h1>
        <br>
        <form method="post" action="{{ route('users.update', $user) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Имя пользователя</label>
                <input name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="Ваше название" value="{{ $user->name }}">
                @if($errors->has('name'))
                    <div class="alert alert-danger mt-2">
                        @foreach($errors->get('name') as $error)
                            <p> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input name="email" id="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" type="text" placeholder="e-mail" value="{{ $user->email }}">
                @if($errors->has('email'))
                    <div class="alert alert-danger mt-2">
                        @foreach($errors->get('email') as $error)
                            <p> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="email">Уровень доступа:</label>

                <div class="form-check">
                    <input type="radio" class="form-check-input" name="is_admin" value="1" @if($user->is_admin == true) checked @endif>
                    <label for="is_admin" class="form-check-label">Админ</label>
                </div>


                <div class="form-check">
                    <input type="radio" class="form-check-input"  name="is_admin" value="0" @if($user->is_admin == false) checked @endif>
                    <label for="is_admin" class="form-check-label">Обычный пользователь</label>
                </div>


            </div>

            <button type="submit" class="btn btn-outline-success">Сохранить</button>
        </form>
    </div>
@stop



