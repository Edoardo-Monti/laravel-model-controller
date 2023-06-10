<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @foreach($movies as $elem)

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$elem['title']}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$elem['original_title']}}</h6>
            <p class="card-link">Data di uscita: {{$elem['date']}}</p>
            <p class="card-link">Voto: {{$elem['vote']}}</p>
        </div>
    </div>
    @endforeach
</body>

</html>
