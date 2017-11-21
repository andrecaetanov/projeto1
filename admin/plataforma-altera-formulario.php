<?php require_once("cabecalho.php");
      require_once("banco-plataforma.php");

$id = $_POST['id'];
$plataforma = buscaPlataforma($conexao, $id);
?>

<h1>Alterando plataforma</h1>
<form action="altera-plataforma.php" method="post">
    <input type="hidden" name="id" value="<?=$plataforma['id']?>" />
    <table class="table">

        <?php include("plataforma-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-success" type="submit">Alterar Plataforma</button></td>
			<td><a href="plataforma-lista.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
