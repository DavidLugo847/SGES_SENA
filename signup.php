<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
</head>
<header>
    <div class="menu_bar">
    <a href="#" class="bt-menu"><span class="icon-list2"></span>MENU</a>
    </div>

    <nav>
    <ul>
    <li><a href="index.php"><span class="icon-house"></span>Inicio</a></li>
    <li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
    <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
    <ul class="secbar">
        <li><a href="login.php"><span class="registrarse"></span>Iniciar Sesion</a></li>
    </ul></ul>
    </nav>
        </header>

<?php 
    require('includes/config.php');
    require("includes/registro.php");

?>


<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Por favor regístrese</h2>
				<p>¿Ya eres usuario? <a href='login.php'>Login</a></p>
				<hr>
                                <?php
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				};
                                ?>
			
				<div class="form-group">
					<input type="text" name="realname" id="username" class="form-control input-lg" placeholder="Usuario" required>
				</div>
				<div class="form-group">
					<input type="email" name="nick" id="email" class="form-control input-lg" placeholder="Email Address" required>
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="pass" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" required>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="rpass" id="passwordConfirm" class="form-control input-lg" placeholder="Confirmar Password" tabindex="4" required>
						</div>
					</div>
				</div>

				<div class="row">
                                        <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submit" value="Registrarse" tabindex="5"/></div>					
				</div>
			</form>
		</div>
	</div>

</div>

<?php

require('layout/footer.php');
?>
    