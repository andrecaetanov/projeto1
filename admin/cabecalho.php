<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
    <div>

    <div>

        <?php
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
