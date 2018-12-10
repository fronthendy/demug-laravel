<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - {{$filme->titulo}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
       <div class="container">
           <div class="col-xs-12">
               <a href="/filmes">todos os filmes</a>
               <br>
           </div>
           <div class="col-md-7 col-xs-12">
                <h1>{{ $filme->titulo }}</h1>
                <p>Preço ${{$filme->preco_da_locacao}}</p>
                <p>{{$filme->categoria}}</p>
                <p>{{ $filme->descricao }}</p>
                <hr>
                <h4>Informações adicionais</h4>
                <small>Ano de lançamento: {{ $filme->ano_de_lancamento }}</small><br>
                <small>Duração do filme: {{ $filme->duracao_do_filme }}min</small><br>
                <small>Idioma: <a href="/idioma/{{ $filme->idioma_id}}"> {{ $filme->idioma->nome }}</a></small>
            </div>
            <div class="col-xs-12 col-md-5">
                <h3>Elenco</h3>
                <div class="row">
                    <ul>
                    @foreach($filme->atores as $ator)
                        <li><a href="/ator/{{$ator->ator_id}}">{{ $ator->primeiro_nome }} {{ $ator->ultimo_nome }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
       </div>
    </body>
</html>
