<?php

include_once 'config.php';
include_once 'testaSessao.php';
testaSessao();
$usuarioLogado = json_decode($_SESSION["gmUsuarioLogado"], true);

function cabeca() {

    echo '<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="' . urlbase() . '/css/bootstrap.min.css">
        <link rel="stylesheet" href="' . urlbase() . '/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="' . urlbase() . '/css/estilo.css">
        <meta charset="UTF-8">
        <link href="' . urlbase() . '/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <script src="' . urlbase() . '/js/bootstrap.bundle.mim.js" type="text/javascript"></script>
        <script src="' . urlbase() . '/js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="' . urlbase() . '/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="' . urlbase() . '/js/script.js" type="text/javascript"></script>
      
    </head>
    <nav class="navbar navbar-light bg-light fixed-top text-white" style="background-color:#006eb4 !important;">
  <a class=" text-right " >Secretaria de Saúde de Olinda</a> <P><strong>Seja Bem vindo(a),' . $_SESSION['nome']  . ' </strong></P>
  <a class="navbar-brand btn btn-dark text-white" href="' . urlbase() . '/sair.php"><i class="material-icons">
                                    exit_to_app
                                </i>Sair</a>
</nav>
<body>
    ';
}

function descricaoForm() {

    echo '<title>Sistema de Cadastro Para Processo Seletivo</title>';
}

function descricaoPositivo() {

    echo '<title>Confimação de Cadastro</title>';
}

function rodape(){
    
    echo '<hr>

<footer>
    <p class="text-center"> &copy; Sistema de Processo Seletivo - 2019 </p>
    <p class="text-center"> Prefeitura Municipal de Olinda </p>
</footer>

</html>
';
}