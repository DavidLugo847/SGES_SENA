
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

        </header><?php
            require_once('includes/config.php');
            require("includes/registroinfo.php");
            $id=$_SESSION['UsId'];
	?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form  method="post" action="" autocomplete="off" enctype="multipart/form-data">
				<h2>Insertar Información Personal (Instructor)</h2>
				<hr>

                                
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <div class="form-group">
                                    <h6>Tipo Documento</h6>
                                    <select class="form-control" name="tipodoc">
                                        <option>C.C</option>
                                        <option>C.E</option>
                                        <option>P.A</option>
                                    </select>
				</div>
				<div class="form-group">
                                    <h6>No Identificación</h6>
                                    <input type="text" name="numid" id="username" class="form-control input-lg" placeholder="No Identificación" value="" required>
				</div>
				<div class="form-group">
                                    <h6>Nombres</h6>
                                    <input type="text" name="nombres" id="email" class="form-control input-lg" placeholder="Nombres" value="" required>
				</div>
				<div class="form-group">
                                    <h6>Apellidos</h6>
                                    <input type="text" name="apellidos" id="username" class="form-control input-lg" placeholder="Apellidos" value="" required>
				</div>
				<div class="form-group">
                                    <h6>Teléfono de Contacto</h6>
                                    <input type="text" name="telefono" id="email" class="form-control input-lg" placeholder="Teléfono" value="" required>
				</div>
                                <div class="form-group">
                                    <h6>Correo Electrónico</h6>
                                    <input type="email" name="correo" id="email" class="form-control input-lg" placeholder="Correo" value="" required>
				</div>
                                <div class="form-group">
                                    <h6>Foto</h6>

                                    <input type="file" name="foto" id="foto" required>
				</div>
				<hr>
				<div class="row">
                                    <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitinstru" value="Insertar" tabindex="5" ></div>					
				</div>
			</form>
		</div>
	</div>



</div>

<?php 
require('layout/footer.php'); 
?>
</div>
       
