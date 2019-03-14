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

<?php
  include '../../navBarreFr.php';
?>


<!--**************************************** FESTIVAL **************************************-->


    <div class="bibliotheque">

  <!-- ************************************* temple *************************************** -->
      <div class="container biblio-item temple">
        <h1 id="temple" class="text-center">Foire du temple</h1>
        <br>

        <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <img alt="" class="d-block mb-12 image-perso" src="image/Temple.jpg">
        </div>

        <div class="col-lg-6 col-md-12 col-xs-12">
				  <div class="d-block">
            <br>
            <h5>Origine et évolution dans le temps :</h5>
  					La foire du temple royal de Shenyang, est un festival folklorique traditionnel datant à l'origine de la période de la dynastie Qing et ayant pris fin en 1950. Cette dernière fut restauré en 2004, par le comité du parti du district de Heping et le gouvernement et est depuis réorganisé sans discontinuité depuis plus de 50 ans.<br>
  					Depuis lors la foire du temple royal de Shenyang avec les foire du temple Ditan à Beijing, la foire du temple de dieu de la ville a Shanghai et la foire du temple de Confucius de Nanjing représente les quatres plus importante foire du temple de Chine.<br>
          </div>

          <div id="demo" class="collapse">
            <br>
  					<h5>Où et quand ?</h5>
  					Cette dernière a lieux pendant des périodes de vacance ou de fête telles que le Festival du Printemps, la Fête du Travail et la Fête Nationale au Marché du Nord, dans le district de Heping de la ville de Shenyang.<br>
  					<br>

  					<h5>Qu’y a t il à découvrir ? </h5>
  					La reproduction de nombreuse activité coutumières folkloriques telles que la cérémonie de culte des ancêtres du groupe minoritaire ethnique Xibo, la cérémonie royale de mariage de la dynastie Qing.<br>
  					Exposition d’art populaire et de compétence artisanales comme de la peinture au sucre, du soufflage de sucre, des mini moulins à vent, manipulation de marionnettes d'ombre, réalisation de peinture de papier déchiré à la main, sculpture sur œufs, broderie, taillage de silhouette en papier couper.<br>
  					Divers spectacle sont ont lieux comme des opéras, de la magie , des jongleries, des acrobaties etc…<br>
  					Et tout cela accompagné à l’accès a nombreux stands de repas locaux et originaire de tout le pays.<br>
          </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">...</button>

          <br>
	        Source : <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">Version anglaise du site gouvernemental de Shenyang</a>
        </div>
      </div>
      </div>
  <!-- ********************************* FIN temple ************************************ -->

    <div class="trait"></div><br><br><br><br>

  <!-- ************************************ ER ********************************** -->
      <div class="container biblio-item er">
        <h1 id="er" class="text-center">Er Ren Zhuan</h1>
        <br>

        <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <img alt="" class="d-block mb-4 image-perso" src="image/ER.jpg">
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="d-block">
		        <br>
            "Er Ren Zhuan" ou “duo chanson et danse” est un genre d’art folklorique mêlant chant, danse, conte, originaire du nord de la chine.Il est généralement constitués de deux personnes un garçon et une fille. Ces derniers chante,joue des rôles,dance en utilisant éventails ou des "mouchoir" carré.<br>
          </div>

          <div id="demo2" class="collapse">
            <br>
            Dans le passé, cette art était populaire dans les zone rural puis au fils du temps s’est démocratisé ,grâce à des dialogue humoristique, à travers toute la Chine au point qu'à notre époque des Er Ren Zhuan ont des représentations a la television et au théâtre.<br>
          </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">...</button>
          <br>
  				Source 1 : <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">Version anglaise du site gouvernemental de Shenyang</a><br>
  				Source 2 : <a href="http://theatrebeijing.com/shows/song_and_dance_duet/">Guide officiel du theatre de Beijing</a>
        </div>
      </div>
      </div>

  <!-- *********************************** FIN ER ********************************* -->

    </div>
  </div>




<!--************************************** FIN FESTIVAL *************************************-->


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
