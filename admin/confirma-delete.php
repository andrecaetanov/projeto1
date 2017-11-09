<?php 
require_once("conecta.php");
require_once("consulta-banco.php");

$id = $_POST['id'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/confirma-delete.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Tem certeza que deseja excluir este produto?</h1>
		<form method="post" action="remove-produto.php">
			<input type="hidden" name="id" value="<?= $id?>">
			<button class="btn btn-danger">Sim</button>
			<a href="produto-admin.php"><input type="button" class="btn btn-primary voltar" name="voltar" value="Voltar"></a>
		</form>
	</div>
</body>
</html>