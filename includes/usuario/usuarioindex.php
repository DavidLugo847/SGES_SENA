
<?php require('includes/config.php'); 
$title = 'Members Page';
require("connect_db.php");
require('layout/headeruser.php'); 
require("includes/actu.php");

extract($_GET);
$id=$_SESSION['UsId'];
$sql="SELECT * FROM info_usuario WHERE InfUsuario=$id";
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
        $InfMotivovisita=$row[7];
    }

?>

<div class="capabilities" id="capabilities">


<!-- //capabilities -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
<script src="js/responsiveslides.min.js"></script>  


<div class="container">

	<div class="row">

	    
			
                                <h2>Bienvenido <?php echo$_SESSION['UsName']; ?></h2>
				
				<hr>
                                <?php
                                
                                    require("connect_db.php");
                                    
                                    $check=mysqli_query($mysqli,"SELECT * FROM info_usuario WHERE InfUsuario='$id'");
                                    $check_s=mysqli_num_rows($check);
                                    
                                    $sql="SELECT * FROM usuarios WHERE UsId=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                                    $ressql=mysqli_query($mysqli,$sql);
                                    while ($row=mysqli_fetch_row ($ressql)){

                                            $UsEstado=$row[6];
                                        }
                                if($check_s==0){
                                
                                    ?>
                                <p>Por favor registre su información personal</p>
                                <a  href="userpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infoperson">Registrar información personal</a>
                                <?php
                                }
                                else{
                                if($UsEstado==0){;
                                        ?>
                                <div class="form-group">
                                    
                                    <div id="caja1" style=" display: none;">
                                    <h4>Petición de acceso</h4>
                                    <h6>Motivo de la visita</h6>
                                    <form  method="post">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <textarea name="motivovisita" rows=5" cols="75" style="width: 100%;"><?php echo $InfMotivovisita; ?></textarea>
                                    <input type="submit" name="actupeticion" value="Envíar petición">
                                    </form>
                                    </div>
                                    
                                    <a id="boton" value="Ocultar" class="btn btn-primary btn-lg btn-block" onclick="Mostrar_Ocultar2()" style="color: white;">Redactar petición de acceso</a>
                                    
                                    
                                    
				</div>  
                                <?php 
                                }
                                elseif ($UsEstado==2){
                                    echo "<script>location.href='userpage.php?accion=inicio'</script>";
                            }
                                elseif ($UsEstado==3){
                                    echo 'Su petición fue rechazada, por favor procure especificar mejor el motivo de la visita e intente nuevamente.';
                                    ?>
                                    <div id="caja1" style=" display: none;">
                                    <h4>Petición de acceso</h4>
                                    <h6>Motivo de la visita</h6>
                                    <form  method="post">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <textarea name="motivovisita" rows=5" cols="75" style="width: 100%;"><?php echo $InfMotivovisita; ?></textarea>
                                    <input type="submit" name="actupeticion" value="Envíar petición">
                                    </form>
                                    </div>
                                    
                                    <a id="boton" value="Ocultar" class="btn btn-primary btn-lg btn-block" onclick="Mostrar_Ocultar2()" style="color: white;">Redactar petición de acceso</a>
                                    <?php
                            }
                                elseif ($UsEstado==10){
                                    echo 'Su petición está en estado de espera, por favor espere hasta que un administrador revise los motivos de su visita.';
                            }
                                }
                                
                                ?>
                                
		</div>
	</div>


</div>

<?php 

require('layout/footer.php'); 
?>
