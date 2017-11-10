<?php 

include("../conexao.php");
include("../funcoes-banco.php");

$login = $_POST['login'];
$senha = md5($_POST['senha']);
$id = $_POST['id'];

alteraUsuario($conexao, $login, $senha, $id);

header("Location: usuarios.php?alterado=1");
die();