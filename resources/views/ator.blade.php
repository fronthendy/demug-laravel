<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - {{$ator->primeiro_nome}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>{{$ator->primeiro_nome}} {{$ator->ultimo_nome}}</h1>
            <p>Atriz</p>
            <hr>
            <h4>Filmes que participou</h4>
            <ul>
                @foreach($ator->filmes as $filme)
                   <li> <a href="/filme/{{$filme->filme_id}}">{{$filme->titulo}} - {{$filme->ano_de_lancamento}}</a></li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
