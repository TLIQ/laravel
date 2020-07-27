
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        @foreach($categories as $category)
            <a class="p-2 text-muted" href="{{ route('category.show', $category -> id) }}">{{ $category->name }}</a>
        @endforeach

    </nav>
</div>

{{--@foreach($category as $c)--}}
{{--    <h2>Айди категорияя: {{ $c['id'] }}</h2>--}}
{{--    <a href="{{ route('category.find', ['category' => $c['id']]) }}">Якобы название: {{ $c['name'] }}</a>--}}
{{--@endforeach--}}
