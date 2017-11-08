<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/pagina-localizacao.css">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>

       
    
    </head>
    <body id="body-localizacao">

      <!-- COMEÇO DO MENU DE NAVEGAÇÃO -->
      <div class="container-header">
        <div class="box">
          <header>
            <nav id='cssmenu'>
              <div class="navbar-header">
                <a class="navbar-brand"><img src="../assets/img/Yoshi.png"></a>
                <div class="navbar-brand" id="logo">Yoshi's Store</div>
              </div>
              <div id="head-mobile"></div>
              <div class="button"></div>
              <ul class="conteudo">
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Sobre Nós</a></li>
                <li><a href='#'>Produtos</a>
                   <ul>
                      <li><a href='#' id="consoles">Consoles</a>
                         <ul>
                            <li><a href='#'>Playstation</a></li>
                            <li><a href='#'>Xbox</a></li>
                            <li><a href="">Nintendo</a></li>
                         </ul>
                      </li>
                      <li><a href='#' id="jogos">Jogos</a>
                         <ul>
                            <li><a href='#'>Playstation</a></li>
                            <li><a href='#'>Xbox</a></li>
                            <li><a href="">Nintendo</a></li>
                         </ul>
                      </li>
                   </ul>
                </li>
                <li class='active'><a href='#'>Localização</a></li>
                <li><a href='#'>Contato</a></li>
                <li>
                  <div class="form-group">
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
     

      <div class="container">
          <h2 id="titulo" >Missao Aceita: Encontre a Yoshi's Store!</h2>
          <p class="texto">Olá aventureiro, tenho uma tarefa muito especial para você. Siga o mapa anexado neste pergaminho
          e encontrará tesouros além da sua imaginação! </p>
          <p class="texto">Rua Teste, numero 0, Centro</p>
      </div>

      <div id="map" class="container"></div>
          
      <script>
      function initMap() {
          var uluru = {lat: -21.7642, lng: -43.3496};
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
          });
          var marker = new google.maps.Marker({
          position: uluru,
          map: map
          });
      }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDsgAUf-w2b-AHm8uK_i-X-f6p23tE51M&callback=initMap">
      </script>
      
      
      <script src="/assets/js/jquery.js"></script>
      <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="/assets/bootstrap/js/bootstrap-dropdown.js"></script>
      <script type="text/javascript" src="/assets/js/menu-navegacao.js"></script>
  </body>
</html>
