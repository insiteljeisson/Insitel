<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<button id="boton">aca aparece</button>
<div id="response"></div>		
<script>

function ajax(){
const http= new XMLHttpRequest();
const url = 'Insitel/php/Insitel/Auce/Auce_1.php';

http.onreadystatechange=function(){
 if(this.readyState == 4 && this.status == 200){
    console.log(this.responsiveText);
     document.getElementById("response").innerHtml = this.responsiveText;
}
}

http.open("GET",url);
http,send();
}

document.getElementById("boton").addEventListener("click",function(){
ajax();
});
</script>	