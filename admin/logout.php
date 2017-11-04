<?php require_once("loginLogica.php");
 logout();
 $_SESSION["success"] = "Deslogado com sucesso.";
 header("Location: login.php");
 die();