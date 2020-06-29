<h1>Добавление новости</h1>

<br>

<form method="post" action="{{ route('news.store') }}">
    @csrf
    <input type="text" placeholder="Название новости">
    <br>
    <br>
    <textarea name="" id="" cols="30" rows="10" placeholder="Полное описание новости"></textarea>
    <br>
    <br>
    <textarea name="" id="" cols="30" rows="5" placeholder="Краткое описание новости"></textarea>
    <br>
    <br>
    <button type="submit">Ok</button>
</form>
