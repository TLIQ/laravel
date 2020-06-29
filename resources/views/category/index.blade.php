<h1>Страница категорий</h1>
<br>

@foreach($category as $c)
    <h2>Айди категорияя: {{ $c['id'] }}</h2>
    <a href="{{ route('category.find', ['category' => $c['id']]) }}">Якобы название: {{ $c['name'] }}</a>
@endforeach
