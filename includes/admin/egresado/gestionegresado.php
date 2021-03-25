<?php
require_once('includes/crud_users.php');
require_once('includes/users.php');
$crudUsersAdmin = new CrudUsersAdmin();
$UsersAdmin = new UserEgresado();
//Obtiene todos los computadores con el método mostrar de la clase crud
$listaUsersAdmin = $crudUsersAdmin->mostrarEgresado();
?>
<?php
$title = 'Members Page';
require('layout/headeradmin.php'); 
?>


<div class="container">

	<div class="row">

	    
			
				<h2>Gestionar Egresados</h2>
                              	<hr>
                                <a href="adminpage.php?accion=addegresado" class="btn btn-danger btn-lg btn-block"><h4>Agregar Egresado</h4></a>
                                
                                <br>
                                    <?php $sql=("SELECT * FROM egresado");
                                            $query=mysqli_query($mysqli,$sql);
                                            while($arreglo=mysqli_fetch_array($query)){
                                            $EgId=$arreglo[0];
                                            $Nombres=$arreglo[1];
                                            $Apellidos=$arreglo[2];
                                            $TipoDoc=$arreglo[3];
                                            $NumDoc=$arreglo[4];
                                            $FechaNacimiento=$arreglo[5];
                                            $CiudadRe=$arreglo[6];
                                            $Numtelefono=$arreglo[7];
                                            $Foto=$arreglo[8];?>


                                            <div class="gestion-global">
                                            <a href="adminpage.php?id=<?php echo $EgId?>&accion=infoegresado">
                                            <div class="gestionegresado">
                                            <div class="foto"><img src="<?php echo $Foto;?>" alt=""></div>
                                            <div class="contener-info">
                                            <div class="info1"><label>Nombre:</label><br><?php echo $Nombres.' '.$Apellidos ?></div>
                                            <div class="info2"><label>Documento:</label><br><?php echo $TipoDoc.' '.$NumDoc ?></div>
                                            </div>
                                            <div class="contener-info">
                                            <div class="info1"><label>Ciudad de residencia:</label><br><?php echo $CiudadRe; ?></div>
                                            <div class="info2"><label>Número telefónico:</label><br><?php echo $Numtelefono;?></div>
                                            </div>
                                            </div>
                                            </a>
                                            <a href="adminpage.php?id=<?php echo $EgId;?>&accion=gestionestudios" class="boton-blanco"><div class="botonestudio">
                                                Gestionar Estudios <br> <center><span class="icon-file-text2"></span></center>
                                            </div></a>
                                            <div class="botonesEA">
                                            <a href="adminpage.php?id=<?php echo $EgId;?>&accion=aEg"><div class="botonA"><span class="icon-pencil"></div></span></a>
                                            <a href="includes/admin_users.php?id=<?php echo $EgId;?>&accion=eEg"><div class="botonE"><span class="icon-trash"></div></span></a>
                                            </div>
                                            </div>      

                                            <?php }?>
                                            
                                            <!--
                                            <tr>
                                        <td><?php echo $UsersAdmin->getEgid() ?></td>
                                        <td><?php echo $UsersAdmin->getEgNombres() ?></td>
                                        <td><?php echo $UsersAdmin->getEgApellidos() ?></td>    
                                        <td><a href="adminpage.php?id=<?php echo $UsersAdmin->getEgid();?>&accion=infoegresado">Mostrar</a></td>
                                        <td><a href="adminpage.php?id=<?php echo $UsersAdmin->getEgid()?>&accion=gestionestudios">Gestionar</a></td>
                                        <td><a href="adminpage.php?id=<?php echo $UsersAdmin->getEgid()?>&accion=aEg">Editar</a></td>
                                        <td><a href="includes/admin_users.php?id=<?php echo $UsersAdmin->getEgid()?>&accion=eEg">Eliminar</a></td>
                                    </tr>
                                    
                                </table>
                                        -->
                                    
                                

		
	</div>


</div>