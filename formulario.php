<?php
include_once 'selects/selects.php';
include_once 'util/corpo.php';
//$alert = $_GET['alert'];
cabeca();
descricaoForm();
?>
<!--<div id="divAlerta" style="visibility:<?php echo $alert == 1 ? "visible" : "hidden"; ?>">
    <div id="alerta" class="alert alert-danger" role="alert">
        Candidato nÃ£o pÃ´de ser cadastrado!
    </div>
</div>-->
<body onload="mostraAlerta();" class="mt-3">
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
                <input type="text" name="cpf" placeholder="CPF" id="CPF" maxlength="14" class="form-control" onblur="TestaCPF(this);" onkeypress="mascara(this)">
            </div>
            <div class="form-group">
                <input type="text" placeholder="CEP" id="cep" name="cep" class="form-control " onkeypress="mascara(this)" maxlength="9" pattern="[0-9\-]+$">
            </div>
            <div class="form-group">
                <input type="text" name="endereco" placeholder="Endereço" readonly=""id="rua" class="form-control">
            </div>


            <?php
            echo selectCargo();
            ?>


            <div class="form-group">
                <input type="text" placeholder="Telefone" name="telefone" id="Telefone" class="form-control" onkeypress="mascara(this)" maxlength="14">
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

<?php rodape()?>