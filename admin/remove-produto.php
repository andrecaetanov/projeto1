<?php 
session_start();
require_once("conecta.php");
require_once("consulta-banco.php");

$id = $_POST['id'];

$imagem = getImagem($conexao, $id);

if(file_exists ($imagem['imagem'])) {
	unlink($imagem['imagem']);
}

if(removeProduto($conexao, $id)) {
	$_SESSION["success"] = "Produto excluido com sucesso!";
	header("Location: produto-admin.php");
} else {
	$_SESSION["danger"] = "Não foi possível excluir este produto.";
	header("Location: produto-admin.php");
}

die();