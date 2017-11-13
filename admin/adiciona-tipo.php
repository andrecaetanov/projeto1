<?php require_once("cabecalho.php");
require_once("banco-tipo.php");

$nome = $_POST["nome"];

if(insereTipo($conexao, $nome)) { 
	$_SESSION["success"] = "O tipo $nome adicionado com sucesso!";
	header("Location: tipo-lista.php");
} else {
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "O tipo $nome não foi adicionado: <?= $msg ?>";
	header("Location: tipo-lista.php");
}
 require_once("rodape.php"); ?>
