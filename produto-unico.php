<!DOCTYPE html>

<?php
  include("funcoes-banco.php");
  include("conexao.php");
  $id = $_GET['id'];

  $produto = getProdutoPorId($conexao, $id);
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/produto-unico.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
  <?php include("head-navbar-footer.php");  ?>
  <title>Yoshi's Store</title>



</head>
<body>

  <?php include("header.php"); ?>
  

  <div class="row">
  
    <div id="div-imagem" class="col-sm-6">
      <img id="imagem-jogo" src="<?=$produto['imagem']?>" alt="" class="img-responsive"/>
    </div>

    <div id="texto" class="col-sm-6">
      <h1 id="nome-produto"><?=$produto['nome']?></h1>
      <div class="descricao">
        <p>Plataforma: <?=$produto['plataforma_nome']?></p>
        <p>Tipo: <?=$produto['tipo_nome']?></p>
        <p>Data de Lançamento: <?=$produto['data_lancamento']?></p>
        <?php 
          if($produto['disponivel'] == 1) 
            $disponivel = "Sim";
          else
            $disponivel = "Nao";
        ?>
        <p>Disponivel: <?=$disponivel?></p>
        
        <?php 
          if($produto['usado'] == 1) 
            $usado = "Sim";
          else
            $usado = "Nao";
        ?>
        <p>Usado: <?=$usado?></p>
        
        <p>Preco: <?=$produto['preco']?></p>
        
        <p> <?=$produto['descricao']?></p>
      </div>
    </div>
    
  </div>


  <?php include("footer.php"); ?>
</body>
</html>