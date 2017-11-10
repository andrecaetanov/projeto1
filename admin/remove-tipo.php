<?php require_once("cabecalho.php");
      require_once("banco-tipo.php");
$id = $_POST['id'];
removeTipo($conexao, $id);
$_SESSION["success"] = "Tipo removido com sucesso.";
header("Location: tipo-lista.php");
die();
?>
