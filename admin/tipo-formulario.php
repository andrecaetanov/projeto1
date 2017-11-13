<?php require_once("cabecalho.php");
$tipo = array("nome" => "");
?>

<h1>Formulário de tipo</h1>
<form action="adiciona-tipo.php" method="post">
    <table class="table">

        <?php include("tipo-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
