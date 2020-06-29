<h1>Страница категории {{ $category }}</h1>
<br>

@foreach($news as $n)
    @if($n['category'] == $category)
        <h2>Заголовок: {{ $n['title'] }}</h2>
        <h3>Категория: {{ $n['category'] }}</h3>
        <p>Текст: {{ $n['text']  }}</p>
        <hr>
        <br>
    @endif

@endforeach
