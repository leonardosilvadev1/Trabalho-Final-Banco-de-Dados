<?php 
session_start();
include('conexao.php');

if(empty($_POST['nomeAluno']) || empty($_POST['data_nasc']) || empty($_POST['rua']) || empty($_POST['numero']) || empty($_POST['bairro']) || empty($_POST['cep']) || empty($_POST['nomeResponsavel']) || empty($_POST['tipoResponsavel']) || empty($_POST['curso'])){
    $_SESSION['mensagem'] = "Campos vazios! Preencha todos os campos.";
    header('Location: form.php');
    exit();
}

$nomeAluno = $_POST['nomeAluno'];
$data_nasc = $_POST['data_nasc'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$nomeResponsavel = $_POST['nomeResponsavel'];
$tipoResponsavel = $_POST['tipoResponsavel'];
$curso = $_POST['curso'];

$query = "INSERT INTO dados (aluno_name, data_nasc, rua, numero, bairro, cep, nome_responsavel, tipo_responsavel, curso) VALUES ('$nomeAluno', '$data_nasc', '$rua', '$numero', '$bairro', '$cep', '$nomeResponsavel', '$tipoResponsavel', '$curso')";

if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = "Dados enviados com sucesso!";
    header('Location: form.php');
} else {
    $_SESSION['mensagem'] = "Erro no envio dos dados, tente novamente! " . mysqli_error($conexao);
    header('Location: form.php');
    exit();
}
?>