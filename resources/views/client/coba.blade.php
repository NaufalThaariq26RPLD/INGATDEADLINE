<form action="/confirm/faq/{{ $data->id }}" method="post">
@csrf

<h1>{{ $data->question }}</h1>

<input type="text" name="answer">

<button type="submit">Kirim</button>
</form>