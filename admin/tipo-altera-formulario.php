<?php require_once("cabecalho.php");
      require_once("banco-tipo.php");

$id = $_GET['id'];
$tipo = buscaTipo($conexao, $id);
?>

<h1>Alterando tipo</h1>
<form action="altera-tipo.php" method="post">
    <input type="hidden" name="id" value="<?=$tipo['id']?>" />
    <table class="table">

        <?php include("tipo-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
