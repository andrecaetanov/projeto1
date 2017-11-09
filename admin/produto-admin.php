<?php 
require_once("mostra-alerta.php"); 
require_once("conecta.php");
require_once("consulta-banco.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/produto-admin.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.css">
	<!-- DataTables CSS -->
    <link href="assets/bootstrap-3.3.7-dist/css/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/bootstrap-3.3.7-dist/css/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/bootstrap-3.3.7-dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/bootstrap-3.3.7-dist/css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="principal-produto-admin">
            <div class="titulo">
    			<h1 class="titulo">Produtos</h1>
    			<?php 
    			mostraAlerta("success");
    			mostraAlerta("danger");
    			?>
            </div>
			<div class="container btn-cadastrar">
				<a href="cadastra-produto.php"><button class="btn btn-success">Cadastrar produto</button></a>
			</div>
			<div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover lista-produto">
                        <thead>
                            <tr >
                                <th align=center><center>ID</center></th>
                                <th align=center><center>Nome</center></th>
                                <th align=center><center>Preço</center></th>
                                <th align=center><center>Descrição</center></th>
                                <th align=center><center>Data de Lançamento</center></th>
                                <th align=center><center>Plataforma</center></th>
                                <th align=center><center>Tipo</center></th>
                                <th align=center><center>Usado</center></th>
                                <th align=center><center>Disponível</center></th>
                        		<th colspan="2" ><center>Ação</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
                        		$produtos = listaProdutos($conexao);
                        		foreach ($produtos as $produto) :
                        	?>
                            <tr>
                                <td><?= $produto['id'] ?></td>
                                <td><?= $produto['nome'] ?></td>
                                <td><?= $produto['preco'] ?></td>
                                <td><?= substr($produto['descricao'], 0, 20) ?></td>
                                <td><?= $produto['data_lancamento'] ?></td>
                                <td><?= $produto['plataforma_nome'] ?></td>
                                <td><?= $produto['tipo_nome'] ?></td>
                                <td><?= $produto['usado'] ?></td>
                                <td><?= $produto['disponivel'] ?></td>
                                <td>
                                    
                                        <center><a href="" class="glyphicon glyphicon-trash excluir" data-toggle="modal" data-target="#myModal" ></a></center>
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
                                                <p>Realmente quer deletar este produto?</p>
                                                <form action="remove-produto.php" method="post">
                                                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                                    
                                                
                                                
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
                                <td>
                                    <form action="editar-produto.php" method="post">
                                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                        <center><input type="image" name="editar" class="glyphicon glyphicon-pencil editar" value=" " onClick="this.form.submit()"></center>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
		</div>
	</div>

    <script src="../assets/js/jquery-1.9.1.js"></script>
    <script src="../assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tabela.js"></script>

</body>
</html>