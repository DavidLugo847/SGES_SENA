<?php
require_once('includes/crud_users.php');
require_once('includes/users.php');
$crudUsersAdmin = new CrudUsersAdmin();
$UsersAdmin = new UsersAdmin();
//Obtiene todos los computadores con el método mostrar de la clase crud
$listaUsersAdmin = $crudUsersAdmin->mostrarInstru();
?>
<?php
$title = 'Members Page';
require('layout/headeradmin.php'); 
?>

<div class="container">

	<div class="row">

	    
			
				<h2>Gestionar Instructores</h2>
                              	<hr>
                                <a href="adminpage.php?accion=addinstru" class="btn btn-danger btn-lg btn-block"><h4>Agregar Instructor</h4></a>
                                <br>
                                <?php  $sql=("SELECT * FROM instructor");
                                            $query=mysqli_query($mysqli,$sql);
                                            while($arreglo=mysqli_fetch_array($query)){
                                            $Insd=$arreglo[0];
                                            $UsId=$arreglo[1];
                                            $Tipodoc=$arreglo[2];
                                            $NumId=$arreglo[3];
                                            $Nombres=$arreglo[4];
                                            $Apellidos=$arreglo[5];
                                            $Telefono=$arreglo[6];
                                            $Correo=$arreglo[7];
                                            $Foto=$arreglo[8];

                                            $datoscuenta=("SELECT * FROM usuarios WHERE UsId=$UsId");
                                            $ressqll=mysqli_query($mysqli,$datoscuenta);
                                            while ($row=mysqli_fetch_row ($ressqll)){
                                            
                                            $CorreoCuenta=$row[2];
                                            $Contrasenia=$row[4];}
                                            ?>
                                <div class="gestion-global">
                                <a href="adminpage.php?id=<?php echo $UsId?>&accion=infopersonal">
                                <div class="gestionintru">
                                    
                                    <div class="foto"><img src="<?php echo $Foto;?>" alt=""></div>
                                    <div class="contener-info">
                                    <div class="info1"><label>Nombre:</label><br><?php echo $Nombres.' '.$Apellidos ?></div>
                                    <div class="info2"><label>Documento:</label><br><?php echo $Tipodoc.' '.$NumId ?></div>
                                    </div>
                                    <div class="contener-info">
                                    <div class="info1"><label>Correo:</label><br><?php echo $CorreoCuenta; ?></div>
                                    <div class="info2"><label>Contraseña:</label><br><?php echo $Contrasenia;?></div>
                                    </div>
                                </div></a>
                                <div class="botonesEA">
                                    <a href="adminpage.php?id=<?php echo $UsId;?>&accion=aInstru"><div class="botonA"><span class="icon-pencil"></div></span></a>
                                    <a href="includes/admin_users.php?id=<?php echo $UsId;?>&accion=e"><div class="botonE"><span class="icon-trash"></div></span></a>
                                </div>
                                </div>
                                    

                                            <?php }?>                                    
                                    
                                </table>
                                

		
	</div>


</div>