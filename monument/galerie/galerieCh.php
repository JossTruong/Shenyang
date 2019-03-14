<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    
    <title>沈阳</title>
    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="galerie.css">

  </head>

  <body>    
    <a href="#top"><img alt="" class="up" src="image/up.png" ></a>
    <div id="top">TOP</div>

<?php
include '../../navBarreCh.php';
?>
    <div id="barre"></div>

<!--**************************************** GALERIE **************************************-->

<!-- Menu -->
    <div id="nav2" class="dropdown">
      <button class="dropdown-toggle" data-toggle="dropdown">
        <h3>选择一个景点</h3>
      </button>
      <div class="dropdown-menu row filtres menu_styles filters">
        <a class="dropdown-item" href="" data-filter="*">所有</a>
        <a class="dropdown-item" href="#" data-filter=".palais">沈阳故宫（盛京皇宫）</a>
        <a class="dropdown-item" href="#" data-filter=".tombeF">福陵（东陵）</a>
        <a class="dropdown-item" href="#" data-filter=".tombeN">昭陵(北陵)<</a>
        <a class="dropdown-item" href="#" data-filter=".grotte">本溪水洞</a>
        <a class="dropdown-item" href="#" data-filter=".mont">千山</a>
        <a class="dropdown-item" href="#" data-filter=".3D">沈阳3D作品图展现</a>
      </div>
    </div>

<!-- Contenu page -->
    <div class="container">
      
      <div class="bibliotheque">

        <div id="masonry">
          <!-- Palais-->
                <div class="item palais"><img alt="" src="image/palais/palais1.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais2.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais3.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais4.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais5.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais6.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais7.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais8.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais9.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais10.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais11.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais12.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais13.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais14.jpg"></div>
                <div class="item palais"><img alt="" src="image/palais/palais15.jpg"></div>
          <!-- tombeF -->
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF1.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF2.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF3.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF4.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF5.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF6.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF7.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF8.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF9.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF10.jpg"></div>
                <div class="item tombeF"><img alt="" src="image/tombeF/tombF11.jpg"></div>
          <!-- tombeN -->
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN1.jpg"></div>
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN2.jpg"></div>
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN3.jpg"></div>
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN4.jpg"></div>
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN5.jpg"></div>
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN6.jpg"></div>
                <div class="item tombeN"><img alt="" src="image/tombeN/tombeN7.jpg"></div>
          <!-- grotte -->
                <div class="item grotte"><img alt="" src="image/grotte/grotte1.jpg"></div>
               <div class="item grotte"><img alt="" src="image/grotte/grotte2.jpg"></div>
                <div class="item grotte"><img alt="" src="image/grotte/grotte3.jpg"></div>
                <div class="item grotte"><img alt="" src="image/grotte/grotte4.jpg"></div>
                <div class="item grotte"><img alt="" src="image/grotte/grotte5.jpg"></div>
                <div class="item grotte"><img alt="" src="image/grotte/grotte6.jpg"></div>
          <!-- mont -->
                <div class="item mont"><img alt="" src="image/mont/mont1.jpg"></div>
                <div class="item mont"><img alt="" src="image/mont/mont2.jpg"></div>
                <div class="item mont"><img alt="" src="image/mont/mont3.jpg"></div>
                <div class="item mont"><img alt="" src="image/mont/mont4.jpg"></div>
                <div class="item mont"><img alt="" src="image/mont/mont5.jpg"></div>
                <div class="item mont"><img alt="" src="image/mont/mont6.jpg"></div>
          <!-- 3D -->
                <div class="item 3D">
                  <video style="width: 100%; margin-bottom: 10px;" controls src="image/3D/medaillon.mp4"></video>
                </div>
                <div class="item 3D">
                  <video style="width: 100%; margin-bottom: 10px;" controls src="image/3D/vase.mp4"></video>
                </div>
                <div class="item 3D">
                  <video style="width: 100%; margin-bottom: 10px;" controls src="image/3D/statuette.mp4"></video>
                </div>
                <div class="item 3D">
                  <img alt="" src="image/3D/charette.jpg">
                </div>
        </div>
      </div>
    </div>

  


<!--************************************** FIN GALERIE *************************************-->


    <footer>
        <p class="m-0 text-center text-white">Merci pour les <a href="../../contact/contactCh.html">droits sur les images</a> &copy; Shenyang - 2018</p>
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
 

    <script> 
        // ISOTOPE
            var $container = $('.bibliotheque').isotope({
            itemSelector: '.item'
          });

        // Filtre les images quand on clique
          $('.filters a').click(function(){
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });
          });
       </script> 
       <script type="text/javascript">
         $('.item').click(function() {
            $(this).toggleClass('active');
          });
       </script>

   </body>
</html>
