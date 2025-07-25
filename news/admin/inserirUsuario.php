<?php
session_start();
include ("../banco/conexao.php");

if(isset($_POST['cadastroUsuario'])) {
    $nomeUsuario = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $emailUsuario = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $loginUsuario = mysqli_real_escape_string($conexao, trim($_POST['login']));
    $senhaUsuario = mysqli_real_escape_string($conexao, trim($_POST['senha']));
}
?>