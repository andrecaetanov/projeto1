<?php 
require_once("mostra-alerta.php"); 
require_once("conecta.php");
require_once("consulta-banco.php");
?>

<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="icon" href="assets/img/Yoshis_Store_-_Logo.png">
    <title>Yoshi's Store</title>

</head>
<body>
    
        <?php require_once("header.php"); ?>
    <h1 align="center">Produtos</h1>
    <div align="center">                
        <?php 
        mostraAlerta("success");
        mostraAlerta("danger");
        ?>
    </div>

    <div class="container btn-cadastrar">
        <a href="cadastra-produto.php"><button class="btn btn-success">Cadastrar produto</button></a>
    </div>
	
                    
        <div class="panel-body container">
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
                            <th colspan="3" ><center>Ação</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $produtos = listaProdutos($conexao);
                            foreach ($produtos as $produto) :
                                $id = $produto['id'];
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
                                <?php 
                                $visualizar = "visualizar".$id; 
                                $caminho = "../" . $produto['imagem'];?>
                                    <center><a href="#<?= $visualizar?>" class="glyphicon glyphicon-eye-open visualizar" data-toggle="modal"  ></a></center>
                            </td>
                            <td>
                                <?php $deletar = "deletar".$id; ?>
                                    <center><a href="#<?= $deletar?>" class="glyphicon glyphicon-trash excluir" data-toggle="modal"  ></a></center>
                            </td>
                            <td>
                                <form action="editar-produto.php" method="post">
                                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                    <center><input type="image" name="editar" class="glyphicon glyphicon-pencil editar" value=" " onClick="this.form.submit()"></center>
                                </form>
                            </td>
                            <!-- Modal Visualizar-->
                            <div id="<?= $visualizar?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Visualizar Imagem do Produto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="imagem-produto">
                                                <img src="<?= $caminho?>" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete -->
                            <div id="<?= $deletar?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Atenção</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Realmente quer deletar este produto - '<?= $produto['nome']?>'?</p>
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
                        </tr>
                        
                        
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->


    <?php require_once("footer.php"); ?>

</body>
</html>