<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - {{$idioma->nome}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="col-md-8">
            <h1>{{ $idioma->nome}} </h1>
            <p>{{$idioma->ultima_atualizacao->format('d/m/Y') }}</p>
            </div>

            <div class="col-md-4">
            <h2>Filmes 
            <a href="/filmes" class="btn btn-default pull-right">ver todos</a></h2>
            <ul>
                @foreach($idioma->filmes as $filme)
                <li>
                <a href="/filme/{{ $filme->filme_id}}">{{ $filme->titulo }}</a>
                </li>
                @endforeach
            </ul>
            </div>
        </div>
    </body>
</html>
