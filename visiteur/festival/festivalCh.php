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

  </head>

  <body>

    <a href="#top"><img alt="" class="up" src="image/up.png" ></a>
    <div id="top">TOP</div>
<?php
include '../../navBarreCh.php';
?>




<!--**************************************** FESTIVAL **************************************-->
 
 <div class="bibliotheque">

<!-- Contenu page -->
    <div class="container biblio-item temple">
      
     
  <!-- ************************************* temple *************************************** -->
          <h1 id="temple" class="text-center ">沈阳皇寺庙会</h1>
        <br>
          <!-- Temple -->

          <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-12 image-perso" src="image/Temple.jpg">
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12" style="margin-top: 20px;">
    				  <div class="d-block">
      					<h5>关于它的起源与发展:</h5>
      					沈阳皇寺庙会，目前已成为民间的传统节日庆典，它起源于清朝时期（为皇家所用），直至到1950年代末终止。后来由沈阳和平区及沈阳政府于2004年重新开办，并决定将此传统节日无间断流传五十年以上.<br>
      					而除了沈阳皇寺庙会，北京地坛庙会、上海城隍庙以及南京孔夫子庙，被称为中国最重要的四大庙会。<br>
              </div>

          <div id="demo" class="collapse">
      					<br>

      					<h5>它于什么时间于哪里举行呢？</h5>
      					它经常在节日放假期间（如春节、劳动节或者国庆节的假期）于沈阳和平区的北市场举行。<br>
      					<br>

      					<h5>在这庙会中您能看到什么？</h5>
      					您将能看到许多民间传统庆典仪式的重现，如锡伯少数民族的萨满仪式又或者如清朝皇室婚礼等等<br>
      					还有许多流行的手工艺术展示以及手工工艺人的工艺展示，如画糖人、吹糖人、 做纸风车,、皮影戏、 剪纸、 捏泥人、刺绣等<br>
      					还有各种像唱戏、魔术、杂耍这样的展示<br>
      					您全程都有全国各个地区特色美食的相伴！<br>
    				  </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">...</button>

          <br>
				      详细资料请点击: <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">沈阳官方网页</a>
            </div>
          </div>
          </div>
  <!-- ********************************* FIN temple ************************************ -->

         <div class="trait"></div><br><br><br><br>   


  <!-- ************************************ ER ********************************** -->
		    <div class="container biblio-item er">
          <h1 id="er" class="text-center">二人转</h1>
          <!-- tombeF-->
          <div class="row">

            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/ER.jpg">
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block">
				        <br>
                二人转是中国民间流传的一种结合对唱以及舞蹈的艺术，起源于中国北方, 通常由一男一女为组而进行. 舞蹈通常借以扇子或者方帕来呈现。<br>
              </div>
          
          <div id="demo2" class="collapse">

                <br>
                过去，这个流行的民间艺术仅仅在中国的农村里能看到，多亏了它幽默的对唱, 使得它得以流传开来以至整个中国都可以在电视上或者一些戏剧院里看到二人转的表演 。<br>
          </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">...</button>
                <br>
        				详情点击: <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">沈阳官方网站</a><br>
        				Source 2 : <a href="http://theatrebeijing.com/shows/song_and_dance_duet/">北京剧院官方指南网站</a>
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

    
