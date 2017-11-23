<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/pagina-localizacao.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font.css">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <title>Yoshi's Store</title>
        
        <?php include("head-navbar-footer.php"); ?>
    </head>
    <body id="body-localizacao">

      <?php include("header.php"); ?>

      <div class="container">
          <h2 id="titulo" >Missão Aceita: Encontre a Yoshi's Store!</h2>
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
      
      <?php include("footer.php"); ?>
  </body>
</html>
