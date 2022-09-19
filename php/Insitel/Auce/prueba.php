<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <div id="milocalizacion">hola</div>
<script type="text/javascript">

if (navigator.geolocation) {

// alert("puedes obtener geo");
navigator.geolocation.getCurrentPosition(success);
}
else{
alert("no puedes obtener geo");
}

function success(pes){
    let coordenadas = pes.coordenadas;
    document.getElementById("milocalizacion").innerHTML = "latitud: " + coordenadas.latitude + "<br>" + "longitud: " + coordenadas.longitude;
alert("te he encontrado");

}

var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;

  console.log('Your current position is:');
  var latitud = console.log('Latitude : ' + crd.latitude);
  console.log('Longitude: ' + crd.longitude);
  console.log('More or less ' + crd.accuracy + ' meters.');
};

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};

navigator.geolocation.getCurrentPosition(success, error, options);


document.getElementById("milocalizacion").innerHTML =crd.latitude + latitud ;

</script>



<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p><strong>Note:</strong> The geolocation property is not supported in IE8 and earlier versions.</p>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

document.getElementById("milocalizacion").innerHTML =position.coords.latitude + position.coords.longitude ;
</script>

</body>




<script>
$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

 var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    return latitude;
function showLocation(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    return latitude;
}
</script>

</html>



</body>
</html>



















              
             

 

  

