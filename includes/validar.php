
<?php
//include("connect_db.php");

//$miconexion = new connect_db;

if(isset($_POST['submitval'])){
    
    session_start();

                $username=$_POST['nick'];
                $pass=$_POST['password'];


                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$username' and UsRol=1");
                if($f2=mysqli_fetch_assoc($sql2)){
                        if($pass==$f2['UsPassadmin']){
                                $_SESSION['UsId']=$f2['UsId'];
                                $_SESSION['UsName']=$f2['UsName'];
                                $_SESSION['UsRol']=$f2['UsRol'];
                                
                        
                                echo "<script>location.href='adminpage.php'</script>";

                        }
                        else {
                                echo '<script>alert("CONTRASEÑA ERRONEA")</script> ';
                        }
                }


                $sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$username' and UsRol=2");
                if($f=mysqli_fetch_assoc($sql)){
                        if($pass==$f['UsPassword']){
                                $_SESSION['UsId']=$f['UsId'];
                                $_SESSION['UsName']=$f['UsName'];
                                $_SESSION['UsRol']=$f['UsRol'];

                                header("Location: memberpage.php");
		}else{
			echo '<script>alert("CONTRASEÑA ERRONEA")</script> ';
		
		}
                }
                $sql3=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsMail='$username' and UsRol=3");
                if($f3=mysqli_fetch_assoc($sql3)){
                        if($pass==$f3['UsPassword']){
                                $_SESSION['UsId']=$f3['UsId'];
                                $_SESSION['UsName']=$f3['UsName'];
                                $_SESSION['UsRol']=$f3['UsRol'];
                                $_SESSION['UsEstado']=$f3['UsEstado'];
                                
                                header("Location: userpage.php");
		}else{
			$error [] = 'Contraseña incorrecta';
		
		}
                }
                else{
                        $error [] = 'Datos erroneos, por favor revise nuevamente el correo y la contraseña.';
                }


}

                        

?>