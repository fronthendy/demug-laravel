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
            <div class="col-md-12">
                <h1>Excluir categoria</h1>
            </div>
            <form class="col-md-6 col-xs-12" action="/categoria/delete/{{$categoria->categoria_id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="text" class="form-control" name="nome" id="nome" value="{{$categoria->nome}}" readonly>
                <button type="submit" class="btn btn-danger">EXCLUIR</button>
            </form>
            <br>
            <div class="col-xs-12">
            @if ($errors->count())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
        </div>
    </body>
</html>
