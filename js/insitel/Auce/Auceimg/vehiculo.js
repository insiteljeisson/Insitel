window.addEventListener('load', init, false);

        function init() {
            var inputFilevehiculo = document.querySelector('#inputFilevehiculo');
            inputFilevehiculo.addEventListener('change', mostrarImagen3, false);
        }

        function mostrarImagen3(e) {
            var img3 = document.querySelector('#img4');
            var inputFilevehiculo = document.querySelector('#inputFilevehiculo');
            img3.src = inputFilevehiculo.value;
        }

        function init() {
  var inputFilevehiculo = document.getElementById('inputFilevehiculo');
inputFilevehiculo.addEventListener("change", mostrarImagen3, false);
}



function mostrarImagen3(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('img3');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}