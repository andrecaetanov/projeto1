<?php 
require_once("mostra-alerta.php");
require_once("conecta.php");
require_once("consulta-banco.php");

$produto = array("nome" => "", "preco" => "", "data_lancamento" => "", "descricao" => "", "plataforma_id" => "1", "tipo_id" => "1");
$plataformas = listaPlataforma($conexao);
$tipos = listaTipo($conexao);
$usado = "";
$disponivel = "checked='checked'";

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/cadastra-produto.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
	<link rel="icon" href="assets/img/Yoshis_Store_-_Logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <title>Yoshi's Store</title>
</head>
<body>
	
	<?php require_once("header.php"); ?>
	<div class="container conteudo">
		<h2 align="center">Cadastrar produtos</h2>
				
			<?php mostraAlerta("danger"); ?>
				
			<form action="adiciona-produto.php" class="form" method="POST" enctype="multipart/form-data">
				
				<?php require_once("formulario-base-produto.php"); ?>

				<button class="btn btn-success btn-enviar">Cadastrar produto</button>
				<a href="produto-admin.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a>
			</form>
		
	</div>
	
	<?php require_once("footer.php"); ?>
	
</body>
</html>