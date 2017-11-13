<?php require_once("cabecalho.php");
require_once("banco-plataforma.php");

$nome = $_POST["nome"];

if(inserePlataforma($conexao, $nome)) { 
	$_SESSION["success"] = "O plataforma $nome adicionado com sucesso!";
	header("Location: plataforma-lista.php");
} else {
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "O plataforma $nome não foi adicionado: <?= $msg ?>";
	header("Location: plataforma-lista.php");
}
 require_once("rodape.php"); ?>
