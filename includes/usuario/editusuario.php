
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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="style/main.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
</head>

    
        </header><?php
            require_once('includes/config.php');
            require("includes/mostrar/mostrarusuarios.php");
            require("includes/actu.php");

	?>
	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form  method="post" action="" autocomplete="off">
				<h2>Actualizar datos</h2>
				<hr>
                                 <?php
				if(isset($erroradmin)){
					foreach($erroradmin as $erroradmin){
						echo '<p class="bg-danger">'.$erroradmin.'</p>';
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
							<input type="text" name="pasadmin" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" value="<?php echo $passusuaio; ?>" required>
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
                                    <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitusuario" value="Actualizar" tabindex="5"></div>					
				</div>
			</form>
		</div>
	</div>

</div>

<?php 
require('layout/footer.php'); 
?>
