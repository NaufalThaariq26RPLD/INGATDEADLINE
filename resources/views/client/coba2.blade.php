<div>
    @foreach ($data as $data)
        
    <div>
        <h1>{{ $data->question }}</h1>
        <p>FROM : {{ $data->username }}</p>
        <a href="/confirm/faq/{{ $data->id }}">Balas</a>
    </div>

    @endforeach

</div>