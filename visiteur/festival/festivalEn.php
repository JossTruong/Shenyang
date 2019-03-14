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

    <a href="#top"><img alt="" class="up" src="image/up.png" ></a>
    <div id="top">TOP</div>

<?php
  include '../../navBarreEn.php';
?>


<!--**************************************** FESTIVAL **************************************-->


    <div class="bibliotheque">

  <!-- ************************************* temple *************************************** -->
      <div class="container biblio-item temple">
        <h1 id="temple" class="text-center">Temple fair</h1>
        <br>

        <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <img alt="" class="d-block mb-12 image-perso" src="image/Temple.jpg">
        </div>

        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="d-block">
            <br>
      					<h5>Origin and evolution over time :</h5>
      					The Shenyang Royal Temple Fair is a traditional Qing Dynasty folk festival that ended in 1950. The festival was restored in 2004 by the Heping District Party Committee and the Government of China. has since been reorganized seamlessly for more than 50 years.<br>
      					From the Shenyang Royal Temple Fair with the Ditan Temple Fair in Beijing, the Shanghai City Temple Fair and Confucius Temple Fair in Nanjing are one of four most important fairs of Temple Fair in China.<br>
      					<br>
          </div>

          <div id="demo" class="collapse">
      					<h5>Where and when ? :</h5>
      					The festival is held during holidays such as the Spring Festival, International Labor Day and National Day at the North Market, in Heping District of Shenyang City.<br>
      					<br>

      					<h5>What is there to discover ? :</h5>
      					The reproduction of many folk customs such as the ancestor worship ceremony of ethnic minority group Xibo, the royal wedding ceremony of the Qing Dynasty.<br>
      					Exhibitions of folk art and craftsmanship such as sugar painting, sugar blowing, mini windmills, shadow puppet manipulation, hand-tearing paper painting, egg carving , embroidery, paper-cut silhouette.<br>
      					Various shows take place such as operas, magic, juggling, acrobatics, and so on...<br>And all this accompanied with access to many local food stalls, both local and from all over the country.<br>
			        </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">...</button>

          <br>
			      Source : <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">Shenyang gouvernemental website - English version</a>
            </div>
          </div>
        </div>
  <!-- ********************************* FIN temple ************************************ -->

        <div class="trait"></div><br>

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
                "Er Ren Zhuan" or "song and dance duet" is a kind of folk art combining singing, dancing, storytelling, native of the north of China.It usually consists of two people, a boy and a girl. They sing, play roles and dance using fans or square handkerchiefs.<br>
          </div>

          <div id="demo2" class="collapse">
                <br>
                In the past, this art was popular in the rural areas over the time it became democratized, due to humorous dialogue, all over China to the point that in our time, Er Ren Zhuan have representation is shown on TV and theater.<br>
          </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">...</button>
          <br>
				        Source 1 : <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">Shenyang gouvernemental website - English version</a><br>
				        Source 2 : <a href="http://theatrebeijing.com/shows/song_and_dance_duet/">The Official Beijing Theatre Guide Website</a>
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
