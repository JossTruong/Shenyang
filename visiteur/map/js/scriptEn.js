/* DOCTYPE JS */

/* == COORDONNES DES ZONES A MARQUER + CORRESPONDANCE == */

    var villes = [
      ['<img src="image/tombeNord.jpg">','<br/> Situated in the district of Liquan, the Mausoleum <br/> Zhaoling (or Grave Of the North) shelters the remains <br/> of the second emperor Qing. <br/> It is the biggest imperial mausoleum of the <br/> North of China.<br><br><a href="../monumentEn.html">Learn more</a>', 41.852571,123.427532],
      ['<img src="image/tombeEst.jpg">',"<br/> Grave Fuling or East Grave is the mausoleum of <br/> Nurhaci, the founder of the dynasty Qing, <br/> and her wife empress Xiaocigao.<br><br><a href='../monumentEn.html'>Learn more</a>", 41.830060, 123.591150],
      ['<img src="image/palaisMukden.jpg">','<br/> The palace of Mukden, so known under the name <br/> of imperial palace of Shenyang, is the first <br/> palace of the Dynasty Qinq before its installation <br/> in Forbidden City in Beijing.<br><br><a href="../monumentEn.html">Learn more</a>', 41.797340, 123.455393],
      ['<img src="image/grotte.jpg">','<br/> The cave of Benxi is the biggest cave <br/> of water in Asia and is a member(part) <br/> of the most important places of interest <br/> in China. <br/> This one is considered as one of the six <br/> more beautiful caves of the country.<br><br><a href="../monumentEn.html">Learn more</a>', 41.2912947, 123.7575121],
      ['<img src="image/mont.jpg">','<br/> The mount Qian Shan possesses 999 hills and <br/> covers more of 44km ². <br/> He(it) shelters uncountable sites and temples <br/> of Taoist and Buddhist religion.<br><br><a href="../monumentEn.html">Learn more</a>', 41.0158582, 123.1067636]
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