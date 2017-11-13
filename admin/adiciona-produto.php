<?php
	session_start();
	require_once("conecta.php");
	require_once("consulta-banco.php");
	
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
	
	if(isset($_FILES['pic']))
	{
		$ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
		$new_name = time() . $ext; //Definindo um novo nome para o arquivo
		$dir = '../assets/img/'; //Diretório para uploads
		$caminho_completo = $dir . $new_name;
		if(file_exists ($caminho_completo)) {
			unlink($caminho_completo);
		}
		move_uploaded_file($_FILES['pic']['tmp_name'], $caminho_completo); //Fazer upload do arquivo
	} 
	
	if(insereProduto($conexao, $nome, $preco, $descricao, $data_lancamento, $plataforma, $tipo, $usado, $disponivel, $caminho_completo)) {
		$_SESSION["success"] = "Produto cadastrado com sucesso!";
		header("Location: produto-admin.php");
	} else {
		$_SESSION["danger"] = "Não foi possível cadastrar o produto.";
		header("Location: cadastra-produto.php");
	}
	die();