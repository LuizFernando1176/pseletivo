<?php
include_once '../util/conectarBD.php';
include_once '../util/antiInjection.php';

$conn = conecta();
$nome = anti_injection($_POST['nome']);
$cep = anti_injection($_POST ['cep']);
$cpf = anti_injection($_POST ['cpf']);
$senha = anti_injection($_POST ['senha']);
$email = anti_injection($_POST['email']);
$endereco = anti_injection($_POST['endereco']);
$telefone = anti_injection($_POST['telefone']);
$id_cargo = anti_injection($_POST['id_cargo']);
$codigo = date('His').$id_cargo;

echo $codigo;

$queryInserirCandidato = "INSERT INTO `tb_candidato`( `nome`, `cep`, `cpf`, `senha`, `email`, `codigo`, `endereco`, `telefone`, `id_cargo`) VALUES ('$nome','$cep','$cpf','$senha','$email','$codigo','$endereco','$telefone','$id_cargo')";
$queryBuscaCandidato = mysqli_query($conn, $queryInserirCandidato) ;



if($queryBuscaCandidato != false){
    $queryBuscaUltimoCandidato = "SELECT MAX(id) as ultimo FROM tb_candidato;";
    $queryrespostaUltimoCandidato = mysqli_query($conn, $queryBuscaUltimoCandidato) ;
    while($resposta = mysqli_fetch_assoc($queryrespostaUltimoCandidato)){
        $id = $resposta['ultimo'];
    }
    header('Location:../EnviadorEmail.php?id='.$id.'&nome='.$nome.'&email='.$email.'&codigo='.$codigo);
    
} else {
    header("Location: ../formulario.php?alert=1");
}
