<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Shenyang</title>

    <meta charset="utf-8">
  	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="En partenariat avec l'UNESCO, ce site valorise et promouvoit Shenyang, patrimoine mondiale de l'humanite, à travers une mediation culturelle et numerique.">

    <meta name="keywords" content="patrimoine, numerique, shenyang, chine, humanite, france, universite, upem, university, mcn, mediation, culturelle, monument, frise, chronologique, francais, anglais, english, china, unesco, student, etudiant, projet, project, organisation, nations, education, science, culture, cultural, educational, travel, voyage, traveller, map, carte, icomos, conseil, international, site, francois, mouysset, partenariat, tombeau, galerie, gallery, mausolee, zhaoling, palais, fuling, nord, grotte , benxi, mont, qian, shan, 3d, object ,objet, cite, interdite, imperial, forbidden, city, french, beijing, photo, picture, photographie, marne, vallee, dut, informatique, info, tripadvisor, facebook, twitter, behance, linkedin, bootstrap, javascript, jquery, php, css, html">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


  </head>

  <body>
    <div id="navBarre">
      <?php
        include 'navBarreFr.php';
      ?>
    </div>

<!--************************************ CAROUSEL **********************************-->
    <div id="home" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
        <li data-target="#home" data-slide-to="0" class="active"></li>
        <li data-target="#home" data-slide-to="1"></li>
        <li data-target="#home" data-slide-to="2"></li>
      </ul>



      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="fond" src="image/home/palaisMukden.jpg" alt="Palais Mukden">
          <div class="carousel-caption">
            <h3>Palais Mukden</h3>
            <br>
            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/home/tombeEst.jpg" alt="Tombe de l'Est">
          <div class="carousel-caption">
            <h3>Tombe de l&#39;Est</h3>
            <br>
            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/home/tombeNord.jpg" alt="Tombe du Nord">
          <div class="carousel-caption">
            <h3>Mausolée Zhaoling</h3>
            <br>
            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>
          </div>
        </div>
      </div>

    </div>
<!--*********************************** FIN CAROUSEL ***********************************-->




<!--**************************************** SHENYANG **********************************-->
    <div id= "shenyang" class="section">
      <br>
      <br>

      <h1>SHENYANG</h1>
      <h5>Ancienne capitale de la Chine</h5>
      <section class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img alt="" src="image/shenyang/map2.jpg"><br><br>
            <h6>Shenyang ancienne capitale</h6><br>
            Situ&eacute; &agrave; 700 kilom&egrave;tres de P&eacute;kin, le district de Shenyang fut l&#39;une des villes les plus importantes du royaume Yan. <br>
            Tout d&#39;abord connu sous le nom de Houcheng, elle fut la capitale de la Chine avant de laisser sa place &agrave; Beijing (P&eacute;kin).
            <br>
            <br/>
            <a href="histoire/histoire.php">
              <h6>En Savoir Plus</h6>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img alt="" src="image/shenyang/palaisImperial.jpg"><br><br>
            <h6>Vue Explos&eacute;e du Palais Imp&eacute;rial</h6><br>
            Le district de Shenyang est connu pour ses magnifiques architectures traditionnelles et &agrave; l&#39;aspect imposant.<br>
            Elles sont caract&eacute;ris&eacute;es par l&#39;utilisation de grands espaces rectangulaires afin de respecter les principes d&#39;&eacute;quilibre et de sym&eacute;trie.<br>
            <br/>
            <br/>
            <a href="monument/monument.php">
              <h6>En Savoir Plus</h6>
            </a>

          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img class="meteo" src="https://w.bookcdn.com/weather/picture/32_26976_1_3_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=581&anc_id=49390"  alt="booked.net"/>
            <iframe class="heure" src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=medium&timezone=Asia%2FShanghai"></iframe>
            Shenyang poss&egrave;de un climat temp&eacute;r&eacute; humide.<br>
            La temp&eacute;rature moyenne annuelle est de 8.3°C. L&#39;&eacute;t&eacute;, cette derni&egrave;re est de 20°C et peut atteindre 39°C. L&#39;hiver la temp&eacute;rature peut atteindre -30°C. Les pr&eacute;cipitations annuelles sont d&#39;environ 500 mm et les gel&eacute;es durent en moyenne 183 jours par an.
          </div>
        </div>

      </section>

    </div>
<!--************************************** FIN SHENYANG **********************************-->



<!--**************************************** MARGE ***************************************-->
    <section id="marge">
    </section>
<!--************************************** FIN MARGE *************************************-->

    <footer>
        <p class="m-0 text-center text-white">Copyright &copy; Shenyang - 2018</p>
    </footer>


    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


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
