<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>demug</title>
  <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="cart" class="visible-xs cart-mobile">
          <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </a>
        <a class="navbar-brand" href="index">
          <img src="img/demug-logo-yellow.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="categoria">Canecas</a></li>
          <li><a href="categoria">Squeeze</a></li>
          <li><a href="categoria">Quadros</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php 
              if(isset($_SESSION['nome-usuario'])){
            ?>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Olá <?php echo $_SESSION['nome-usuario']; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="logout">sair</a></li>
                </ul>
              </li>
            <?php
              }else{
                echo "<li><a href='login'>Login</a></li>";
              }
            ?>
          </li>
          <li class="hidden-xs"><a href="cart">
          <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <section class="banner">
    <div class="container">
    <div id="hero-slide" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="item active" style="background-image: url('img/banner_2.png');"></div>
    <!-- <div class="item" style="background-image: url('img/banner_2.jpg');"></div> -->
    </div>
</div>
    </div>
</section>
<section class="produtos">
    <div class="container">
        <div class="col-xs-12">
            <h2>Produtos em destaque</h2>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-1.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-2.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-3.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-4.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-5.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-6.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-1.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="item">
                <div class="img-produto" title="Caneca Girl Coffee">
                    <img src="img/caneca-5.jpg" alt="Caneca Girl Coffee" class="img-responsive">
                    <div class="overlay"><a href="#" class="btn-comprar">Comprar</a></div>
                </div>
                <a href="#" class="nome-produto">Caneca Girl Coffee</a>
                <span class="preco-produto">R$44,00</span>
            </div>
        </div>

    </div>
</section>
<footer>
  <div class="container">
    <div class="col-sm-4">
      <nav>
        <ul class="list-unstyled">
          <li><a href="#">Sobre a <b>demug</b></a></li>
          <li><a href="#">Fale Conosco</a></li>
          <li><a href="#">Categorias</a></li>
          <li><a href="faq">FAQ</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-sm-4">
      <form action="#" id="form-newsletter">
        <label>Inscreva-se para receber nossa newsletter</label>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="email">
          <span class="input-group-btn">
          
            <button class="btn btn-submit" type="button">
            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
            </button>
          </span>
        </div><!-- /input-group -->
      </form>
    </div>
    <div class="col-sm-4">
      <a href="#">
        <img src="img/demug-logo-white.png" class="logo img-responsive" alt="demub">
      </a>
    </div>
  </div>
</footer>

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
