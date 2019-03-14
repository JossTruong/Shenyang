<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shenyang</title>

    <meta charset="utf-8">
  	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body onload="initialize()">

<?php
  include '../../navBarreEn.php';
?>


<!--****************************************** MAPS **************************************-->
    <div id="map">
      <div id="map_canvas"></div>
    </div>
<!--*************************************** FIN MAPS **************************************-->



    <footer>
        <p class="m-0 text-center text-white">Copyright &copy; Shenyang - 2018</p>
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuLY6cRaCf8k533FFol2a1HEJEBnCNX4k&callback=myMap"></script>
    <script src="js/scriptEn.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>




  </body>
</html>
