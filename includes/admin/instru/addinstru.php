<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Members Page';
require('includes/config.php');
require('layout/headeradmin.php'); 
?>

<?php 
    
    require("includes/registro.php");

?>


<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
                            <h2>Agregar Datos de Cuenta de Instructor</h2>
				<hr>
                                <?php
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				};
                                ?>
			
				<div class="form-group">
                                        <h6>Nombre de Usuario</h6>
					<input type="text" name="realname" id="username" class="form-control input-lg" placeholder="Usuario" required>
				</div>
				<div class="form-group">
                                        <h6>Correo</h6>
					<input type="email" name="nick" id="email" class="form-control input-lg" placeholder="ejemplo@gmail.com" required>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
                                                        <h6>Contraseña</h6>
							<input type="password" name="pass" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" required>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
                                                        <h6>Confirmar contraseña</h6>
							<input type="password" name="rpass" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4" required>
						</div>
					</div>
				</div>

				<div class="row">
                                        <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitinstru" value="Registrar Instructor" tabindex="5"/></div>
                                        
				</div>
			</form>
		</div>
	</div>

</div>

<?php

require('layout/footer.php');
?>
    