<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/form-usuario.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
  <title>Novo Usuario</title>
</head>

<body>

  <?php include("header.php")?>
  <div class="container">
    <h1>Novo Usuario</h1>

    <form action="cadastro-usuario.php" method="post">
      <table class="table">
          <tr>
              <td>Login</td>
              <td><input class="form-control" type="text" name="login"></td>
          </tr>
          <tr>
              <td>Senha</td>
              <td><input class="form-control" type="password" name="senha"></td>
          </tr>
          <tr>
              <td><button class="btn btn-primary">Cadastrar</td>
          </tr>
      </table>
      </form>
    </div>

    <?php include("footer.php")?>
</body>
</html>