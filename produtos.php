<!doctype html>

<?php

  function existeBusca(){
    if(isset($_POST['nome']) || isset($_POST['precoMin']) || isset($_POST['precoMax']) 
        || isset($_POST['novo']) || isset($_POST['usado']) || isset($_POST['plataforma']) )
      return true;

    return false;
  }

  include("conexao.php");
  include("funcoes-banco.php");
  $categorias = getCategorias($conexao);

  $produtos = listaProdutosDeProdutos($conexao);

  if(existeBusca()){
  
    if(isset($_POST['nome']))
      $nome = $_POST['nome'];
    else
      $nome = "";

    $query = "SELECT * FROM produto WHERE nome LIKE '{$nome}%'";

    if(isset($_POST['precoMin'])){ 
      if($_POST['precoMin'] != "")
        $precoMin = " AND preco >= {$_POST['precoMin']}";
      else
        $precoMin = "";
    }
    
    $query.=$precoMin;

    if(isset($_POST['precoMax'])){
      if($_POST['precoMax'] != "")
        $precoMax = " AND preco <= {$_POST['precoMax']}";
      else
        $precoMax = "";  
    }
     
    $query.=$precoMax;

    if(isset($_POST['plataforma'])){
      if($_POST['plataforma'] != 0)
        $plataforma = " AND plataforma_id = {$_POST['plataforma']}";
      else
        $plataforma = "";
    }

    $query .= $plataforma;

    var_dump($query);

    $produtos = buscaAvancada($conexao, $query);
}
  else
    $produtos = listaProdutosDeProdutos($conexao);

?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/produtos.css">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
  <?php include("head-navbar-footer.php"); ?>
</head>


<body id="pagina-produtos">
  
  <?php include("header.php"); ?>
  
  <form id="retangulo" class="container form-group" role="form" method="post">
    
    <p class="titulo"> Encontre seu Jogo!</p>
    

    <input type="text" name="nome" placeholder="Nome" class="form-control campo-busca col-sm-6">
    
    
    <select name="plataforma" class="form-control combobox-console col-sm-6">
      <option value="">Console</option>
      <?php foreach($categorias as $categoria) { ?>
      <option value=<?=$categoria['id']?>><?=$categoria['nome']?></option>
      <?php } ?>
    </select>

    
    
    <input type="text" name="precoMin" placeholder="Preco Minimo" class="form-control campo-preco col-sm-6">

    <input type="text" name="precoMax" placeholder="Preço Máximo" class="form-control campo-preco col-sm-6">
  
    <label class="checkbox-inline">
      <input type="checkbox" name="novo" value="1">Novo
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="usado" value="1">Usado
    </label>

    </br>
    
    <button class="btn btn-success btn-lg" id="botao-buscar">Buscar</button>

  </form>
  
  
  <main>
    <section class="produtos-recentes">
      <!-- Produtos -->  
      <div id="wrapper-produtos" class="container">
        <div class="row">
          <div class="col-md-12">                         
            <h4 class="titulo">
              <span class="text"><strong> Produtos</strong></span>
            </h4>
            <div>
              <!-- Imagens dos produtos -->
              <ul class="thumbnails">
              <?php
              foreach($produtos as $produto) :
                ?>                       
                <li class="col-md-3">
                  <div class="caixa-produtos">
                    <span></span>
                    <p><a href="#"><img src="assets/img/Yoshi.png" alt=<?= $produto['nome']?> class="img-responsive" /></a></p>
                    <a href="#" class="titulo"><?= $produto['nome']?></a><br/>
                    <?php
                    if($produto['tipo_nome']=="Console") :
                      ?>
                      <a href="#" class="categoria"><?= $produto['tipo_nome']?></a>
                      <?php else :
                      ?>
                      <a href="#" class="categoria"><?= $produto['tipo_nome']?> <?= $produto['plataforma_nome']?></a>
                      <?php
                    endif
                    ?>
                    <p class="preco">R$<?= $produto['preco']?></p>
                  </div>
                </li>
                <?php
									endforeach
									?>
              </ul>
              <!-- Fim das imagens dos produtos -->
            </div>
            <br/>
          </div>        
        </div>
      </div>
      <!-- Fim dos produtos -->
    </section>
  </main>
  
  <?php include("footer.php"); ?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <?php include("script-navbar-footer.php"); ?>
  
</body>
</html>