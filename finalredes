<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>UTILIZACION API DE GOOGLE </title>

 </head>
  <body>
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
}

?>
