<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shenyang</title>

    <meta charset="utf-8">
  	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>

    <div id="navBarre">
      <?php
        include 'navBarreEn.php';
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
            <h3>Mukden Palace</h3>
            <br>

            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/home/tombeEst.jpg" alt="Tombe de l'Est">
          <div class="carousel-caption">
            <h3>Fuling Tomb</h3>
            <br>

            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/home/tombeNord.jpg" alt="Tombe du Nord">
          <div class="carousel-caption">
            <h3>Zhaoling mausoleum</h3>
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
      <h5>The former capital of China</h5>
      <section class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img class="image" alt="" src="image/shenyang/map2.jpg"><br><br>
            <h6>Shenyang former capital</h6><br>
            Located 700 kilometers from Beijing, Shenyang District was one of the most important cities of the Yan Kingdom. <br>
            First known as Houcheng, it was the capital of China before leaving its place in favor of Beijing.
            <br>
            <br>
            <a href="histoire/histoireEn.php">
              <h6>Learn More</h6>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img class="image" alt="" src="image/shenyang/palaisImperial.jpg"><br><br>
            <h6>Exploded View of the Imperial Palace</h6><br>
            Shenyang District is known for its magnificent traditional architecture and imposing appearance.<br>
            It is characterized by the use of large rectangular spaces to respect the principles of balance and symmetry.<br>
            <br>
            <a href="monument/monumentEn.php"><h6>Learn More</h6></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img class="meteo" src="https://w.bookcdn.com/weather/picture/32_26976_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=72288"  alt="booked.net"/>
            <iframe class="heure" src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FShanghai"></iframe>
            The average annual temperature is 8.3 ° C. In the summer, it is 20 ° C and can reach 39 ° C. In the winter the temperature can reach -30 ° C. The annual rainfall is about 500 mm and the frosts last on average 183 days a year.
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
