<?php
include_once 'selects/selects.php';
include_once 'util/corpo.php';
//$alert = $_GET['alert'];
cabeca();
descricaoForm();
?>

<body onload="mostraAlerta();" class="mt-5">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
          <script>
        function mostraAlerta(){
            $("#alerta").fadein(500);
            $("#alerta").fadeout(5000);
        }
        </script>
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
            form input{
                width: 50% !important;
            }
            #divAlerta{
                z-index: 1;
                margin: 10% 30% 0 30%;
            }
        </style>

        <!-- Main jumbotron for a primary marketing message or call to action -->
<!--        <div id="divAlerta" style="visibility:<?php echo $alert == 1? "visible" : "hidden";?>">
            <div id="alerta" class="alert alert-danger" role="alert">
                Candidato nÃ£o pÃ´de ser cadastrado!
            </div>
        </div>-->
        <div class="container " >
            <center> <img src="img/logo.jpg" class="img-fluid " width="150" height="150"  /></center>
            <h1 class="text-center text-info" >Preencha os dados do Candidato</h1>
            <form class="navbar-form navbar-right " role="form" action="inserir/inserirCandidato.php" method="POST">
                <center>
                <div class="form-group">
                    <input type="text" placeholder="Nome" name="nome" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="cpf" placeholder="CPF" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="endereco" placeholder="EndereÃ§o" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="CEP" name="cep" class="form-control">
                </div>
                
                    <?php
                    echo selectCargo();
                    ?>
                
                
                <div class="form-group">
                    <input type="text" placeholder="Telefone" name="telefone" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Senha" name="senha" class="form-control">
                </div>
                    </center>
                <center>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                </center>
            </form>

        </div>

        <hr>

        <footer>
            <p class="text-center"> &copy; Sistema de Processo Seletivo - 2019 </p>
            <p class="text-center"> Prefeitura Municipal de Olinda </p>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/bootstrap.min.js"></script>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
