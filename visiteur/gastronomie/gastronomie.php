<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Shenyang</title>

    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


  </head>

  <body>

    <a href="#top"><img alt="" class="up" src="image/up.png" ></a>
    <div id="top">TOP</div>

    <style type="text/css">
      .container{
        width: 90%;
      }
    </style>

<?php
  include '../../navBarreFr.php';
?>

    <div id="barre"></div>


<!--**************************************** MONUMENTS **************************************-->
<!-- Menu -->
    <div id="nav2" class="dropdown">
      <button class="dropdown-toggle" data-toggle="dropdown">
        <h3>Faites votre choix</h3>
      </button>
      <div class="dropdown-menu row filtres menu_styles filters">
        <a class="dropdown-item" href="#dumpling">Boulette de pâte cuite à la vapeur</a>
        <a class="dropdown-item" href="#dumplingLao">Li Liangui à la viande fumée</a>
        <a class="dropdown-item" href="#coldNoodle">Mul-naengmyeon de Pagode de l'Ouest</a>
      </div>
    </div>


<!-- Contenu page -->
    <div class="container">

      <div class="bibliotheque">
  <!-- ************************************* DUMPLING ************************************* -->
  <div id="dumpling">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
      <section class="row">
        <h1 class="text-center biblio-item dumplingLao">Boulette de pâte cuite à la vapeur</h1>
        <!-- dumplingLao-->
        <div class="row text-center biblio-item dumplingLao">

            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/dumpling2.jpg">
            </div>

          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="d-block mb-4 h-100">
              <br>
              La forme de la boulette de pâte cuite à la vapeur (ou Siew Mai) du Nord-Est de la chine ressemble à une fleur florissante. La technique utilisé est de mélanger l'eau bouillante (entre 65°C et 100°C) et la farine pour former la pâte. Ce type de pâte(烫面) donne une texture moelleuse à la viande.

            </div>
          </div>
        </div>
      </section>
        
  <!-- ********************************* FIN DUMPLING ************************************ -->




  <!-- ************************************ LAO DUMPLING ********************************** -->
  <div id="dumplingLao">
    <br>
    <br>
    <br>    <div class="trait"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
        <section class="row">
          <h1 class="text-center biblio-item dumpling">Li Liangui à la viande fumée.</h1>
          <!-- dumpling -->
          <div class="row text-center biblio-item dumpling">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <img alt="" class="d-block mb-4 image-perso" src="image/dumplingLao.jpg">
          </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block mb-4 h-100">
                <br>
                Cent ans auparavant, le Li Liangui nourissait déjà les estomacs affamés. 

                Le Liangui est fait à partir d'un mélange de bouillon épais avec de l'huile et de la farine pour faire la pâte, ce qui imprègne une saveur irrésistible à la pâte. Les morceaux de viandes choisies ont un bon équilibre entre la graisse et le muscle, le tout mijotés dans un bouillon puis fumé avec du sucre brun. Pour manger, les villageois diviseront le pain en deux, le rempliront de garanissage et termineront avec un habillage de pâte de soja.

              </div>
            </div>
          </div>
        </section>

  <!-- ******************************** FIN LAO DUMPLING ******************************* -->



    <!-- *********************************** NOUILLE ********************************** -->
  <div id="coldNoodle">
    <br>
    <br>
    <br>    <div class="trait"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
        <section class="row">
          <h1 class="text-center biblio-item coldNoodle">Mul-naengmyeon de Pagode de l'Ouest</h1>
          <!-- coldNoodle -->
          <div class="row text-center biblio-item coldNoodle">

            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/coldNoodle.jpg">
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block mb-4 h-100">
                <br>
                La nourriture de Shenyang est fortement influencée par les Coréens, et c'est donc sans surprise que l'ont peut souvent trouvé les pâtes froides (ou Mul-Naengmyeon) dans les rues de Shenyang. La pâte est transformée en nouille et préparée directement dans de l'eau bouillante pour un moment, afin de conserver la texture fraîche. Les pâtes sont alors servies dans un bouillon de boeuf chaud, laissant un arôme délicieux. 

              </div>
            </div>
          </div>
        </section>
    <!-- ********************************* FIN NOUILLE ********************************** -->


      </div>
    </div>




<!--************************************** FIN GASTRO *************************************-->


    <footer>
        <p class="m-0 text-center text-white"> &copy; - Shenyang - 2018</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

  <!--Isotope-->
    <script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>

    <script>
      /* Anime la descente pou evite que cela soit brusquement */
      $(function() {
        $('a[href*="#"]').on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
      });
    </script>

   </body>
</html>
