<?php require_once("cabecalho.php");
      require_once("banco-tipo.php");

$id = $_POST['id'];
$tipo = buscaTipo($conexao, $id);
?>

<h1>Alterando tipo</h1>
<form action="altera-tipo.php" method="post">
    <input type="hidden" name="id" value="<?=$tipo['id']?>" />
    <table class="table">

        <?php include("tipo-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-success" type="submit">Alterar Tipo</button></td>
			<td><a href="tipo-lista.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
