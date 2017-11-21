<?php require_once("cabecalho.php");
require_once("banco-tipo.php"); ?>
<h1 align="center" class="titulo">Tipos</h1>
<div class="container btn-cadastrar">
	<a href="tipo-formulario.php"><button class="btn btn-success">Cadastrar tipo</button></a>
</div>
<div class="panel-body container">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover lista-produto">
			<thead>
				<tr >
					<th align=center><center>ID</center></th>
					<th align=center><center>Nome</center></th>
					<th colspan="2" ><center>Ação</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$tipos = listaTipos($conexao);
				foreach($tipos as $tipo) :
					$id = $tipo['id'];
					?>
					<tr>
						<td><?= $tipo['id'] ?></td>
						<td><?= $tipo['nome'] ?></td>
						<td>
							<?php $deletar = "deletar".$id; ?>
							<center><a href="#<?= $deletar?>" class="glyphicon glyphicon-trash excluir" data-toggle="modal"  ></a></center>
						</td>
						<td>
							<form action="tipo-altera-formulario.php" method="post">
								<input type="hidden" name="id" value="<?= $tipo['id'] ?>">
								<center><input type="image" name="editar" class="glyphicon glyphicon-pencil editar" value=" " onClick="this.form.submit()"></center>
							</form>
						</td>
							<div id="<?=$deletar?>" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Atenção</h4>
										</div>
										<div class="modal-body">
											<p>Realmente quer deletar este tipo - '<?= $tipo['nome']?>'?</p>
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
						</tr>
						<?php
					endforeach
					?>
				</tbody>

			</table>
		</div>
	</div>
</div>

<?php require_once("rodape.php"); ?>
