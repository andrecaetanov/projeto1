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
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/cadastra-produto.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
</head>
<body>
	<header>
		<?php require_once("header.php"); ?>
	</header>
	<div class="container">
		<div class="principal-cadastra-produto">
			<h1 class="titulo">Cadastrar produtos</h1>
			<?php mostraAlerta("danger"); ?>
			<div class="container formulario">
				
					<form action="adiciona-produto.php" class="form" method="POST" enctype="multipart/form-data">
						<?php require_once("formulario-base-produto.php"); ?>
						<button class="btn btn-success btn-enviar">Cadastrar produto</button>
						<a href="produto-admin.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a>
					</form>
			</div>
		</div>
	</div>

	<?php require_once("footer.php"); ?>
</body>
</html>