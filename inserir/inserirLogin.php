<?php
include_once '../util/antiInjection.php';
include_once '../util/config.php';
include_once '../util/conectarBD.php';
session_start();
$cpf = anti_injection($_POST ['cpf']);
$senha = anti_injection($_POST ['senha']);
$con = conecta();
$queryLogin = "SELECT * FROM `tb_candidato` WHERE cpf like '$cpf' and senha like '$senha' ";
$select = mysqli_query($con, $queryLogin);
if (mysqli_num_rows($select) > 0) {
    $resultados = mysqli_fetch_assoc($select);
    $cpf = $resultados['cpf'];
    $nome = $resultados['nome'];
    $id = $resultados['id'];
    $senha = $resultados['senha'];
    $usuarioLogadoParaSalvarNaSessao = '{
	  "nome":"' . $cpf . '",
	  "nome":"' . $nome . '",
          
	}';
    $_SESSION['gmUsuarioLogado'] = $usuarioLogadoParaSalvarNaSessao;
    $_SESSION ['nome'] = $nome;
    $_SESSION ['cpf'] = $cpf;
    $_SESSION ['senha'] = $senha;
    $_SESSION ['id'] = $id;
    $_SESSION["sessiontime"] = time() + 60;
    header('Location:../formulario.php');
} else {
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['cpf']);
    header('Location: ../sair.php');
}