<?php
include_once '../util/conectarBD.php';
$conn = conecta();
$nome = $_POST['nome'];
$cep = $_POST ['cep'];
$cpf = $_POST ['cpf'];
$senha = $_POST ['senha'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone =$_POST['telefone'];
$id_cargo =$_POST['id_cargo'];
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

    echo 'O cadastro não foi realizado
        ';
    
}
