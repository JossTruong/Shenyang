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

  <body onload="initialize()">

<?php
include '../../navBarreCh.php';
?>

<!--****************************************** MAPS **************************************-->
    <div id="map_ch">
      <iframe width="100%" height="725px" frameBorder="0" src="http://umap.openstreetmap.fr/fr/map/shenyang_217161?scaleControl=false&miniMap=true&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=databrowser&captionBar=false&fullscreenControl=false&editinosmControl=null"></iframe>
    </div>
<!--*************************************** FIN MAPS **************************************-->



    <footer>
        <p class="m-0 text-center text-white">Copyright &copy; Shenyang - 2018</p>
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuLY6cRaCf8k533FFol2a1HEJEBnCNX4k&callback=myMap"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>




  </body>
</html>
