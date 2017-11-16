<?php require_once("cabecalho.php");
require_once("banco-plataforma.php"); ?>
<h1 align="center" class="titulo">Plataformas</h1>
<div class="container btn-cadastrar">
	<a href="plataforma-formulario.php"><button class="btn btn-success">Cadastrar plataforma</button></a>
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
				$plataformas = listaPlataformas($conexao);
				foreach($plataformas as $plataforma) :
					$id = $plataforma['id'];
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
							<?php $deletar = "deletar".$id; ?>
							<center><a href="#<?= $deletar?>" class="glyphicon glyphicon-trash excluir" data-toggle="modal"  ></a></center>
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
										<p>Realmente quer deletar este plataforma - '<?= $plataforma['nome']?>'?</p>
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
