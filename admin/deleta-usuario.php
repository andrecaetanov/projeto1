<?php

include("../conexao.php");
include("../funcoes-banco.php");


$id = $_POST['id'];

removeUsuario($conexao, $id);

header("Location: usuarios.php?removido=1");
die();