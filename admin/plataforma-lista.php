<?php require_once("cabecalho.php");
require_once("banco-plataforma.php"); ?>

<table class="table table-striped table-bordered">
	<a class="btn btn-primary" href="plataforma-formulario.php">Adicionar</a>
	<?php
	$plataformas = listaPlataformas($conexao);
	foreach($plataformas as $plataforma) :
		?>
		<tr>
			<td><?= $plataforma['id'] ?></td>
			<td><?= $plataforma['nome'] ?></td>
			<td><a class="btn btn-primary" href="plataforma-altera-formulario.php?id=<?=$plataforma['id']?>">alterar</a></td>
			<td>
				<form action="remove-plataforma.php" method="post">
					<input type="hidden" name="id" value="<?=$plataforma['id']?>" />
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
		<?php
	endforeach
	?>
</table>

<?php require_once("rodape.php"); ?>
