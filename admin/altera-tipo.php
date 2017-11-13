<?php require_once("cabecalho.php");
require_once("banco-tipo.php"); 
$id = $_POST["id"];
$nome = $_POST["nome"];
if(alteraTipo($conexao, $id, $nome)) {
	$_SESSION["success"] = "O tipo $nome alterado com sucesso!";
	header("Location: tipo-lista.php");
} else {
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "O tipo $nome não foi alterado: <?= $msg ?>";
	header("Location: tipo-lista.php");
}
require_once("rodape.php"); ?>
