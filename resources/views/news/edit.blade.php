<h1>Редактирование новости {{ $id }}</h1>

@foreach($news as $n)
    @if($n['id'] == $id)
    <h3>Заголовок новости: {{ $n['title'] }}</h3>
    <p>Категория новости: {{ $n['category'] }}</p>
    <p>Текст новости: {{ $n['text']  }}</p>
    <hr>
    <br>
    @endif
@endforeach
