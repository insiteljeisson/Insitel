window.addEventListener('load', init, false);

        function init() {
            var inputFile2 = document.querySelector('#inputFile2');
            inputFile2.addEventListener('change', mostrarImagen2, false);
        }

        function mostrarImagen2(e) {
            var img2 = document.querySelector('#img2');
            var inputFile2 = document.querySelector('#inputFile2');
            img2.src = inputFile2.value;
        }

function init() {
  var inputFile2 = document.getElementById('inputFile2');
  inputFile2.addEventListener('change', mostrarImagen2, false);
}



function mostrarImagen2(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img2 = document.getElementById('img2');
    img2.src= event.target.result;
  }
  reader.readAsDataURL(file);
}
