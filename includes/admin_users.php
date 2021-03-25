
<?php
//incluye la clase Libro y CudLibro
require_once('crud_users.php');
require_once('users.php');

$crudUsersAdmin = new CrudUsersAdmin();
$UsersAdmin = new UsersAdmin();

		//si es el elemento insertar no viene nulo llama al crud e inserta un libro
		if (isset($_POST['insertar']))
		{
			$UsersAdmin->setNombre($_POST['nombre']);
			$UsersAdmin->setFecha($_POST['fecha']);
			$UsersAdmin->setDesarrollador($_POST['desarrollador']);
			$UsersAdmin->setEditor($_POST['editor']);
			$UsersAdmin->setDescipcion($_POST['descripcion']);
			$UsersAdmin->setCaracteristicas($_POST['caracteristica']);
                        $UsersAdmin->setRequisitosminimos($_POST['requisitosminimos']);
                        $UsersAdmin->setRequisitosrecomendados($_POST['requisitosrecomendados']);
                        $UsersAdmin->setGenero($_POST['genero']);
			$UsersAdmin->setPlataforma($_POST['plataforma']);
			$UsersAdmin->setImg('imagenes/'.$_FILES['img']["name"]);                        
			//llama a la función insertar definida en el crud
			$crudUsersAdmin->insertar($UsersAdmin);
			header('Location: index2.php');
		//si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
		}
		elseif(isset($_POST['actualizar']))
		{
                        $UsersAdmin->setId($_POST['id']);
			$UsersAdmin->setNombre($_POST['nombre']);
			$UsersAdmin->setFecha($_POST['fecha']);
			$UsersAdmin->setDesarrollador($_POST['desarrollador']);
			$UsersAdmin->setEditor($_POST['editor']);
			$UsersAdmin->setDescipcion($_POST['descripcion']);
			$UsersAdmin->setCaracteristicas($_POST['caracteristica']);
                        $UsersAdmin->setRequisitosminimos($_POST['requisitosminimos']);
                        $UsersAdmin->setRequisitosrecomendados($_POST['requisitosrecomendados']);
                        $UsersAdmin->setGenero($_POST['genero']);
			$UsersAdmin->setPlataforma($_POST['plataforma']);
                        $UsersAdmin->setImg('imagenes/'.$_FILES['img']["name"]);
			$crudUsersAdmin->actualizar($UsersAdmin);
			header('Location: index2.php');
		//si la variable action enviada por GET es == 'e' llama al crud y elimina un libro
		}
		elseif($_GET['accion']=='e')
		{
			$crudUsersAdmin->eliminar($_GET['id']);
                        header('Location: ../adminpage.php?accion=gestinstru');
		//si la variable accion enviada por GET es == 'a', envia a la página actualizar.php
		}
                elseif($_GET['accion']=='eEg')
		{                    
                    session_start();
                    $Rol=$_SESSION['UsRol'];
                    
                    $crudUsersAdmin->eliminarEg($_GET['id']);
                    if ($Rol==1)
                    {
                       header('Location: ../adminpage.php?accion=gestegresado'); 
                    }
                    elseif ($Rol==2) {
                       header('Location: ../memberpage.php?accion=egresados'); 
                }
                        
		//si la variable accion enviada por GET es == 'a', envia a la página actualizar.php
		}
                
                elseif($_GET['accion']=='eEst')
		{                    
                    session_start();
                    $Rol=$_SESSION['UsRol'];
                    $IdTemp=$_GET['idEg'];
                    $crudUsersAdmin->eliminarEst($_GET['id']);
                    if ($Rol==1)
                    {
                       header("Location: ../adminpage.php?id=$IdTemp&accion=gestionestudios"); 
                    }
                    elseif ($Rol==2) {
                       header("Location: ../memberpage.php?id=$IdTemp&accion=egresados"); 
                }

		}
		elseif($_GET['accion']=='a')
		{
			$crudUsersAdmin->eliminar($_GET['id']);
			header('Location: actualizar.php');
		}
		
			
			
?>