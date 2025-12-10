<?php 
session_start();
include('conexao.php');

$id = $_POST['id_aluno'];
$aluno_name = $_POST['aluno_name'];
$data_nasc = $_POST['data_nasc'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$nome_responsavel = $_POST['nome_responsavel'];
$tipo_responsavel = $_POST['tipo_responsavel'];
$curso = $_POST['curso'];

$query = "UPDATE dados SET aluno_name='$aluno_name', data_nasc='$data_nasc', rua='$rua', numero='$numero', bairro='$bairro', cep='$cep', nome_responsavel='$nome_responsavel', tipo_responsavel='$tipo_responsavel', curso='$curso' WHERE id_aluno = $id";

if (mysqli_query($conexao, $query)){
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header("Location: dados.php");
    exit();
}else{
    $_SESSION['mensagem'] =  "Erro ao atualizar, " . mysqli_error($conexao);
    header("Location: editar_aluno.php");
    exit();
}
?>