@extends('layouts.app')
@section('content')
    <div class="col-md-8 blog-main">
        <h1>Список пользователей</h1>
        @forelse($users as $user)
            <div class="blog-post">
                <h3 class="blog-post-title " >Имя пользователя: {{ $user->name }}</h3>
                <div>
                    <p class="blog-post-meta mr-4" >Айди пользователя: {{ $user->id }}</p>
                    <p class="blog-post-meta mr-4">E-mail: {{ $user->email }}</p>
                    <p class="blog-post-meta mr-4">Зарегистрирован: {{ $user->created_at }}</p>
                    <p class="blog-post-meta mr-4">Обновлен: {{ $user->updated_at }}</p>
                    <p class="blog-post-meta mr-4">Уровень доступа:
                    @if($user->is_admin === true)
                        Админ
                    @else
                        обычный пользователь
                        @endif
                    </p>

                </div>

                <a class="btn btn-secondary mb-2" href="{{ route('users.edit', $user) }}"> Изменить</a>

                <form action="{{ route('users.destroy', $user) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-secondary">Удалить</button>
                </form>
            </div><!-- /.blog-post -->
        @empty
            <p>Список пользователей пуст</p>
        @endforelse
    </div>
@stop

