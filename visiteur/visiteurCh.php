<!DOCTYPE html>
<html>
<head>
	<title>Shenyang</title>

    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div id="navBarre">
      <?php
        include '../navBarreCh.php';
      ?>
    </div>
<!--**************************************** visiteur **********************************-->
    <div id= "shenyang" class="section">
      <br>
      <br>

      <h1>VISITEUR</h1>
      <h5>Choisissez votre destination</h5>
      <section class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
          	<h3>Festival</h3>
            <a href="festival/festivalCh.php">
            	<img alt="" src="image/festival.jpg">
            </a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
          	<h3>Gastronomie</h3>
            <a href="gastronomie/gastronomieCh.php">
            	<img alt="" src="image/gastronomie.jpg">
            </a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
          	<h3>Points d'interet</h3>
          	<a href="map/mapCh.php">
            	<img alt="" src="image/map.jpg">
        	</a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
          	<h3>Quizz</h3>
            <a href="quizz/quizzCh.php">
              <img alt="" src="image/quizz02.jpg">
            </a>
          </div>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <h3>Livre d'or</h3>
            <a href="livre/livreorCh.php">
              <img alt="" src="image/livre.jpg">
            </a>
          </div>
        </div>

      </section>

    </div>
    <br>
<!--************************************** FIN visiteur **********************************-->
</body>
    <footer>
        <p class="m-0 text-center text-white">Copyright &copy; Shenyang - 2018</p>
    </footer>


    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


</html>
