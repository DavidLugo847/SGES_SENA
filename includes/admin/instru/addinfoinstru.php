
<?php
$title = 'Members Page';
require_once('includes/config.php');
require('layout/headeradmin.php'); 
?>


        </header><?php
            
            require("includes/registroinfo.php");

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

			<form  id="frmregistro" class="form_contact" method="post" action="" autocomplete="off" enctype="multipart/form-data">
                <h2>Insertar Información Personal</h2>
                <div class="user_info">
                <div><tr>
                        <td width="170" height="150" rowspan="3"><input type="file" name="foto" id="file-5" accept="image/jpg,png,jpeg" class="inputfile-5" data-multiple-caption="{count} archivos seleccionados" required="" multiple />
                    <label for="file-5">
                    <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    </figure>
                    <span class="iborrainputfile"><center>Seleccionar foto</center></span>
                    </label></td>
                    </tr></div>
                <table>

                <tr><td>
                    <input type="hidden" name="id" value="<?php echo $_GET["IdUser"]; ?>">
                        <label for="tipodoc">Tipo Documento</label>
                        <div class="content-select"><select class="selc" name="tipodoc">
                                        <option>C.C</option>
                                        <option>C.E</option>
                                        <option>P.A</option>
                                    </select><i></i></div>
                    </td></tr>
				<tr><td><label for="#">No Identificación</label><input type="text" name="numid" id="username"  value="" required></td></tr>
                <tr><td><label for="#">Nombres</label><input type="text" name="nombres" id="email"  value="" required></td></tr>
                <tr><td><label for="#">Apellidos</label><input type="text" name="apellidos" id="username"  value="" required></td></tr>
                <tr><td><label for="#">Teléfono de Contacto</label><input type="text" name="telefono" id="email"  value="" required></td></tr>
                <tr><td><label for="#">Correo Electrónico</label><input type="email" name="correo" id="email"  value="" required></td></tr>
                                
				<hr>
				
                                    				
                
                </table>
                <input  class="btn btn-primary btn-block btn-lg" type="submit" name="submitinstru" value="Insertar" tabindex="5" >
                </div>	
			</form>
		
	


</section>
</div>



<?php 
require('layout/footer.php'); 
?>
</div>



       
