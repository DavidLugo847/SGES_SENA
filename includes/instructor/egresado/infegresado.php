
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
require('layout/headerinstru.php'); 
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="style/main.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
</head>
                <?php
		extract($_GET);
		require("connect_db.php");

		$sql2="SELECT * FROM egresado WHERE EgId=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql2l=mysqli_query($mysqli,$sql2);
		while ($row=mysqli_fetch_row ($ressql2l)){
                        $EgId=$row[0];
                        $Nombres=$row[1];
                        $Apellidos=$row[2];
		    	$Tipodoc=$row[3];
		    	$Numdoc=$row[4];
		    	$Fechan=$row[5];
		    	$Ciudadr=$row[6];
                        $NumTelefono=$row[7];
                        $InsFoto=$row[8];
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
				<h2>Información Personal Egresado</h2>
				<hr>
                                <input type="hidden" name="id" value="<?php echo $EgId; ?>">
                                <div class="form-group">
                                    <h6>Nombres</h6>
                                    <input type="text"   class="form-control input-lg" value="<?php echo $Nombres; ?>" readonly >
				</div>
				<div class="form-group">
                                    <h6>Apellidos</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $Apellidos; ?>" readonly>
				</div>
                                <div class="form-group">
                                    <h6>Tipo de Documento</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $Tipodoc; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>No Documento</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $Numdoc; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Fecha de Nacimiento</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $Fechan; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Ciudad de Residencia</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $Ciudadr; ?>" readonly>
				</div>
                                <div class="form-group">
                                    <h6>Número Teléfonico</h6>
                                    <input type="email"  class="form-control input-lg"  value="<?php echo $NumTelefono; ?>" readonly>
				</div>
                                
				<hr>
			</form>
		</div>
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                                <div class="form-group">
                                    <h6>Foto</h6>      
                                    <img src="<?php echo $InsFoto; ?>" onerror=this.src="media/fotos/not_found/default_user.jpg" alt="No se pudo crack"  height="190px" >
                                    
				</div>
                </div>
	</div>


</div>

<?php 
require('layout/footer.php'); 
?>
</div>
       