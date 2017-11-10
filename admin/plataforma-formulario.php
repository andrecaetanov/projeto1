<?php require_once("cabecalho.php");
$plataforma = array("nome" => "");
?>

<h1>Formulário de plataforma</h1>
<form action="adiciona-plataforma.php" method="post">
    <table class="table">

        <?php include("plataforma-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
