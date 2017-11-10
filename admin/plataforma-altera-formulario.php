<?php require_once("cabecalho.php");
      require_once("banco-plataforma.php");

$id = $_GET['id'];
$plataforma = buscaPlataforma($conexao, $id);
?>

<h1>Alterando plataforma</h1>
<form action="altera-plataforma.php" method="post">
    <input type="hidden" name="id" value="<?=$plataforma['id']?>" />
    <table class="table">

        <?php include("plataforma-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
