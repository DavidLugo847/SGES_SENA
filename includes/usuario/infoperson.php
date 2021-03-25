
<?php
//incluye la clase Computador y CrudComputador
require_once('includes/crud_users.php');
require_once('includes/users.php');
$crudUsersAdmin= new CrudUsersAdmin();
$UsersAdmin=new UsersAdmin();
//busca el computador utilizando el id, que es enviado por GET desde la vista mostrar.php
?>
<?php
$title = 'Members Page';
require('layout/headeruser.php'); 
?>

                <?php
		extract($_GET);
		require("connect_db.php");
                
                
                $checkinstru=mysqli_query($mysqli,"SELECT * FROM info_usuario WHERE InfUsuario='$id'");
                $check_instru=mysqli_num_rows($checkinstru);

                
		?>
        </header><?php
            require_once('includes/config.php');
            require("includes/actu.php");
            require ("includes/mostrar/mostrarinfousuario.php");
	?>
	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form  method="post" action="" autocomplete="off">
                            <?php 
                            if($check_instru==0){
                                $error="Este usuario no cuenta con información personal";
                                echo '<p class="bg-danger">'.$error.'</p>';
                                ?>
                            <a href="userpage.php?accion=addinfo" class="btn btn-danger btn-lg btn-block">Agregar Información Personal</a>
                             <?php }
                             

                            else{
                            
                            ?>
				<h2>Información Personal</h2>
				<hr>
                                <input type="hidden" name="id" value="<?php echo $InfUsuario; ?>">
                                <div class="form-group">
                                    <h6>Nombres</h6>
                                    <input type="text"   class="form-control input-lg" value="<?php echo $InfNombres; ?>" readonly >
				</div>
				<div class="form-group">
                                    <h6>Apellidos</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InfApellidos; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Nombre de la Empresa</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InfEmpresa; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Cargo</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InfCargo ; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Teléfono de Contacto</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InfTelefono; ?>" readonly>
				</div>
                                <div class="form-group">
                                    <h6>Correo de Contacto</h6>
                                    <input type="email"  class="form-control input-lg"  value="<?php echo $InfCorreo; ?>" readonly>
				</div>
                                
				<hr>
			</form>
                <a class="btn btn-primary btn-lg btn-block" href="userpage.php?id=<?php echo $InfUsuario; ?>&accion=editip" style="color: white;">Editar Info</a>
		</div>
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <br><br><br>
                    

                </div>
	</div>


</div>

<?php 
                            }
require('layout/footer.php'); 
?>
</div>
       