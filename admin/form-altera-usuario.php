<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/form-usuario.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
  <link rel="icon" href="assets/img/Yoshis_Store_-_Logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <title>Yoshi's Store</title>
</head>

<?php

  include("../conexao.php");
  include("../funcoes-banco.php");

  $id = $_POST['id'];
  $usuario = getUsuarioPeloId($conexao, $id);

  

?>
<body>

  <?php include("header.php"); ?>
  <div class="container">
    <h1>Alterar Usuario</h1>

    <form action="altera-usuario.php" method="post">
    <input type="hidden" name="id" value="<?=$usuario['id']?>">
        <table class="table">
          <tr>
              <td>Login</td>
              <td><input class="form-control" type="text" name="login" value="<?=$usuario['login']?>"></td>
          </tr>
          <tr>
              <td>Senha (Encriptada)</td>
              <td><input class="form-control" type="password" name="senha" value="<?=$usuario['senha']?>"></td>
          </tr>
      </table>
      <button class="btn btn-success">Alterar usuário</button>
      <a href="usuarios.php"><input type="button" class="btn btn-primary" name="voltar" value="Voltar"></a>
      </form>
    </div>

    <?php include("footer.php"); ?>

</body>
</html>