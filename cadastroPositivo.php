<?php
include_once 'util/conectarBD.php';
include_once 'util/corpo.php';
$conn = conecta();
$id = $_GET ['id'];
$queryBusca = "SELECT * FROM `tb_candidato` WHERE id=$id";
$queryRespostaBusca = mysqli_query($conn, $queryBusca);
$queryRespostasBusca = mysqli_fetch_assoc($queryRespostaBusca);
cabeca();
descricaoPositivo();
?>



    <body>
        <div class="container">
            <div class="container-fluid">
                <center> <img src="img/logo.jpg" class="img-fluid" width="150" height="150"  /></center>
                <div class="card mt-4 text-center">
                    <h5 class="card-header">Informações do Candidato</h5>
                    <div class="card-body">
<!--                        <div class="alert alert-success" role="alert">
                            Usuario Cadastrado com sucesso!!
                        </div>-->
                        <b>Nome:</b>&nbsp;<?php echo $queryRespostasBusca['nome'] ?><br>
                        <b>Codigo do Candidato:</b>&nbsp;<b class="text-danger"><?php echo $queryRespostasBusca['codigo'] ?></b><br>
                        <b>Email Cadastrado:</b>&nbsp;<?php echo $queryRespostasBusca['email'] ?><br><br>

                        <div class="card-footer">
                            <a href="#" onclick="imprimir();" class="btn btn-success py-1">
                                <i class="material-icons">
                                    print
                                </i>&nbsp;Imprimir a ficha</a>
                        </div>
                        <a href="formulario.php" class="btn btn-success py-1">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function imprimir() {
                window.print();
            }
        </script>
    </body>

</html>