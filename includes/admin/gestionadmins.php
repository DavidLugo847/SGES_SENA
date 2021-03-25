<?php
require_once('includes/crud_users.php');
require_once('includes/users.php');
$crudUsersAdmin = new CrudUsersAdmin();
$UsersAdmin = new UsersAdmin();
//Obtiene todos los computadores con el método mostrar de la clase crud
$listaUsersAdmin = $crudUsersAdmin->mostrarAdmin();
?>
<?php
$title = 'Members Page';
require('layout/headeradmin.php'); 
?>

<div class="container">

	<div class="row">

                              	<hr>
                                <a href="adminpage.php?accion=addadmin" class="btn btn-danger btn-lg btn-block"><h4>Agregar administrador   <span class="icon-user-plus"></span></h4></a>
                                <br><table border="1" class="table-gestion">
                                    <tr class="tabla-cabecera">

                                        <td>Nombre</td>
                                        <td>Correo</td>
                                        <td>Contraseña</td>
                                        <td style="width:50px; ">Editar</td>
                                        <td style="width:50px;">Eliminar</td>
                                    </tr>
                                    <?php foreach ($listaUsersAdmin as $UsersAdmin ){?>                                    
                                    <tr class="tabla-fondo">
                                        <td><?php echo $UsersAdmin->getUsName() ?></td>
                                        <td><?php echo $UsersAdmin->getUsMail() ?></td>
                                        <td><?php echo $UsersAdmin->getUsPassadmin() ?></td>
                                        <td class="verde"><a href="adminpage.php?id=<?php echo $UsersAdmin->getUsid()?>&accion=aAdmin"><center><span class="icon-pencil"></span></center></a></td>
                                        <td class="rojo"><a href="includes/admin_users.php?id=<?php echo $UsersAdmin->getUsid()?>&accion=e"><center><span class="icon-trash"></span><center></a></td>
                                    </tr>
                                    <?php }?>
                                </table>
                                

		
	</div>


</div>