
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
                
                
                $checkinstru=mysqli_query($mysqli,"SELECT * FROM instructor WHERE InsUsuario='$id'");
                $check_instru=mysqli_num_rows($checkinstru);

                if($check_instru==0){
                   echo '<script>alert("ESTE USUARIO NO CUENTA CON INFORMACIÓN PERSONAL, POR FAVOR ACTUALICE SUS DATOS")</script> ';
                   echo "<script>location.href='adminpage.php?IdUser=$id&accion=addinstruinfo'</script>";
                }

		?>
        </header><?php
            require_once('includes/config.php');
            require("includes/actu.php");
            require ("includes/mostrar/mostrarinstructor.php");
	?>
	
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form  method="post" action="" autocomplete="off">
				<h2>Información Personal (Instructor)</h2>
				<hr>
                                <input type="hidden" name="id" value="<?php echo $InsUsuario; ?>">
                                <div class="form-group">
                                    <h6>Foto</h6>      
                                    <img src="<?php echo $InsFoto; ?>" onerror=this.src="media/fotos/not_found/default_user.jpg" alt="No se pudo crack"  height="190px" >
                                    
				</div>
                                <div class="form-group">
                                    <h6>Tipo Documento</h6>
                                    <input type="text"   class="form-control input-lg" value="<?php echo $InsTipodoc; ?>" readonly >
				</div>
				<div class="form-group">
                                    <h6>No Identificación</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InsId; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Nombres</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InsName; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Apellidos</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InsApellido; ?>" readonly>
				</div>
				<div class="form-group">
                                    <h6>Teléfono de Contacto</h6>
                                    <input type="text"  class="form-control input-lg"  value="<?php echo $InsTelefono; ?>" readonly>
				</div>
                                <div class="form-group">
                                    <h6>Correo Electrónico</h6>
                                    <input type="email"  class="form-control input-lg"  value="<?php echo $InsCorreo; ?>" readonly>
				</div>
                                
				<hr>
			</form>
		</div>
                
	</div>


</div>

<?php 
require('layout/footer.php'); 
?>
</div>
       