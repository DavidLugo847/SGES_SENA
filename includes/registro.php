<?php

/*AGREGAR USUARIO X*/
 if(isset($_POST['submit'])){
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
        $estado=0;
        
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				$error [] = 'Este Gmail ya se encuentra en uso';
			}else{

				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$realname','$mail','','$pass','3','$estado')");

				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
                        $error [] = 'Las contraseñas son incorrectas';
		}

 }
  if(isset($_POST['infousuario'])){
      
	$IdUsuario=$_SESSION['UsId'];
        $nombres=$_POST['nombres'];
     	$apellidos=$_POST['apellidos'];
	$nombreempresa=$_POST['nombreempresa'];
	$cargoempresa= $_POST['cargoempresa'];
        $correo=$_POST['correo'];
	$numtelefono=$_POST['numtelefono'];
        $motivovisita=$_POST['motivovisita'];

        
        
        mysqli_query($mysqli,"INSERT INTO info_usuario VALUES('$IdUsuario','$nombres','$apellidos','$nombreempresa','$cargoempresa','$numtelefono','$correo','$motivovisita')");
        

        echo ' <script language="javascript">alert("Información registrada");</script> ';
        
        echo "<script>location.href='userpage.php'</script>";

 }
 /*CIERRA AGREGAR USUARIO X*/
 
 /*AGREGAR USUARIO ADMINISTRADOR*/
 if (isset($_POST['submitadmin'])){
     
     	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
        $estado=1;

	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				$error [] = 'Este Gmail ya se encuentra en uso';
			}else{

				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$realname','$mail','$pass','','1','$estado')");

                                /*REALIZAR UNA CONSULTA SELECT PARA MOSTRAR EL MÁXIMO VALOR DEL ID*/
                                
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
                        $error [] = 'Las contraseñas son incorrectas';
		}

 }
 /*CIERRA AGREGAR USUARIO ADMINISTRADOR*/
 
 /*AGREGAR INSTRUTOR*/
  if (isset($_POST['submitinstru'])){
     
     	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
        $estado=1;

	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				$error [] = 'Este Gmail ya se encuentra en uso';
			}else{

				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$realname','$mail','','$pass','2','$estado')");
                                $IdUser= mysqli_insert_id($mysqli);
				echo "<script>location.href='adminpage.php?IdUser=$IdUser&accion=addinstruinfo'</script>";
				
			}
			
		}else{
                        $error [] = 'Las contraseñas son incorrectas';
		}

 }
 /*CIERRA AGREGAR INSTRUCTOR*/
?>