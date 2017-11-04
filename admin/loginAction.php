<?php require_once("loginLogica.php");
$usuario = buscaUsuario($conexao, $_POST["login"], $_POST["senha"]);
if ($usuario == null)
{
	$_SESSION["danger"] = "Usuário ou senha inválida.";
	header ("Location: login.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["login"]);
	header ("Location: login.php");
}
die();