<?php 

  include ("conexao.php");
  include ("consulta-banco.php");
  
?>

<!-- COMEÇO DO MENU DE NAVEGAÇÃO -->
<div class="container-header">
  <div class="box">
    <header>
      <nav id='cssmenu'>
        <div class="navbar-header">
          <a class="navbar-brand nav-header"><img src="assets/img/Yoshis_Store_-_Logo.png"></a>
          <div class="navbar-brand nav-header" id="logo">Yoshi's Store</div>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
        <ul class="conteudo">
          <li><a href='index.php'>Home</a></li>
          <li><a href='quemSomos.php'>Sobre Nós</a></li>
          <li><a href='produtos.php'>Produtos</a>
            <ul class="zindex">
              <?php $tipos = listaTipoHeader($conexao);
              foreach ($tipos as $tipo) :
              ?>
              <li><a href='produtos.php?plataforma=0&tipo=<?=$tipo['id']?>' id="consoles"><?= $tipo['nome'] ?></a>
                <ul>
                  <?php $plataformas = listaPlataformaHeader($conexao);
                  foreach ($plataformas as $plataforma) :
                  ?>
                  <li><a href='produtos.php?plataforma=<?=$plataforma['id']?>&tipo=<?=$tipo['id']?>'><?= $plataforma['nome'] ?></a></li>
                <?php endforeach ?>
                </ul>
              </li>
            <?php endforeach ?>
            </ul>
          </li>
          <li><a href='localizacao.php'>Localização</a></li>
          <li><a href='contato.php'>Contato</a></li>
          <li>
            <div class="form-group form-header">
              <form class="form-inline my-2 my-lg-0"  id="buscar">
                <input class="form-control mr-sm-2 campo-busca container" type="text" placeholder="Buscar" aria-label="Search">
                <button type="button" class="btn btn-default btn-busca" aria-label="Buscar" type="submit">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
              </form>
            </div>
          </li>
        </ul>
      </nav>
    </header>
  </div>
</div>
<!-- FIM DO MENU DE NAVEGAÇÃO-->