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
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="xs-6">
                <h1 style="display:inline-block">
                    CATEGORIAS
                </h1>
                </div>
                <div class="xs-6 text-right">
                    <a href="/categoria/create" class="btn btn-primary">Adicionar</a>
                </div>
                <ul class="list-group">
                    @foreach($categorias as $categoria)
                    <li class="list-group-item"><a href="/categoria/edit/{{$categoria->categoria_id}}">{{ $categoria->nome }}</a></li>
                    @endforeach
                </ul>

                {{$categorias->links()}}
            </div>
        </div>
    </body>
</html>
