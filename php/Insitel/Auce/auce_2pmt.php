<?php 

  function agregabloqueocomp1(){
	   if (isset($_GET['Componenteget'])=="") {
		echo '<select onclick="componentes();" id="componente" name="componente" class="select1">' ;}
		else{
        echo '<select onclick="componentes();" id="componente" name="componente" class="select1" disabled>' ;}
		}
        
	   function agregabloqueodes1(){
	   $iddetalleget=(isset($_GET['detalladaget'])    ? $_GET['detalladaget']    : '');
	   if (isset($_GET['Componenteget'])=="") {
	   	
		echo'<input  type="" name="descripcionf" class="select1" value="'.$iddetalleget.'">';}
		else{
       echo'<input readonly  type="" name="descripcionf" class="select1" value="'.$iddetalleget.'">';
		}
	}
 
echo '<section>
            <div class="div3">		
			<label style="background-color: silver;">Imagen vehiculo parqueado</label>'?><select onclick="Vehiculo0();" onchange="Vehiculo00();"id="Vehiculo" name="Vehiculo" class="select1"><option></option><option>Vehiculo</option></select>
			<label style="background-color: silver;">Descripcion placa</label><select onclick="placa0();" onchange="placa00();" name="Placa" class="select1" id="Placa" >
				<script type="text/javascript">

				function Vehiculo0(){	

					const Vehiculo =document.getElementById('Vehiculo').value;
					  				    
				        switch(Vehiculo) {
				        	case "":				                
				                 document.getElementById("Placa").innerHTML ="<option></option>"
				            break;
				            case "Vehiculo":				                
				                 document.getElementById("Placa").innerHTML ="<option></option><option>SQI-622</option><option>TFU-150</option><option>ADICIONAR</option>"	
				                 break;					                 
				            
				            default:
				                //
			        }}
			   
					    
</script>						 
						
				</script>

				<!-- <option>anticorrosivo</option>
				<option>aislamiento</option>
				<option>picaporte</option>
				<option>adptador 12v</option>
				<option>cinta led</option>
				<option>ventiladores</option>
				<option>chapa</option>
				<option>terminales</option>
				<option>Tornilleria</option>
				<option>puertas</option>
				<option>estructura</option> -->
			</select>
	

			 <label>EVIDENCIA PARQUEO VEHICULO</label>
			 <img id="img3" class="img1">
			 <input id="inputFilevehiculo" name="seleccionArchivosvehiculo" type="file">		
			
			</div>
			

		</section>
		<section class="barra">
		 <div class="div3">		
			<label style="background-color: silver;text-align: left;">Imagen PMT</label><select onclick="PMT0();" onchange="PMT00();"id="PMT" name="PMT" class="select1"><option></option><option>PMT</option></select>
			<label style="background-color: silver;text-align: left;">Descripcion</label><select onclick="DPMT0();" onchange="DPMT00();" id="DPMT" name="DPMT" class="select1"  >
				<script type="text/javascript">

				function PMT0(){	

					const PMT =document.getElementById('PMT').value;
					  				    
				        switch(PMT) {
				        	case "":				                
				                 document.getElementById("DPMT").innerHTML ="<option></option>"
				            break;
				            case "PMT":				                
				                 document.getElementById("DPMT").innerHTML ="<option></option><option>PMT Inicio</option>"	
				                 break;					                 
				            
				            default:
				                //
			        }}
			   
					    
                </script>						 
						
				

				<!-- <option>anticorrosivo</option>
				<option>aislamiento</option>
				<option>picaporte</option>
				<option>adptador 12v</option>
				<option>cinta led</option>
				<option>ventiladores</option>
				<option>chapa</option>
				<option>terminales</option>
				<option>Tornilleria</option>
				<option>puertas</option>
				<option>estructura</option> -->
			</select>
	

			 <label>EVIDENCIA PMT (2 IMAGENES)</label>
			 <img id="img4" class="img1" onmousemove="inputFilepmt();">
			 <input id="inputFilepmt" name="seleccionArchivospmt" type="file"  multiple>		
			
			</div>

			<script type="text/javascript">

			 function Vehiculo00(){	
             const Vehiculo =document.getElementById('Vehiculo').value;
             if (Vehiculo=="") {
             alert("Vehiculo vacio");
             }else{
             
             }

         }

			function placa00(){	
			             const Placa =document.getElementById('Placa').value;
			             if (Placa=="") {
			             alert("Placa 0vacio");
			             }else{
			             
			             }

			         }

		  function PMT00(){	
			             const PMT =document.getElementById('PMT').value;
			             if (PMT=="") {
			             alert("PMT 0vacio");
			             }else{
			             
			             }

			         }

          function DPMT00(){	
			             const DPMT =document.getElementById('DPMT').value;
			             if (DPMT=="") {
			             alert("DPMT 0vacio");
			             }else{
			             
			             }


			         }


// function inputFilepmt(){	
//              const inputFilepmt =document.getElementById('inputFilepmt').value;
//               if(inputFilepmt.files.length != 0 ){             
//             alert("no no no jo")
//              }else{
              
//              }

//          }


         
            </script>
			
			
            

            
		</section>
	