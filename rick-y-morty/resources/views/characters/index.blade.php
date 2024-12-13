<!DOCTYPE html>
<html>
<head>
    <title>Rick y Morty Characters</title>
</head>
<body>
    <h1>Personajes de Rick y Morty</h1>

    <ul>
        @foreach ($characters as $character)
            <li>
                <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
                <h2>{{ $character['name'] }}</h2>
                <p>Estado: {{ $character['status'] }}</p>
                <p>Género: {{ $character['gender'] }}</p>
            </li>
        @endforeach
    </ul>

    <div>
        @if ($prevPage)
            <a href="?page={{ $prevPage }}">Anterior</a>
        @endif

        @if ($nextPage)
            <a href="?page={{ $nextPage }}">Siguiente</a>
        @endif
    </div>
</body>
</html>