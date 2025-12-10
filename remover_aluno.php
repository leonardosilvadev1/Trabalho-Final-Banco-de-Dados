<?php
include('conexao.php');

if (!isset($_GET['id'])) {
    die("ID do aluno não informado.");
}

$id = $_GET['id'];
$query = "DELETE FROM dados WHERE id_aluno = $id";

if (mysqli_query($conexao, $query)) {
    $_SESSION['mensagem'] = "Removido com sucesso!";
    header("Location: dados.php");
    exit;
} else {
    $_SESSION['mensagem'] = "Erro ao remover aluno: " . mysqli_error($conexao);
}
?>