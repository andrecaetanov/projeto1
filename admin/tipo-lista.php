<?php require_once("cabecalho.php");
require_once("banco-tipo.php"); ?>
<h1 class="titulo">Tipos</h1>
<table class="table table-striped table-bordered table-hover">
	<a class="btn btn-primary" href="tipo-formulario.php">Adicionar</a>
	<thead>
		<tr >
			<th align=center><center>ID</center></th>
			<th align=center><center>Nome</center></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$tipos = listaTipos($conexao);
		foreach($tipos as $tipo) :
			?>
			<tr>
				<td><?= $tipo['id'] ?></td>
				<td><?= $tipo['nome'] ?></td>
				<td>
					<form action="tipo-altera-formulario.php" method="post">
						<input type="hidden" name="id" value="<?= $tipo['id'] ?>">
						<center><input type="image" name="editar" class="glyphicon glyphicon-pencil editar" value=" " onClick="this.form.submit()"></center>
					</form></td>
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
										<p>Realmente quer deletar este tipo?</p>
										<form action="remove-tipo.php" method="post">
											<input type="hidden" name="id" value="<?= $tipo['id'] ?>">



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
