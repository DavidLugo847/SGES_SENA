
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

                <?php
		extract($_GET);
		require("connect_db.php");

		$sql2="SELECT * FROM instructor WHERE InsUsuario=$idinstru";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql2l=mysqli_query($mysqli,$sql2);
		while ($row=mysqli_fetch_row ($ressql2l)){
                        $InsUsuario=$row[1];
                        $InsTipodoc=$row[2];
		    	        $InsId=$row[3];
		    	        $InsName=$row[4];
		    	        $InsApellido=$row[5];
		    	        $InsTelefono=$row[6];
                        $InsCorreo=$row[7];
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
			<form  method="post" action="" autocomplete="off" enctype="multipart/form-data">
				<h2>Actualizar Información Personal (Instructor)</h2>
				<hr>
                <div class="form-group">
                                    <h6>Foto</h6>      
                                    <img src="<?php echo $InsFoto; ?>" onerror=this.src="media/fotos/not_found/default_user.jpg" alt="No se pudo crack"  height="190px" >
                                    
				</div>
                                <div class="form-group">
                                    <label for="foto">Actualizar Foto</label>
                                    <input type="file" name="foto" id="foto" required>
                                </div>

                                
                                <input type="hidden" name="id" value="<?php echo $InsUsuario; ?>">
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
                                    <input type="text" name="numid" id="username" class="form-control input-lg" placeholder="No Identificación" value="<?php echo $InsId; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Nombres</h6>
                                    <input type="text" name="nombres" id="email" class="form-control input-lg" placeholder="Nombres" value="<?php echo $InsName; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Apellidos</h6>
                                    <input type="text" name="apellidos" id="username" class="form-control input-lg" placeholder="Apellidos" value="<?php echo $InsApellido; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Teléfono de Contacto</h6>
                                    <input type="text" name="telefono" id="email" class="form-control input-lg" placeholder="Teléfono" value="<?php echo $InsTelefono; ?>" required>
				</div>
                                <div class="form-group">
                                    <h6>Correo Electrónico</h6>
                                    <input type="email" name="correo" id="email" class="form-control input-lg" placeholder="Correo" value="<?php echo $InsCorreo; ?>" required>
				</div>
				<hr>
				<div class="row">
                                    <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitinstru2" value="Actualizar" tabindex="5"></div>
                                    <div class="col-xs-6 col-md-6"><a  class="btn btn-secondary btn-block btn-lg" style="color: white;" href="memberpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infoperson">Cancelar</a></div>					
				</div>
			
		</div>
                
                               
                

            </form>
	</div>



</div>

<?php 
require('layout/footer.php'); 
?>
</div>
       