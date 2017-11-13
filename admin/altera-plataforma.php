<?php require_once("cabecalho.php");
require_once("banco-plataforma.php"); 
$id = $_POST["id"];
$nome = $_POST["nome"];
if(alteraPlataforma($conexao, $id, $nome)) {
	$_SESSION["success"] = "O plataforma $nome alterado com sucesso!";
	header("Location: plataforma-lista.php");
} else {
	$msg = mysqli_error($conexao);
	$_SESSION["danger"] = "O plataforma $nome não foi alterado: <?= $msg ?>";
	header("Location: plataforma-lista.php");
}
require_once("rodape.php"); ?>
