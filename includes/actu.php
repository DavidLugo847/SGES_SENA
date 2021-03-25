<?php

/*ACTUALIZAR DATOS USUARIO*/

    if(isset($_POST['submitusuario'])){
        
        
            extract($_POST);

            $checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$mail'");
            $check_mail=mysqli_num_rows($checkemail);
		if($pasadmin==$rpass){
			if($check_mail>1){
				$erroradmin [] = 'Este Gmail ya se encuentra en uso';
			}else{
                            
                require("connect_db.php");
                $sentencia="update usuarios set UsName='$UsNombre', UsMail='$mail', UsPassword='$pasadmin' where UsId='$id'";
                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $resent=mysqli_query($mysqli,$sentencia);
                if ($resent==null) {
                        echo "Error de procesamieno no se han actuaizado los datos";
                        echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
                        header("location:admin/admin.php");

                        echo "<script>location.href='admin/admin.php'</script>";
                }            
           
                else {
                echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
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
                }
                        
                        
                        

    }else{
                        $erroradmin [] = 'Las contraseñas son incorrectas';
		}
} 
    
                            
/*ACTUALIZAR DATOS DEL ADMINISTRADOR*/
 if(isset($_POST['submit'])){

extract($_POST);

        $checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pasadmin==$rpass){
			if($check_mail>1){
				$erroradmin [] = 'Este Gmail ya se encuentra en uso';
			}else{


	require("connect_db.php");
	$sentencia="update usuarios set UsName='$UsNombre', UsMail='$mail', UsPassadmin='$pasadmin' where UsId='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:admin/admin.php");
		
		echo "<script>location.href='admin/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='adminpage.php?accion=gestadmin'</script>";

        }
	}
 }else{
                        $erroradmin [] = 'Las contraseñas son incorrectas';
		}
} 

/*CIERRA ACTUALIZAR DATOS DE ADMINISTRADOR*/          

/*ACTUALIZAR DATOS DEL INSTRUCTOR*/
/*ACTUALIZAR DATOS CUENTA*/

if(isset($_POST['submitinstru'])){
    
/*Se comprueban los datos para el gmail*/
    
extract($_POST);

        $checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>1){
				$errorinstru [] = 'Este Gmail ya se encuentra en uso';
			}else{


	require("connect_db.php");
	$sentencia="update usuarios set UsName='$UsNombre', UsMail='$mail', UsPassword='$pass' where UsId='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
        
/*Por si hay errores xd*/        
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:admin/admin.php");
		
		echo "<script>location.href='admin/admin.php'</script>";
	}
/*Pero si todo va bien pasa a este else donde se comprueba si este instructor tiene información personal*/
                        else {
                        
                        $UsRol=$_SESSION['UsRol'];
                            
                        $checkinstru=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsRol=2 and UsId='$id'");
                        $check_instru=mysqli_num_rows($checkinstru);
                        
/*Si no tiene información personal muestra este error*/
			if($check_instru==0){
			echo "<script>location.href='adminpage.php?IdUser=$id&accion=addinstruinfo'</script>";                     
			}
                        
/*Pero si tiene información personal pasa al siguiente formulario*/
                        else{
                            $rol=$_SESSION['UsRol'];
                            
                            if ($rol==1){
                                echo "<script>location.href='adminpage.php?idinstru=$id&accion=ainfinstr'</script>";
                            }
                            elseif ($rol==2) {

                                echo "<script>location.href='memberpage.php?id=$id&accion=infocount'</script>";
                        }

                        }
			}	
                        

        
	}
 }else{
                        $errorinstru [] = 'Las contraseñas son incorrectas';
		}  
}
/*ACTUALIZAR INFORMACIÓN PERSONAL */

if(isset($_POST['submitinstru2'])){
    
extract($_POST);

        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="media/fotos/".$foto;
        copy($ruta,$destino);

        $checkemail=mysqli_query($mysqli,"SELECT * FROM instructor WHERE InsUsuario='$id'");
        $check_mail=mysqli_num_rows($checkemail);

	require("connect_db.php");
	$sentencia="update instructor set InsTipodoc='$tipodoc', InsIdentificacion='$numid', InsNombres='$nombres', InsApellidos='$apellidos', InsTelefono='$telefono', InsCorreo='$correo',InsFoto='$destino' where InsUsuario='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:admin/admin.php");
		
		echo "<script>location.href='admin/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		$rol=$_SESSION['UsRol'];
                            
                            if ($rol==1){
                                echo "<script>location.href='adminpage.php?accion=gestinstru'</script>";
                            }
                            elseif ($rol==2) {
                                echo "<script>location.href='memberpage.php?id=$id&accion=infoperson'</script>";
                        }
		

        }
	
 }else{
                        $error [] = 'Las contraseñas son incorrectas';
		}
/*CIERRA INFORMACIÓN INSTRUCTOR*/

                
                
                
                
                
                
/*ACTUALIZAR INFORMACIÓN PERSONAL EGRESADO*/
if(isset($_POST['submite'])){
    
extract($_POST);

        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="media/fotos/".$foto;
        copy($ruta,$destino);

        $checkemailEg=mysqli_query($mysqli,"SELECT * FROM egresado WHERE EgId='$id'");
	$check_mailEg=mysqli_num_rows($checkemailEg);


	$sentencia="update egresado set EgNombres='$nombres', EgApellidos='$apellidos', EgTipodoc='$tipodoc', EgNumdoc='$numdoc', EgFechanacimiento='$fechanacimiento', EgCiudadre='$ciudadr', EgNumtelefono='$numtelefono', EgFoto='$destino' where EgId='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';

		
		echo "<script>location.href='admin/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		$rol=$_SESSION['UsRol'];
                            
                            if ($rol==1){
                                echo "<script>location.href='adminpage.php?accion=gestegresado'</script>";
                            }
                            elseif ($rol==2) {
                                echo "<script>location.href='memberpage.php?id=$id&accion=egresados'</script>";
                        }
		

        }
	
 }
 /*ACTUALIZAR ESTUDIOS DEL EGRESADO*/
 if(isset($_POST['estudios'])){
    
extract($_POST);

        $Estcertificado=$_FILES["certificado"]["name"];
        $ruta=$_FILES["certificado"]["tmp_name"];
        $destino="media/certificados/".$Estcertificado;
        copy($ruta,$destino);

        $checkEst=mysqli_query($mysqli,"SELECT * FROM estudios WHERE EstId='$id'");
	$check_Est=mysqli_num_rows($checkEst);


	$sentencia="update estudios set EstNivelFormacion='$nivelf', EstNameTitulo='$nombrecurso', EstAnioInicio='$fechainicio', EstAnioFin='$fechafinal', EstLugarGraduacion='$sedegradu', EstCertificado='$destino' where EstId='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';

		
		echo "<script>location.href='admin/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		$rol=$_SESSION['UsRol'];
                            
                            if ($rol==1){
                                echo "<script>location.href='adminpage.php?accion=gestegresado'</script>";
                            }
                            elseif ($rol==2) {
                                echo "<script>location.href='memberpage.php?id=$id&accion=egresados'</script>";
                        }
		

        }
	
 }
/*CIERRA ACTUALIZAR INFORMACIÓN PERSONAL EGRESADO*/
 

 /*ACTUALIZAR INFORMACIÓN PERSONAL USUARIO*/
 
 if(isset($_POST['actusuairo'])){
    
extract($_POST);



	$sentencia="update info_usuario set InfNombres='$nombres', InfApellidos='$apellidos', InfEmpresa='$nombreempresa', InfCargo='$cargoempresa', InfTelefono='$numtelefono', InfCorreo='$correo', InfMotivovisita='$motivovisita' where InfUsuario='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';

		
		echo "<script>location.href='admin/admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		$rol=$_SESSION['UsRol'];
                            
                            if ($rol==1){
                                echo "<script>location.href='adminpage.php?accion=gestegresado'</script>";
                            }
                            elseif ($rol==2) {
                                echo "<script>location.href='memberpage.php?id=$id&accion=egresados'</script>";
                        }
                            elseif ($rol==3) {
                                 echo "<script>location.href='userpage.php?id=$id&accion=infoperson'</script>";
                    }
		

        }
	
 }

 if(isset($_POST['actcal'])){
    
    extract($_POST);
    
    
    
        $sentencia="update calificacion set CaPuntualidad='$punt', CaResponsabilidad='$resp', CaDisciplina='$discip', CaPresPersonal='$ppersonal', CalDesempeno='$desem', CaPromedio='$promedio' where CaId ='$id'";
        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $resent=mysqli_query($mysqli,$sentencia);
        if ($resent==null) {
            echo "Error de procesamieno no se han actuaizado los datos";
            echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
    

        }else {
            echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
            $rol=$_SESSION['UsRol'];
                                
                                if ($rol==1){
                                    echo "<script>location.href='adminpage.php?id=$idEg&accion=vercal'</script>";
                                }
                                elseif ($rol==2) {
                                    echo "<script>location.href='memberpage.php?id=$idEg&accion=vercal'</script>";
                            }
                                elseif ($rol==3) {
                                     echo "<script>location.href='userpage.php?id=$idEg&accion=vercal'</script>";
                        }
            
    
            }
        
     }



 /*CIERRA ACTUALIZAR INFORMACIÓN PERSONAL USUARIO*/
 
 
 
 if(isset($_POST['sentpeticion'])){
     require("connect_db.php");
    
     
     
    extract($_GET);
    
    $id=$_POST['id'];
    
    $petacept="update usuarios set UsEstado=10 WHERE UsId=$id";
    $respetacept=mysqli_query($mysqli,$petacept);
    echo '<script>alert("Petición enviada")</script> ';
    //header('Location: proyectos.php');

 }

 
 
 if(isset($_POST['actupeticion'])){


require("connect_db.php");
    extract($_POST);

    $sentencia="update info_usuario set InfMotivovisita='$motivovisita' where InfUsuario='$id'";
    $resent=mysqli_query($mysqli,$sentencia);
    $petacept="update usuarios set UsEstado=10 WHERE UsId=$id";
    $respetacept=mysqli_query($mysqli,$petacept);
    
   echo '<script>alert("Petición enviada")</script> ';

   //header('Location: proyectos.php');

}
?>