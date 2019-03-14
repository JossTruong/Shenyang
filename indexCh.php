<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <title>沈阳</title>

    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="En partenariat avec l'UNESCO, ce site valorise et de promouvoit Shenyang, patrimoine mondiale de l'humanite, 脿 travers une mediation culturelle et numerique.">

    <meta name="keywords" content="patrimoine, numerique, shenyang, chine, humanite, france, universite, upem, university, mcn, mediation, culturelle, monument, frise, chronologique, francais, anglais, english, china, unesco, student, etudiant, projet, project, organisation, nations, education, science, culture, cultural, educational, travel, voyage, traveller, map, carte, icomos, conseil, international, site, francois, mouysset, partenariat, tombeau, galerie, gallery, mausolee, zhaoling, palais, fuling, nord, grotte , benxi, mont, qian, shan, 3d, object ,objet, cite, interdite, imperial, forbidden, city, french, beijing, photo, picture, photographie, marne, vallee, dut, informatique, info, tripadvisor, facebook, twitter, behance, linkedin, bootstrap, javascript, jquery, php, css, html">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>

<?php
include 'navBarreCh.php';
?>

<!--************************************ CAROUSEL **********************************-->
    <div id="home" class="carousel slide" data-ride="carousel" style="margin-top: 3px;">
          
      <ul class="carousel-indicators">
        <li data-target="#home" data-slide-to="0" class="active"></li>
        <li data-target="#home" data-slide-to="1"></li>
        <li data-target="#home" data-slide-to="2"></li>
      </ul>



      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="fond" src="image/home/palaisMukden.jpg" alt="Palais Mukden">
          <div class="carousel-caption" style="margin-bottom: -23px;">
            <h3>沈阳故宫（盛京皇宫）</h3>
            <br>

            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>

            <br>
          </div>   
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/home/tombeEst.jpg" alt="Tombe de l'Est">
          <div class="carousel-caption" style="margin-bottom: -23px;">
            <h3>福陵（东陵）</h3>
            <br>

            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>

            <br>
          </div>   
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/home/tombeNord.jpg" alt="Tombe du Nord">
          <div class="carousel-caption" style="margin-bottom: -23px;">         
            <h3>昭陵(北陵)</h3>
            <br>

            <section class="flecheBas">
              <a href="#shenyang"><span></span></a>
            </section>

            <br>
          </div>   
        </div>
      </div>

    </div>
<!--*********************************** FIN CAROUSEL ***********************************-->




<!--**************************************** SHENYANG **********************************-->
    <div id= "shenyang" class="section">
      <br>
      <br>

      <h1>沈阳</h1>
      <h5>它是什么？它在哪里？</h5>
      <section class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide"> 
            <img class="image" alt="" src="image/shenyang/palaisImperial.jpg"><br><br> 
            <h6>沈阳故宫刨析图</h6><br>
            沈阳市以其传统的建筑风格及其建筑雄伟的外观而闻名。<br>
            而这些建筑通过各种大型矩形空间的使用，实现了兼备平衡和对称的美感特点。<br>
            <br>
            想要了解更多沈阳的名胜古迹 : <br>
            <a href="monument/monument.html"><h6>沈阳名胜古迹</h6></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide"> 
            <img class="image" alt="" src="image/shenyang/map2.jpg"><br><br> 
            <h6>沈阳古都</h6><br>
            距离北京700公里的沈阳市曾是延安最重要的城市之一。<br>
            古时候的沈阳先是被称为后城，在北京被立为中国首都之前，它也曾被封为首都。
            <br>
            <br>
            点击此链接了解更多信息: <br>
            <a href="histoire/histoire.html"> 
              <h6>沈阳的历史时间轴</h6>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img class="meteo" src="https://w.bookcdn.com/weather/picture/32_26976_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=72288"  alt="booked.net"/>
            <iframe class="heure" src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FShanghai"></iframe>
            沈阳拥有着温带半湿润大陆性气候。<br> 
            其年平均气温保持在8.3°C左右。在夏天的时候，其平均温度为20°C，最高可达到39°C；而在冬天，其温度亦可降至-30°C。其年降雨量约为500毫米，而每年平均183天都处于寒冷时期。
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