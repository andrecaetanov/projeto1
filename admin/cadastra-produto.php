<?php 
require_once("mostra-alerta.php");
require_once("conecta.php");
require_once("consulta-banco.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/cadastra-produto.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="principal-cadastra-produto">
			<h1 class="titulo">Cadastrar produtos</h1>
			<?php mostraAlerta("danger"); ?>
			<div class="container formulario">
				
					<form action="adiciona-produto.php" class="form" method="POST" enctype="multipart/form-data">
						
							<div class="row row1">
								<div class="form-group col-sm-6">
									<label>Nome</label>
									<input type="text" name="nome" class="form-control" required>
								</div>
								<div class="form-group col-sm-2">
									<label>Preco</label>
									<input type="text" name="preco" class="form-control" required>
								</div>
								<div class="form-group col-sm-4">
									<label>Data de lançamento</label>
									<input type="text" name="data_lancamento" class="form-control data_lancamento">
								</div>
							</div>
							<div class="row row2">
								<div class="form-group descricao">
									<label>Descricao</label>
									<textarea name="descricao" class="form-control desc" rows="6"></textarea>
								</div>
								
							</div>
							
							<div class="row row3">
								<div class="row listagem">
									<div class="form-group form-select">
										<label>Plataforma</label>
										<select name="plataforma" class="form-control select-plataforma">
											<?php $plataformas = listaPlataforma($conexao);
					              			foreach ($plataformas as $plataforma) : ?>
											<option value="<?= $plataforma['id']?>"><?= $plataforma['nome'] ?></option>
											<?php endforeach ?>
										</select>
									</div>

									<div class="form-group form-select">
										<label>Tipo</label>
										<select name="tipo" class="form-control select-tipo">
											<?php $tipos = listaTipo($conexao);
					              			foreach ($tipos as $tipo) : ?>
											<option value="<?= $tipo['id']?>"><?= $tipo['nome'] ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="row form-checkbox">
									<div class="form-group form-check form-check-inline">
										<label>Usado</label>
										<input type="checkbox" name="usado" class="checkbox">
									</div>
									<div class="form-group">
										<label>Disponível</label>
										<input type="checkbox" name="disponivel" class="checkbox" checked>
									</div>
								</div>
								<div class="row form-imagem">
									<input type="file" name="pic" accept="image/*">
								</div>
							</div>
						<button class="btn btn-success btn-enviar">Cadastrar produto</button>
						<a href="produto-admin.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a>
					</form>
			</div>
		</div>
	</div>
</body>
</html>