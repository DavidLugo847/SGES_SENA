
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

		$sql2="SELECT * FROM instructor WHERE InsUsuario=$idinstru";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql2l=mysqli_query($mysqli,$sql2);
		while ($row=mysqli_fetch_row ($ressql2l)){
                        $InsUsuario=$row[0];
                        $InsPerfil=$row[1];
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
	
<div class="contenido">
<section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACIÓN DE INSTRUCTOR</h2>
            </section>
            <section class="info_items">

                <p><span class="fa fa-mobile"></span>Los cracks de la programación 11-3 &copy;</p>
            </section>
        </section>

	    
			<form id="frmregistro" class="form_contact" method="post" action="" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $InsPerfil; ?>">    
            
                <h2>Actualizar Información Personal</h2>
                
                <div class="user_info">
                <div>
                    <div style="width: 50%; float: right;" >
                        <input type="file" name="foto" id="file-5" accept="image/jpg,png,jpeg" class="inputfile-5" data-multiple-caption="{count} archivos seleccionados" required="" multiple/>
                    <label for="file-5">
                    <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    </figure>
                    <span class="iborrainputfile"><center>Seleccionar foto</center></span>
                    </label> 
                    </div>
                    <div style="width: 50%; float: right;" >
                        <img src="<?php echo $InsFoto; ?>" onerror=this.src="media/fotos/not_found/default_user.jpg" style="width: 120px; max-height: 300px;">   
                    </div>
                    
                </div>

                                <div class="form-group">
                                    <label>Tipo Documento</label>
                                    <div class="content-select"><select class="slc" name="tipodoc">
                                        <option>C.C</option>
                                        <option>C.E</option>
                                        <option>P.A</option>
                                    </select><i></i></div>
				</div>
				<div class="form-group">
                                    <h6>No Identificación</h6>
                                    <input type="text" name="numid" id="username"   value="<?php echo $InsId; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Nombres</h6>
                                    <input type="text" name="nombres" id="email"  value="<?php echo $InsName; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Apellidos</h6>
                                    <input type="text" name="apellidos" id="username"  value="<?php echo $InsApellido; ?>" required>
				</div>
				<div class="form-group">
                                    <h6>Teléfono de Contacto</h6>
                                    <input type="text" name="telefono" id="email"  value="<?php echo $InsTelefono; ?>" required>
				</div>
                                <div class="form-group">
                                    <h6>Correo Electrónico</h6>
                                    <input type="email" name="correo" id="email"  value="<?php echo $InsCorreo; ?>" required>
				</div>
				<hr>
				<div class="row">
                                    <div class="col-xs-6 col-md-6"><input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitinstru2" value="Actualizar" tabindex="5"></div>
                                    <div class="col-xs-6 col-md-6"><a  class="btn btn-primary btn-block btn-lg" style="color: white;" href="adminpage.php?accion=gestinstru">Omitir</a></div>					
				</div>
			
		
            </form>


</section>
</div>

<?php 
require('layout/footer.php'); 
?>
</div>
       