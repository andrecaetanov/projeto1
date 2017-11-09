<!DOCTYPE html>

<?php 
  include("../conexao.php");
  include("../funcoes-banco.php");

  $usuarios = getUsuarios($conexao);

  $removido = 0;
  if(isset($_GET['removido']) && $_GET['removido'] == 1 ){
    $removido = 1;
  }

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/usuarios.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<h1 align="center">Usuarios</h1>

<?php if($removido == 1) { ?>
  <p class = "alert-success container" align="center">Usuario removido com sucesso</p>
<?php } ?>

<button class="botao-cadastrar btn btn-success" onclick="location.href = 'form-usuario.php'">Cadastrar Usuario</button>

<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Login</th>
          <th>Senha (isso aqui vai sair?)</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($usuarios as $usuario) { ?>
        <tr>
          <td><?=$usuario['id']?></td>
          <td><?=$usuario['login']?></td>
          <td><?=$usuario['senha']?></td>
          <td>
            <a href="form-usuario.php"><i class="fa fa-pencil fa-lg"></i></a>
          </td>
          <td>
            <a href="deleta-usuario.php?id=<?=$usuario['id']?>"><i class="fa fa-trash fa-lg" style="color:red"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</div>
 

</body>



</html>