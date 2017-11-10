<?php require_once("cabecalho.php");
      require_once("banco-plataforma.php");
$id = $_POST['id'];
removePlataforma($conexao, $id);
$_SESSION["success"] = "plataforma removido com sucesso.";
header("Location: plataforma-lista.php");
die();
?>
