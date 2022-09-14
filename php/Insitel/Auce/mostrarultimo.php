  <?php  
  $ultimo ="SELECT * FROM ingresocasos ORDER BY consecutivoI desc";
        $resulta = mysqli_query($conexion,$ultimo);
        // if ($resulta=="") {
          // code...
        
        $fila = mysqli_fetch_row($resulta);
        if ($fila[0]=="") {
          echo "sin registros";
              
           echo $externo=(isset($_POST['externo'])    ? $_POST['externo']    : ''); 
           }else{
              echo"Datos Del Ultimo Registro";
                        echo "<TABLE BORDER>
                         <TR>
                          <TH>Estado</TH><TH>fecha</TH>
                        </TR>
                         <TR>
                          <TH>$fila[1]</TH><TD>$fila[2]</TD>
                        </TR>
                        <TR>
                          <TH>Consecutivo</TH><TH>componente</TH><TH>descripcionf</TH>
                        </TR>
                        <TR>
                          <TD>$fila[0]</TD><TD>$fila[4]</TD><TD>$fila[5]</TD> 
                        </TR>

                        <TR>
                         <TH>Externo</TH><TH>detalle</TH><TH>descripcions</TH>
                        </TR>
                        <TR>
                         <TD>$fila[3]</TD><TD>$fila[6]</TD><TD>$fila[7]</TD>
                        </TR>
                       
                      </TABLE>";


   }  
            
  ?>      
 
