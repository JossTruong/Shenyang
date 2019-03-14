<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <title>Shenyang</title>
    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
      #langue{
        margin-top: 5px;
      }
    </style>

  </head>

  <body>

    <a href="#top"><img alt="" class="up" src="image/up.png" ></a>
    <div id="top">TOP</div>
<?php
include '../../navBarreCh.php';
?>

    <div id="barre"></div>


<!--**************************************** MONUMENTS **************************************-->
<!-- Menu -->
    <div id="nav2" class="dropdown">
      <button class="dropdown-toggle" data-toggle="dropdown">
        <h3>Make your choise</h3>
      </button>
      <div class="dropdown-menu row filtres menu_styles filters">
        <a class="dropdown-item" href="#dumpling">Steamed Dumpling</a>
        <a class="dropdown-item" href="#dumplingLao">Li Liangui Smoked-Meat Flatbread</a>
        <a class="dropdown-item" href="#coldNoodle">Mul-naengmyeon of West Pagoda</a>
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
          <h1 class="text-center biblio-item dumplingLao">Steamed Dumpling</h1>
          <!-- dumplingLao-->
          <div class="row text-center biblio-item dumplingLao">
            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/dumpling2.jpg">
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block mb-4 h-100">
                <br>
                The shape of the Steamed Dumpling or Siew Mai of the Northeast resembles a burgeoning flower. The technique they use is to mix boiling water (65℃ to 100℃) and flour to form the dough. This type of dough, or Tang Mian (烫面), gives rise to the chewy texture of the skin.

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
          <h1 class="text-center biblio-item dumpling">Li Liangui Smoked-Meat Flatbread</h1>
          <!-- dumpling -->
          <div class="row text-center biblio-item dumpling">
            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/dumplingLao.jpg">
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block mb-4 h-100">
                <br>
                Hundred years ago, Li Liangui Smoked-Meat Flatbread was already around to comfort hungry stomachs. 

                It's made from mixes a thick broth with oil and flour to make the dough, which imbues a irresistible umami flavour to the flatbread. The cuts of meat chosen have a fine balance of fat and muscle, stewed in the broth then smoked with brown sugar. To eat, the locals will halve the bread, stuff it with the fillings and finish off with soybean paste dressing.

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
          <h1 class="text-center biblio-item coldNoodle">Mul-naengmyeon of West Pagoda</h1>
          <!-- coldNoodle -->
          <div class="row text-center biblio-item coldNoodle">

            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/coldNoodle.jpg">
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block mb-4 h-100">
                <br>
                The food of Shenyang is heavily influenced by its Korean neighbour, and it is no surprise that Korean cold noodles, or Mul-naengmyeon, is often sighted in the streets of Shenyang. This cold noodle shop makes their noodles on the spot with flour and starch. The dough is squeezed into shapes of noodles and cooked directly in boiling water for just an instance, retaining the fresh texture. The noodles are then served in a hearty beef broth, letting out a delightful aroma.

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
