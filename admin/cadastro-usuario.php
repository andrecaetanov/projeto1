<?php

include("../conexao.php");
include("../funcoes-banco.php");


$login = $_POST['login'];
$senha = md5($_POST['senha']);

$resultado = insereUsuario($conexao, $login, $senha);

header("Location: usuarios.php?cadastrado=1");
die();