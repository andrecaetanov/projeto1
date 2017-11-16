<?php require_once("cabecalho.php");
$plataforma = array("nome" => "");
?>

<h1 align="center">Cadastrar plataforma</h1>
<form action="adiciona-plataforma.php" method="post">
    <table class="table">

        <?php include("plataforma-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-success" type="submit">Cadastrar plataforma</button></td>
            <td><a href="plataforma-lista.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
