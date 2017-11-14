<?php 
require_once("mostra-alerta.php");
require_once("conecta.php");
require_once("consulta-banco.php");

$plataformas = listaPlataforma($conexao);
$tipos = listaTipo($conexao);

$id = $_POST['id'];
$produto = getProduto($conexao, $id);
$usado = $produto['usado'] ? "checked='checked'" : "";
$disponivel = $produto['disponivel'] ? "checked='checked'" : "";

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

	<title>Editar Produto</title>
</head>
<body>
	
		<?php require_once("header.php"); ?>
	
	<div class="container">
		<div class="principal-atualiza-produto">
			<div class="titulo">
				<h1>Atualizar Produto</h1>
				<?php mostraAlerta("danger"); ?>
			</div>
			<div class="container formulario">
					<form action="atualiza-produto.php" class="form" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$produto['id']?>">	

							<?php require_once("formulario-base-produto.php"); ?>

						<button class="btn btn-success btn-enviar">Alterar produto</button>
						<a href="produto-admin.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a>
					</form>
				
			</div>
			
		</div>
	</div>
<footer>
	<?php require_once("footer.php"); ?>
</footer>
</body>
</html>