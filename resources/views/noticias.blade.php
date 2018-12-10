<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
    h2{
        font-size: 16px;
    }
        .item{
            width: 50%;
            border: 1px solid #ccc;
            padding: 20px;
            float: left;
            min-height: 315px;
        }
        img{
            padding-right: 20px;
            float:left;
        }
        .btn-primary{
            margin: 10px 0;
        }
    </style>
</head>
<body>


<div class="container">
<h1>noticias</h1>
    @foreach($noticias as $noticia)
        <div class="item">
            <img src="{{ $noticia['multimedia'][0]['url'] ?? ''}}" width="200" alt="">
            <h2>Titulo: {{ $noticia['title'] }}</h2>  
            <p>Autor: {{ $noticia['byline'] }}</p>
            <a class="btn btn-primary" href="{{ $noticia['url'] }}" target="_blank">ver mais</a>
        </div>
    @endforeach
</div>

    
</body>
</html>

