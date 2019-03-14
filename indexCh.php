<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <title>����</title>

    <?php
        header("Content-Type: text/html; charset=gbk",true);
    ?>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="En partenariat avec l'UNESCO, ce site valorise et de promouvoit Shenyang, patrimoine mondiale de l'humanite, à travers une mediation culturelle et numerique.">

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
            <h3>�����ʹ���ʢ���ʹ���</h3>
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
            <h3>���꣨���꣩</h3>
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
            <h3>����(����)</h3>
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

      <h1>����</h1>
      <h5>����ʲô���������</h5>
      <section class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide"> 
            <img class="image" alt="" src="image/shenyang/palaisImperial.jpg"><br><br> 
            <h6>�����ʹ�����ͼ</h6><br>
            ���������䴫ͳ�Ľ�������佨����ΰ����۶�������<br>
            ����Щ����ͨ�����ִ��;��οռ��ʹ�ã�ʵ���˼汸ƽ��ͶԳƵ������ص㡣<br>
            <br>
            ��Ҫ�˽������������ʤ�ż� : <br>
            <a href="monument/monument.html"><h6>������ʤ�ż�</h6></a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide"> 
            <img class="image" alt="" src="image/shenyang/map2.jpg"><br><br> 
            <h6>�����Ŷ�</h6><br>
            ���뱱��700����������������Ӱ�����Ҫ�ĳ���֮һ��<br>
            ��ʱ����������Ǳ���Ϊ��ǣ��ڱ�������Ϊ�й��׶�֮ǰ����Ҳ������Ϊ�׶���
            <br>
            <br>
            ����������˽������Ϣ: <br>
            <a href="histoire/histoire.html"> 
              <h6>��������ʷʱ����</h6>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="text_slide">
            <img class="meteo" src="https://w.bookcdn.com/weather/picture/32_26976_1_1_34495e_250_2c3e50_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=72288"  alt="booked.net"/>
            <iframe class="heure" src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FShanghai"></iframe>
            ����ӵ�����´���ʪ���½������<br> 
            ����ƽ�����±�����8.3��C���ҡ��������ʱ����ƽ���¶�Ϊ20��C����߿ɴﵽ39��C�����ڶ��죬���¶���ɽ���-30��C�����꽵����ԼΪ500���ף���ÿ��ƽ��183�춼���ں���ʱ�ڡ�
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