window.addEventListener('load', init, false);

        function init() {
            var inputFilepmt = document.querySelector('#inputFilepmt');
            inputFilepmt.addEventListener('change', mostrarImagen4, false);
        }

        function mostrarImagen4(e) {
            var img4 = document.querySelector('#img4');
            var inputFilepmt = document.querySelector('#inputFilepmt');
            img4.src = inputFilepmt.value;
        }

        function init() {
  var inputFilepmt = document.getElementById('inputFilepmt');
inputFilepmt.addEventListener("change", mostrarImagen4, false);
}



function mostrarImagen4(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('img4');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}