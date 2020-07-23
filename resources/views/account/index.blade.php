@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        @if(session()->has('error'))
            <h3 style="color:red;">{{ session()->get('error') }}</h3>
            @endif
        <h1>Личный кабинет</h1>
        <p>Имя пользователя: {{ Auth::user()->name }}</p>
        <p>E-mail: {{ Auth::user()->email }}</p>
    </div>
@stop
