
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
require('layout/headeradmin.php'); 
?>

    <?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM usuarios WHERE UsId=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$UsNombre=$row[1];
		    	$mail=$row[2];
		    	$pass=$row[4];

		    }



		?>


        </header><?php
            require_once('includes/config.php');
            require("includes/actu.php");

	?>
	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form  method="post" action="" autocomplete="off">
				<h2>Actualizar Datos de Cuenta</h2>
				<hr>
                                 <?php
				if(isset($errorinstru)){
					foreach($errorinstru as $errorinstru){
						echo '<p class="bg-danger">'.$errorinstru.'</p>';
					}
				};
                                ?>
                                
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
                                    <h6>Nombre de Usuario</h6>
                                    <input type="text" name="UsNombre" id="username" class="form-control input-lg" placeholder="Usuario" value="<?php echo $UsNombre; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Correo</h6>
                                    <input type="email" name="mail" id="email" class="form-control input-lg" placeholder="ejemplo@gmail.com" value="<?php echo $mail; ?>" required>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
                                                        <h6>Contraseña</h6>
							<input type="text" name="pass" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" value="<?php echo $pass; ?>" required>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
                                                        <h6>Confirmar contraseña</h6>
                                                        <input type="text" name="rpass" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4" required>
						</div>
					</div>
				</div>	
				<hr>
				<div class="row">
                                    <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitinstru" value="Actualizar" tabindex="5"></div>
                                    <div class="col-xs-6 col-md-6"><a  class="btn btn-primary btn-block btn-lg" style="color: white;" href="adminpage.php?idinstru=<?php echo $id;?>&accion=ainfinstr">Omitir</a></div>					
				</div>
			</form>
		</div>
	</div>



</div>

<?php 
require('layout/footer.php'); 
?>
</div>