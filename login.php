
<html>
<head>
	<meta charset="utf-8">
	<title>Minha Loja</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">

</head>
<body>
	<div class="col-sm-4"></div>
	<div class="container col-sm-8">
		<div class="principal">
			<?php error_reporting(E_ALL ^ E_NOTICE); 
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
				<p class="text-success">Você esta logado como <?=usuarioLogado()?>.<a href="logout.php">Deslogar</a></p>
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
	</div>


</body>

</html>