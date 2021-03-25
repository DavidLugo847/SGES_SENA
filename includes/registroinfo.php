<?php

/*INSERTAR INFORMACIÓN PERSONAL INSTRU*/
if (isset($_POST['submitinstru'])){
        
        $Idins=$_POST['id'];
        $tipodoc=$_POST['tipodoc'];
     	$identificacion=$_POST['numid'];
	$nombres=$_POST['nombres'];
	$apellidos= $_POST['apellidos'];
	$telefono=$_POST['telefono'];
        $correo=$_POST['correo'];

        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="media/fotos/".$foto;
        copy($ruta,$destino);
        
        
        mysqli_query($mysqli,"INSERT INTO instructor VALUES('','$Idins','$tipodoc','$identificacion','$nombres','$apellidos','$telefono','$correo','$destino')");
        

        echo ' <script language="javascript">alert("Información Personal Registrada");</script> ';
        
        $rol=$_SESSION['UsRol'];
                            
                            if ($rol==1){
                                echo "<script>location.href='adminpage.php?accion=gestadmin'</script>";
                            }
                            elseif ($rol==2) {

                                echo "<script>location.href='memberpage.php'</script>";
                            }
                            elseif ($rol==3) {

                                echo "<script>location.href='userpage.php?id=$id&accion=infocount'</script>";
                            }
       
				
			}

 /*CIERRA AGREGAR INFORMACIÓN PERSONAL INSTRUCTOR*/
/*INSERTAR INFORMACIÓN EGRESADO*/
if (isset($_POST['submite'])){
        
        $EgNombres=$_POST['nombres'];
        $EgApellidos=$_POST['apellidos'];
     	$EgTipodoc=$_POST['tipodoc'];
	$EgNumdoc=$_POST['numdoc'];
	$EgFechaN= $_POST['fechanacimiento'];
	$EgCiudadre=$_POST['ciudadr'];
        $EgNumtelefono=$_POST['numtelefono'];

        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="media/fotos/".$foto;
        copy($ruta,$destino);
        
        
        mysqli_query($mysqli,"INSERT INTO egresado VALUES('','$EgNombres','$EgApellidos','$EgTipodoc','$EgNumdoc','$EgFechaN','$EgCiudadre','$EgNumtelefono','$destino')");
        
        $Rol=$_SESSION['UsRol'];
        if ($Rol==1){
        echo ' <script language="javascript">alert("Información Personal Registrada");</script> ';
        
        echo "<script>location.href='adminpage.php?accion=gestegresado'</script>";   
        }
        elseif ($Rol==2){
        echo ' <script language="javascript">alert("Información Personal Registrada");</script> ';
        
        echo "<script>location.href='memberpage.php?accion=egresados'</script>";   
        }
				
			}
/*ESTUDIO EGRESADO*/
       if (isset($_POST['estudios'])){
        $EstIdUser=$_POST['id'];
        $Estnivelformacion=$_POST['nivelf'];
        $Estnombrecurso=$_POST['nombrecurso'];
     	$Estfechainicio=$_POST['fechainicio'];
	$Estfechafinal=$_POST['fechafinal'];
	$Estsedegradu= $_POST['sedegradu'];

        $Estcertificado=$_FILES["certificado"]["name"];
        $ruta=$_FILES["certificado"]["tmp_name"];
        $destino="media/certificados/".$Estcertificado;
        copy($ruta,$destino);
        
        
        
        mysqli_query($mysqli,"INSERT INTO estudios VALUES('','$EstIdUser','$Estnivelformacion','$Estnombrecurso','$Estfechainicio','$Estfechafinal','$Estsedegradu','$destino')");
        
        $Rol=$_SESSION['UsRol'];
        if ($Rol==1){
        echo ' <script language="javascript">alert("Estudio agregado");</script> ';
        
        echo "<script>location.href='adminpage.php?accion=gestegresado'</script>";   
        }
        elseif ($Rol==2){
        echo ' <script language="javascript">alert("Información Personal Registrada");</script> ';
        
        echo "<script>location.href='memberpage.php?accion=egresados'</script>";   
        }
          
         
				
			} 
 /*CIERRA AGREGAR INFORMACIÓN EGRESADO*/
                        
/*HOJA DE VIDA EGRESADO*/
       if (isset($_POST['submitehoja'])){
        $EgId=$_POST['id'];

        $consulta=("SELECT COUNT(*) FROM hoja_vida where HvEgresado=$EgId");    
        $ressqll=mysqli_query($mysqli,$consulta);
        while ($row=mysqli_fetch_row ($ressqll)){
                $consultaresult=$row[0]; 
        }
        if($consultaresult>=1){
                echo ' <script language="javascript">alert("Este usuario ya cuenta con una hoja de vida");</script> ';
                

                $Rol=$_SESSION['UsRol'];
                if ($Rol==1){
               
                
                echo "<script>location.href='adminpage.php?accion=addhoja'</script>";   
                }
                elseif ($Rol==2){                
                
                echo "<script>location.href='memberpage.php?accion=addhoja'</script>";   
                }
        }
        else{
                mysqli_query($mysqli,"INSERT INTO hoja_vida (HvEgresado) VALUES ($EgId)");
        
                $Rol=$_SESSION['UsRol'];
                if ($Rol==1){
                echo ' <script language="javascript">alert("Hoja de vida agregada");</script> ';
                
                echo "<script>location.href='adminpage.php?accion=gestionhoja'</script>";   
                }
                elseif ($Rol==2){
                echo ' <script language="javascript">alert("Hoja de vida agregada");</script> ';
                
                echo "<script>location.href='memberpage.php?accion=gesthojas'</script>";   
                }

        }
                                        

        
                
         
				
			} 
 /*CIERRA AGREGAR INFORMACIÓN EGRESADO*/
                        
/*CALIFICACIÓN HOJA DE VIDA EGRESADO*/
      if (isset($_POST['submitProm'])){
          

        $calHvId=$_POST['id'];
        $puntualidad=$_POST['punt'];
        $responsabilidad=$_POST['resp'];
     	$disciplina=$_POST['discip'];
	$ppersonal=$_POST['ppersonal'];
	$desempenio= $_POST['desem'];
        $promedio=$_POST['promedio'];
        
        mysqli_query($mysqli,"INSERT INTO calificacion VALUES('','$calHvId','$puntualidad','$responsabilidad','$disciplina','$ppersonal','$desempenio','$promedio')");
        
        $Rol=$_SESSION['UsRol'];
        if ($Rol==1){
        echo ' <script language="javascript">alert("Calificación agregada");</script> ';
        
        echo "<script>location.href='adminpage.php?accion=gestionhoja'</script>";   
        }
        elseif ($Rol==2){
        echo ' <script language="javascript">alert("Calificación agregada");</script> ';
        
        echo "<script>location.href='memberpage.php?accion=gesthojas'</script>";   
        }  
           
 
      }
/*CIERRA CALIFICACIÓN HOJA DE VIDA EGRESADO*/
?>