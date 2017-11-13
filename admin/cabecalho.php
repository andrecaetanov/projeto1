<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link href="assets/bootstrap-3.3.7-dist/css/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/bootstrap-3.3.7-dist/css/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/bootstrap-3.3.7-dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/bootstrap-3.3.7-dist/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
</head>
<body>
    <?php require_once("header.php"); ?>

    <div class="container">

    <div>

        <?php
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
