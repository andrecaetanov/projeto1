<?php
	session_start();
	require_once("conecta.php");
	require_once("consulta-banco.php");
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$data_lancamento = $_POST['data_lancamento'];
	$plataforma = $_POST['plataforma'];
	$tipo = $_POST['tipo'];
	if(array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}
	if(array_key_exists('disponivel', $_POST)) {
		$disponivel = "true";
	} else {
		$disponivel = "false";
	}


	
	if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $data_lancamento, $plataforma, $tipo, $usado, $disponivel)) {
		$_SESSION["success"] = "Produto alterado com sucesso!";
		header("Location: produto-admin.php");
	} else {
		$_SESSION["danger"] = "Não foi possível alterar o produto.";
		header("Location: produto-admin.php");
	}
	die();