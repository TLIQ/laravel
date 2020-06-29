{{--<a href="{{ route('news.edit', ['id' => $id]) }}">Перейти на страницу</a> с #ID = {{ $id }}--}}
<br>
<br>
<br>
<br>
@foreach($news as $n)
    <a href="{{ route('news.edit', ['id' => $n['id']]) }}">Заголовок новости: {{ $n['title'] }}</a>
    <p>Категория новости: {{ $n['category'] }}</p>
    <p>Текст новости: {{ $n['text']  }}</p>
    <hr>
    <br>
    @endforeach
