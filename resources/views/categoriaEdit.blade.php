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
            <h1>Editar categoria</h1>
            <form class="col-md-6 col-xs-12" action="/categoria/edit/{{ $categoria->categoria_id}}" method="post">
                @csrf
                @method('PUT')
                <label for="nome">Nome da categoria:</label>
                <input type="text" class="form-control" value="{{ $categoria->nome }}" name="nome" id="nome">
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            </div>
        </div>
    </body>
</html>
