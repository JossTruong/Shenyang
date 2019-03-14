/* DOCTYPE JS */

/* == COORDONNES DES ZONES A MARQUER + CORRESPONDANCE == */

    var villes = [
      ['<img src="image/tombeNord.jpg">','<br/> Situé dans le district de Liquan, <br>le Mausolée Zhaoling (ou Tombeau Du Nord) abrite <br>la dépouille du deuxième empereur Qing. <br>C\'est le plus grand mausolée impérial du nord de la Chine.<br><br><a href="../monument.html">En savoir plus</a>', 41.852571,123.427532],
      ['<img src="image/tombeEst.jpg">',"<br/> Tombe Fuling ou Tombeau De l\'Est<br> est lemausolée de Nurhaci,le fondateur de la dynastie Qing,<br> et de sa femme l'impératrice Xiaocigao<br><br><a href='../monument.html'>En savoir plus</a>", 41.830060, 123.591150],
      ['<img src="image/palaisMukden.jpg">','<br/> Le palais de Mukden, aussi connu sous le nom de <br> palais impérial de Shenyang, est le premier palais <br> de la Dynastie Qinq avant son installation <br> dans la Cité interdite à Pékin.<br><br><a href="../monument.html">En savoir plus</a>', 41.797340, 123.455393],
      ['<img src="image/grotte.jpg">','<br/> La grotte de Benxi est la plus grande <br> grotte d\'eau en Asie et fait partie <br> des plus importants sites touristiques <br> en Chine. <br> Celle-ci est considérée comme <br> l\'une des six plus belles grottes du pays.<br><br><a href="../monument.html">En savoir plus</a>', 41.2912947, 123.7575121],
      ['<img src="image/mont.jpg">','<br/> Le mont Qian Shan possède 999 collines et couvre <br> plus de 44km². <br> Il abrite d\'innombrables sites et temples <br> de religion taoïste et bouddhiste.<br><br><a href="../monument.html">En savoir plus</a>', 41.0158582, 123.1067636]
    ];
/* == FIN COORDONNES DES ZONES A MARQUER + CORRESPONDANCE == */


/* == INITIALISE LA MAP == */

    function initialize(){
      var mapOptions={
        zoom: 9, // 0 à 21
        center: new google.maps.LatLng(41.505699,123.431472), /* Centre de la Carte */
        mapTypeId: google.maps.MapTypeId.ROADMAP, /* ROADMAP, SATELLITE, HYBRID, TERRAIN */
      }

      var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
      setMarkers(map,villes);
    }
/* == FIN INITIALISE LA MAP == */


/* == AFFICHE LE MARQUEUR ET ANIME == */

function setMarkers(map,locations){
  for(var i=0; i<locations.length; i++){
    var villes = locations[i];
    var myLatLng = new google.maps.LatLng(villes[2],villes[3]);
    var infoWindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker ({
      position: myLatLng,
      map: map,
      icon: villes[4]
      /*animation: google.maps.Animation.BOUNCE*/
    });

    (function(i){
      google.maps.event.addListener(marker, "click", function(){
        var villes = locations[i];
        infoWindow.close();
        infoWindow.setContent("<div>"+villes[0]+"<br />"+villes[1]+"</div>");
        infoWindow.open(map, this);
      });
    })(i);
  }
}
/* == FIN AFFICHE LE MARQUEUR ET ANIME == */