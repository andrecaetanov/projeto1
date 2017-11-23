<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/produto-admin.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link href="assets/bootstrap-3.3.7-dist/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="icon" href="assets/img/Yoshis_Store_-_Logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <title>Yoshi's Store</title>
</head>
<body>
    <?php include("header.php") ?>
    <div class="container">

    <div>

        <?php
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
