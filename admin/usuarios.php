<!DOCTYPE html>

<?php 
  include("../conexao.php");
  include("../funcoes-banco.php");

  $usuarios = getUsuarios($conexao);

  $removido = 0;
  if(isset($_GET['removido']) && $_GET['removido'] == 1 ){
    $removido = 1;
  }

  $cadastrado = 0;
  if(isset($_GET['cadastrado']) && $_GET['cadastrado'] == 1 ){
    $cadastrado = 1;
  }

  $alterado = 0;
  if(isset($_GET['alterado']) && $_GET['alterado'] == 1 ){
    $alterado = 1;
  }

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/usuarios.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
</head>


<body>
<?php include('header.php')?>
<h1 align="center">Usuários</h1>

<?php if($removido == 1) { ?>
  <p class = "alert-success container" align="center">Usuario removido com sucesso</p>
<?php } ?>

<?php if($cadastrado == 1) { ?>
  <p class = "alert-success container" align="center">Usuario cadastrado com sucesso</p>
<?php } ?>

<?php if($alterado == 1) { ?>
  <p class = "alert-success container" align="center">Usuario alterado com sucesso</p>
<?php } ?>

<button class="botao-cadastrar btn btn-success" onclick="location.href = 'form-usuario.php'">Cadastrar Usuario</button>

<div class="panel-body container">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Login</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($usuarios as $usuario) { ?>
        <tr>
          <td><?=$usuario['id']?></td>
          <td><?=$usuario['login']?></td>
          <td>
            <a href="form-altera-usuario.php?id=<?=$usuario['id']?>"><i class="fa fa-pencil fa-lg"></i></a>
          </td>
          <td>
					<center><a href="" class="glyphicon glyphicon-trash excluir" data-toggle="modal" data-target="#myModal" style="color: red" ></a></center>
					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Atenção</h4>
								</div>
								<div class="modal-body">
									<p>Realmente quer deletar este usuario?</p>
									<form action="deleta-usuario.php" method="post">
										<input type="hidden" name="id" value="<?= $usuario['id'] ?>">



									</div>
									<div class="modal-footer">
										<button class="btn btn-danger">Sim</button>
									</form>
									<button type="submit" class="btn btn-primary" data-dismiss="modal">Fechar</button>

								</div>
							</div>

						</div>
					</div>
				</td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?php include("footer.php"); ?>
</body>



</html>