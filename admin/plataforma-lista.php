<?php require_once("cabecalho.php");
require_once("banco-plataforma.php"); ?>
<h1 class="titulo">Plataformas</h1>
<table class="table table-striped table-bordered table-hover">
	<a class="btn btn-primary" href="plataforma-formulario.php">Adicionar</a>
	<thead>
		<tr >
			<th align=center><center>ID</center></th>
			<th align=center><center>Nome</center></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$plataformas = listaPlataformas($conexao);
		foreach($plataformas as $plataforma) :
			?>
			<tr>
				<td><?= $plataforma['id'] ?></td>
				<td><?= $plataforma['nome'] ?></td>
				<td>
					<form action="plataforma-altera-formulario.php" method="post">
						<input type="hidden" name="id" value="<?= $plataforma['id'] ?>">
						<center><input type="image" name="editar" class="glyphicon glyphicon-pencil editar" value=" " onClick="this.form.submit()"></center>
					</form>
				</td>
				<td>
					<center><a href="" class="glyphicon glyphicon-trash excluir" data-toggle="modal" data-target="#myModal" ></a></center>
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Atenção</h4>
								</div>
								<div class="modal-body">
									<p>Realmente quer deletar esta plataforma?</p>
									<form action="remove-plataforma.php" method="post">
										<input type="hidden" name="id" value="<?= $plataforma['id'] ?>">



									</div>
									<div class="modal-footer">
										<button class="btn btn-danger">Sim</button>
									</form>
									<button type="submit" class="btn btn-primary" data-dismiss="modal">Fechar</button>

								</div>
							</div>

						</div>
					</div>
				</td>
			</tr>
			<?php
		endforeach
		?>
	</tbody>
</table>

<?php require_once("rodape.php"); ?>
