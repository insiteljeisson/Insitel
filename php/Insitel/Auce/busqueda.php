<?php
$busqueda2="SELECT consecutivo,externo1,estadoI,requerimiento,registrocasos.fecha AS fecha1,registrocasos.hora AS hora1 FROM registrocasos INNER JOIN ingresocasos ON registrocasos.consecutivo=ingresocasos.consecutivoI WHERE estadoI='En Proceso'";
  $result=mysqli_query($conexion,$busqueda2);
  echo '<h1>Casos abiertos</h1>
  <br><table border="1" style="margin: 0 auto;"">
    
  <tr>
      
      <th>Externo</th>      
      <th>Falla</th>
      <th>Fecha</th>
      
    </tr>';

    while($row = mysqli_fetch_array($result)) {
    
   echo" 
    
    <tr>
      
      <td><a href='externo.php?exter=$row[1]&conse=$row[0]'>$row[1]</a></td>     
      <td>$row[3]</td>
      <td>$row[4]</td>
     
    </tr>
   ";
    

}
echo" </table>";


 ?>