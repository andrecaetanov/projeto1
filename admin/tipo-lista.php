<?php require_once("cabecalho.php");
require_once("banco-tipo.php"); ?>

<table class="table table-striped table-bordered">
	<a class="btn btn-primary" href="tipo-formulario.php">Adicionar</a>
	<?php
	$tipos = listaTipos($conexao);
	foreach($tipos as $tipo) :
		?>
		<tr>
			<td><?= $tipo['id'] ?></td>
			<td><?= $tipo['nome'] ?></td>
			<td><a class="btn btn-primary" href="tipo-altera-formulario.php?id=<?=$tipo['id']?>">alterar</a></td>
			<td>
				<form action="remove-tipo.php" method="post">
					<input type="hidden" name="id" value="<?=$tipo['id']?>" />
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
		<?php
	endforeach
	?>
</table>

<?php require_once("rodape.php"); ?>
