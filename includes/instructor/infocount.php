
<?php
$title = 'Members Page';
require('layout/headerinstru.php'); 
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
	?>
	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form  method="post" action="" autocomplete="off">
				<h2>Datos de Cuenta</h2>
				<hr>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
                                    <h6>Nombre de Usuario</h6>
                                    <input type="text" name="UsNombre" id="username" class="form-control input-lg" placeholder="Usuario" value="<?php echo $UsNombre; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Correo</h6>
                                    <input type="email" name="mail" id="email" class="form-control input-lg" placeholder="ejemplo@gmail.com" value="<?php echo $mail; ?>" readonly>
				</div>
				<div class="form-group">

                                    <h6>Contraseña</h6>
                                    <input type="text" name="pass" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" value="<?php echo $pass; ?>" readonly>

                                </div>
	
				<hr>
				<div class="form-group">
                                    <a href="memberpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=aic" class="btn btn-primary btn-lg btn-block ">Editar Información</a>
                                </div>   				
				
			</form>
		</div>
	</div>



</div>

<?php 
require('layout/footer.php'); 
?>
</div>