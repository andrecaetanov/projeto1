<?php require_once("cabecalho.php");
$tipo = array("nome" => "");
?>

<h1 align="center">Cadastrar tipo</h1>
<form action="adiciona-tipo.php" method="post">
    <table class="table">

        <?php include("tipo-formulario-base.php"); ?>


    </table>
        
    <button class="btn btn-success" type="submit">Cadastrar tipo</button>
    <a href="tipo-lista.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a>
        
</form>

<?php require_once("rodape.php"); ?>
