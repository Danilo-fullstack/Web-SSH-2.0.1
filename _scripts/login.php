<?php
session_start();
include("conexao.php");

$user = mysqli_real_escape_string($conexao, trim($_POST['user']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

if(empty($user) || empty($senha)) {
    header('Location: ../login.php');
    exit();
}

$sql = "select nome from clientes where usuario = '$user' and senha = md5('$senha')";
$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);

if($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
    header('Location: ../painel.php');
    exit();
}

$_SESSION['nao_autenticado'] = true;
header('Location: ../login.php');
exit();
?>