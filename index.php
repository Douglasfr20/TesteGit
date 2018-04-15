<?php 
  session_start();
  include "conexao2.php";
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Made in Brasil</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <link href="css/stylish-portfolio.css" rel="stylesheet">

  </head>

  <body>
  
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#top">Made In Brasil</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#top">Home</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#about">Sobre</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#services">Serviços</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#portfolio">Duvidas</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="#contact" onclick=$( "#menu-close").click();>Contato</a>
        </li>
      </ul>
    </nav>

   
    <header class="header" id="top">
      <div class="text-vertical-center">
        <h1>Made In Brasil</h1>
        <h3>Conheça os Melhores Lugares Para Se Sentir em Casa. </h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg js-scroll-trigger">Saiba Mais</a>
      </div>
    </header>

    
    <section id="about" class="about">
      <div class="container text-center">
        <h2>Sua Proxima Viagem Pode Ser Ainda Mais Divertida Com o Made In Brasil</h2>
        <p class="lead"> Saiba Quais Lugares Voce Mais Se Identifica...
          <a target="_blank" href="http://join.deathtothestockphoto.com/"></a></p>
      </div>
      <!-- /.container -->
    </section>

    <!-- Serviços -->
    <section id="services" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2>Serviços</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Pessoas</strong>
                  </h4>
                  <p>Encontre Pessoas Que Ja Viajaram Para o Seu Destino  .</p>
                  <a href="#" class="btn btn-light">Mais</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-compass fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Destino</strong>
                  </h4>
                  <p>Procure o lugar ideal para voce.</p>
                  <a href="#" class="btn btn-light">Mais</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-flask fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Favoritos</strong>
                  </h4>
                  <p>Encontre os lugares favoritos de cada regiao.</p>
                  <a href="#" class="btn btn-light">Mais</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-shield fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Diversos</strong>
                  </h4>
                  <p>Diversos dados a disposiçao para indicar uma viagem melhor e mais familiarizada.</p>
                  <a href="#" class="btn btn-light">Mais</a>
                </div>
              </div>
            </div>
           
          </div>
         
        </div>
     
      </div>
   
    </section>

    <aside class="callout">
      <div class="text-vertical-center">
        <h1>Planeje uma viagem inesquecivel !!!</h1>
      </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>Viagens</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-1.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-2.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-3.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="img/portfolio-4.jpg">
                  </a>
                </div>
              </div>
            </div>
            
            <a href="#" class="btn btn-dark"></a>
          </div>
        
        </div>
       
      </div>

    </section>


    <aside class="call-to-action bg-primary text-white">
      <div class="container text-center">
        <h3></h3>
        <a href="#" class="btn btn-lg btn-light"></a>
        <a href="#" class="btn btn-lg btn-dark"></a>
      </div>
    </aside>

<!DOCTYPE html >

  <form action="index.php" method="post" name="pesquisa">
      <select name="continente">
        <option value="">Continente</option>
        <?php  
          $getcontinente = "SELECT * FROM continente";
          $getcontinentequery = mysql_query($getcontinente) or die(mysql_error());
          while ($getcontinenteline = mysql_fetch_array($getcontinentequery)) {
            $descricao = $getcontinenteline['descricao'];
            $idcontinente = $getcontinenteline['idcontinente'];
            echo "<option value='$idcontinente'>$descricao</option>";

          }

        ?>
        
      </select>
        <input type="submit" name="submit" value="pesquisar">

  </form>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

  </head>

  <body>

  <?php

     
   // $idcontinente =$_POST['continente'];
  
    $_SESSION['teste'] = $idcontinente;

  ?>

    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-25.494938, -49.294372),
          zoom: 5
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('resultado.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYrel7NxNN0N7d52GbaA48BssaB1uUdY&callback=initMap">
    </script>
  </body>
</html>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h4>
              <strong>Made In Brasil</strong>
            </h4>
            <p>Frederico Wesphalen
              <br>Rio Grande Do Sul</p>
            <ul class="list-unstyled">
              <li>
                <i class="fa fa-phone fa-fw fa-2x"></i>
                <a href="mailto:name@example.com">(55)996921476</a>
                </li>
              <li>
                <i class="fa fa-envelope-o fa-fw fa-2x"></i>
                <a href="mailto:name@example.com">dresleigb@gmail.com</a>
              </li>
            </ul>
            <br>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/login?lang=pt">
                  <i class="fa fa-twitter fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble fa-fw fa-3x"></i>
                </a>
              </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Projeto de Software 2017</p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>
    </footer>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    
    <script src="js/stylish-portfolio.js"></script>

  </body>


</html>

