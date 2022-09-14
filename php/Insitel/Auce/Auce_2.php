<?php  echo '<section >
            <div class="div3">		
			<label style="background-color: silver;">Componente falla</label>'?><?php  agregabloqueocomp();	?><option ><?php $id=(isset($_GET['Componenteget'])    ? $_GET['Componenteget']    : '');$Componenteget=$id; echo "$Componenteget"; ?></option><option>PMT</option><option>corrosion</option><option>falta aislamiento</option><option>picaporte</option><option>adptador 12v</option><option>cinta led</option><option>ventiladores</option><option>chapa</option><option>terminales</option><option>Tornilleria</option><option>puertas</option><option>estructura</option></select>
			<label style="background-color: silver;">Descripcion detallada de la falla</label><?php  agregabloqueodes();?>	

			 <label>evidencia falla</label>
			 <img id="img1" class="img1">
			 <input id="inputFile1" name="seleccionArchivos" type="file">		
			
			</div>
			

		</section>
		<section class="barra">
			<div class="div3">		
			<label>detalle Solución</label>
			<select name="detalle" class="select1" id="detalle" onclick="componentes();">
				<script type="text/javascript">

				function componentes(){	

					const componente =document.getElementById('componente').value;
					  				    
				        switch(componente) {
				        	case "":				                
				                 document.getElementById("detalle").innerHTML ="<option></option>"
				            break;
				            case "PMT":				                
				                 document.getElementById("detalle").innerHTML ="<option>PMT Inicio con hora</option><option>PMT Inicio Sin Hora</option><option>PMT Fin Sin Hora</option>"	
				                 break;					                 
				            case "corrosion":				                
				                 document.getElementById("detalle").innerHTML ="<option>anticorrosivo</option>"
				            break;
				            case "falta aislamiento":
				                document.getElementById("detalle").innerHTML ="<option>aislamiento</option>"
				            break;
				             case "picaporte":
				                document.getElementById("detalle").innerHTML ="<option>picaporte</option>"
				            break;
				             case "adptador 12v":
				                document.getElementById("detalle").innerHTML ="<option>adptador 12v</option>"
				            break;
				             case "cinta led":
				                document.getElementById("detalle").innerHTML ="<option>cinta led</option>"
				            break;
				             case "ventiladores":
				                document.getElementById("detalle").innerHTML ="<option>ventiladores</option>"
				            break;
				             case "chapa":
				                document.getElementById("detalle").innerHTML ="<option>chapa</option>"
				            break;
				             case "terminales":
				                document.getElementById("detalle").innerHTML ="<option>terminales</option>"
				            break;
				             case "Tornilleria":
				                document.getElementById("detalle").innerHTML ="<option>Tornilleria</option>"
				            break;
				             case "puertas":
				                document.getElementById("detalle").innerHTML ="<option>puertas</option>"
				            break;
				            case "estructura":
				                document.getElementById("detalle").innerHTML ="<option>estructura</option>"
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




			<label>Descripcion detallada de la Solución</label><input type="" name="descripcions" class="select1">	

			 <label>evidencia Solucion</label>
			 <img id="img2" class="img1">
			 <input id="inputFile2" name="seleccionArchivos1" type="file" multiple>
            

            
		</section>
	