<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    
    <title>����</title>
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
          <h1 id="temple" class="text-center ">�����������</h1>
        <br>
          <!-- Temple -->

          <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-12 image-perso" src="image/Temple.jpg">
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12" style="margin-top: 20px;">
    				  <div class="d-block">
      					<h5>����������Դ�뷢չ:</h5>
      					����������ᣬĿǰ�ѳ�Ϊ���Ĵ�ͳ������䣬����Դ���峯ʱ�ڣ�Ϊ�ʼ����ã���ֱ����1950���ĩ��ֹ��������������ƽ��������������2004�����¿��죬���������˴�ͳ�����޼��������ʮ������.<br>
      					����������������ᣬ������̳��ᡢ�Ϻ��������Լ��Ͼ��׷���������Ϊ�й�����Ҫ���Ĵ���ᡣ<br>
              </div>

          <div id="demo" class="collapse">
      					<br>

      					<h5>����ʲôʱ������������أ�</h5>
      					�������ڽ��շż��ڼ䣨�紺�ڡ��Ͷ��ڻ��߹���ڵļ��ڣ���������ƽ���ı��г����С�<br>
      					<br>

      					<h5>������������ܿ���ʲô��</h5>
      					�����ܿ��������䴫ͳ�����ʽ�����֣����������������������ʽ�ֻ������峯���һ���ȵ�<br>
      					����������е��ֹ�����չʾ�Լ��ֹ������˵Ĺ���չʾ���续���ˡ������ˡ� ��ֽ�糵,��ƤӰϷ�� ��ֽ�� �����ˡ������<br>
      					���и�����Ϸ��ħ������ˣ������չʾ<br>
      					��ȫ�̶���ȫ������������ɫ��ʳ����飡<br>
    				  </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">...</button>

          <br>
				      ��ϸ��������: <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">�����ٷ���ҳ</a>
            </div>
          </div>
          </div>
  <!-- ********************************* FIN temple ************************************ -->

         <div class="trait"></div><br><br><br><br>   


  <!-- ************************************ ER ********************************** -->
		    <div class="container biblio-item er">
          <h1 id="er" class="text-center">����ת</h1>
          <!-- tombeF-->
          <div class="row">

            <div class="col-lg-6 col-md-12 col-xs-12">
              <img alt="" class="d-block mb-4 image-perso" src="image/ER.jpg">
            </div>

            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="d-block">
				        <br>
                ����ת���й����������һ�ֽ�϶Գ��Լ��赸����������Դ���й�����, ͨ����һ��һŮΪ�������. �赸ͨ���������ӻ��߷��������֡�<br>
              </div>
          
          <div id="demo2" class="collapse">

                <br>
                ��ȥ��������е���������������й���ũ�����ܿ��������������Ĭ�ĶԳ�, ʹ�������������������������й��������ڵ����ϻ���һЩϷ��Ժ�￴������ת�ı��� ��<br>
          </div>

          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">...</button>
                <br>
        				������: <a href="http://english.shenyang.gov.cn/system/2014/12/18/010103697.shtml">�����ٷ���վ</a><br>
        				Source 2 : <a href="http://theatrebeijing.com/shows/song_and_dance_duet/">������Ժ�ٷ�ָ����վ</a>
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

    
