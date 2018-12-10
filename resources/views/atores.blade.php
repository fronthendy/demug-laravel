<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
            <div class="container">
                <div class="title m-b-md">
                    ATORES
                </div>
                <div class="text-right">
                <a href="/ator/create" class="btn btn-primary">Criar</a></div>
                <ul class="list-group">
                @foreach($atores as $ator)
                <li class="list-group-item"><a href="ator/edit/{{$ator->ator_id}}">{{ $ator->primeiro_nome }}</a></li>
                @endforeach
                </ul>
            </div>

    </body>
</html>
