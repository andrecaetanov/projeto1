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

	$imagem = getImagem($conexao, $id);
	$caminho_completo = $imagem['imagem'];
	$dir_deleta_imagem = '../' . $imagem['imagem'];
	if(isset($_FILES['pic']))
	{
		
		$ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
		if ($ext) {
			if(file_exists ($dir_deleta_imagem)) {
				unlink($dir_deleta_imagem);
			}
			$new_name = time() . $ext; //Definindo um novo nome para o arquivo
			$dir = 'assets/img/'; //Diretório para uploads
			$caminho_completo = $dir . $new_name;
			$dir_imagem = '../' . $caminho_completo;
			if(file_exists ($dir_imagem)) {
				unlink($dir_imagem);
			}
			move_uploaded_file($_FILES['pic']['tmp_name'], $dir_imagem); //Fazer upload do arquivo
		}
		
		
	} 
	


	
	if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $data_lancamento, $plataforma, $tipo, $usado, $disponivel, $caminho_completo)) {
		$_SESSION["success"] = "Produto alterado com sucesso!";
		header("Location: produto-admin.php");
	} else {
		$msg = mysqli_error($conexao);
		$errno = mysqli_errno($conexao);
		$_SESSION["danger"] = "Não foi possível alterar o produto. {$msg} {$errno}";
		header("Location: produto-admin.php");
	}
	die();