
<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>UTILIZACION API DE GOOGLE </title>

 </head>
  <body style="background-color:#FF0000;">
<p>Ingrese algun lugar del mundo </p>
    <form class="" action="" method="get">
      <label for="direccion"> </label>
      <input type="text" name="direccion" value="">
      <button type="submit" name="button"> Averiguar </button>
    </form>

  </body>
</html>


<?php

if (isset($_GET['direccion'])){
  $direccion = $_GET['direccion'];
echo "El lugar elegido es : ". $direccion;
echo "<br>";
 $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" .urlencode($direccion). "&key=AIzaSyAnX2v-dT1oJWFsMQjuf_qf-A7-qKLsj1M";
 $json = file_get_contents($url);
 $datos = json_decode($json,true);
 $latitud = $datos["results"][0]["geometry"]["location"]["lat"];
 $longitud= $datos["results"][0]["geometry"]["location"]["lng"];

echo "<br>";
echo "<br>";



echo "La latitud aproximada  es:" .$latitud;
echo "<br>";
echo "La longitud aproximada es es:" .$longitud;
echo "<br>";
echo "<br>";
}

?>


<html>
  <head>
    <title></title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
     
      #map {
        height: 100%;
        
	   }
     	
html, body {
        height: 80%;
        margin: 2;
        padding: 40;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
var lati = <?php echo $latitud; ?>;
var longi =<?php echo $longitud; ?>;
var map;

function initMap() {
  var myLatLng = {lat: lati, lng: longi};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Está aquí'
  });
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDveInEtsNogOoc4EggxX0_5dFmbcwq-sc&callback=initMap"
    async defer></script>
  </body>
  </html>


