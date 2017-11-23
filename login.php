<html>
<head>
	<title>Yoshi's Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="shortcut icon" href="assets/img/logo/Yoshis_Store_-_Logo.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="icon" href="assets/img/Yoshis_Store_-_Logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
	error_reporting(E_ERROR | E_PARSE);
	require_once ("header.php"); 
	?>
	<div class="login container">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4 principal">
			<?php  
			require_once("loginLogica.php");
			if(isset($_SESSION["success"])) { ?>
			<p class="alert-success"><?= $_SESSION["success"]?></a>
				<?php 
				unset($_SESSION["success"]);
			} ?>
			<?php if(isset($_SESSION["danger"])) { ?>
			<p class="alert-danger"><?= $_SESSION["danger"]?></a>
				<?php 
				unset($_SESSION["danger"]);
			} ?>
			<?php if(usuarioEstaLogado()) { ?>
			<p class="text-success">Você esta logado como <?=usuarioLogado()?>. <br>
			<a href="admin/produto-admin.php">Acessar página de produtos.</a><br>
			<a href="logout.php">Deslogar</a></p>
			<?php } else { ?>
			<h2>Login</h2>
			<form action="loginAction.php" method="post">
				<table>
					<tr>
						<td>Login</td>
						<td><input class="form" type="text" name="login"></td>
					</tr>
					<tr>
						<td>Senha</td>
						<td><input class="form" type="password" name="senha"></td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-success">Login</button></td>
					</tr>
				</table>
			</form>
			<?php } ?>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
	<div class = "aumento-footer"></div>

	<?php
	require_once ("footer.php"); 
	?>
</body>

</html>