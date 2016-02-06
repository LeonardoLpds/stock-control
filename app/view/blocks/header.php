<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stock Control - Altran Brazil</title>
    <!-- Bootstrap -->
    <link href="<?=strpos($view, '/') ? '../' : ''?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=strpos($view, '/') ? '../' : ''?>css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?view=home">Brand</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav">
              <li <?=$view=="/home" ? "class='active'" : '' ?>>
                <a href="/">Home</a>
              </li>
              <li <?=$view=="product/list" ? "class='active'" : '' ?>>
                <a href="/product/list">Produtos</a>
              </li>
              <li <?=$view=="client/list" ? "class='active'" : '' ?>>
                <a href="/client/list">Clientes</a>
              </li>
              <li <?=$view=="order/list" ? "class='active'" : '' ?>>
                <a href="/order/list">Pedidos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>