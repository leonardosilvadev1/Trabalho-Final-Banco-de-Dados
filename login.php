<?php
session_start();
include('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT user_id, user_email FROM users WHERE user_email = '$email' AND user_password = MD5('$senha')";
$query_admin = "SELECT admin_id, admin_email FROM admin WHERE admin_email = '$email' AND admin_password = MD5('$senha')";
$result = mysqli_query($conexao, $query);
$result_admin = mysqli_query($conexao, $query_admin);

if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
if (!$result_admin) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

$row = mysqli_num_rows($result);
$row_admin = mysqli_num_rows($result_admin);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: painel.php');
    exit();
} else if($row_admin == 1) {
    $_SESSION['email'] = $email;
    header('Location: painel_admin.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
?>