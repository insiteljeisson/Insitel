<?php mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_1Vehiculo/".$Idimagen,0777,true);
      $ruta="../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_1Vehiculo/".$Idimagen."/".$name;


            mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_2PMT_inicio/".$Idimagen1,0777,true);          
            $ruta1="../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/_2PMT_inicio/".$Idimagen1."/".$name1;


            
              if(!file_exists($ruta)){ 
                                                
                    move_uploaded_file($tmp ,$ruta);
                      // echo "<script>alert('archivo 1 agregado correctamente');</script>";
                        // $archivo ="";

                        }else{          
                        
                        echo "<script>alert('ya existe el archivo seleccionado intente con otro');window.history.back(-1);</script>";
                          // $archivo ="";
                          die;
                            }
                          

             
      
              if(!file_exists($ruta1)){ 
                                                
                    move_uploaded_file($tmp1 ,$ruta1);
                      // echo "<script>alert('archivo 2 agregado correctamente');window.history.back(-1);</script>";
                        // $archivo1 ="";
                        
                        }else{          
                        
                         echo "<script>alert('ya existe el archivo seleccionado intente con otro');window.history.back(-1);</script>";
                          // $archivo1 ="";
                          die;
                            }               


 

      ?>