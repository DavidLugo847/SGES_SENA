<?php
//incluye la clase Db
require_once('config.php');

	class CrudUsersAdmin{
		//1. constructor de la clase
		public function __construct(){}
		
		//metodo para insertar, recibe como parámetro un objeto de tipo computador
		
	
	//2. método para mostrar todos los comutadores
        public function mostrarAdmin(){
		$db=Db::conectar();
		$listaUsersAdmin=[];
		$select=$db->query('SELECT * FROM usuarios where UsRol=1');
		
		foreach($select->fetchAll() as $UsersAdmin){
			$myUsersAdmin = new UsersAdmin();
			$myUsersAdmin->setUsid($UsersAdmin['UsId']);
			$myUsersAdmin->setUsName($UsersAdmin['UsName']);
                        $myUsersAdmin->setUsMail($UsersAdmin['UsMail']);
			$myUsersAdmin->setUsPass($UsersAdmin['UsPassword']);
                        $myUsersAdmin->setUsPassadmin($UsersAdmin['UsPassadmin']);
			

			$listaUsersAdmin[]=$myUsersAdmin;
		}
		return $listaUsersAdmin;
	}
        
        public function mostrarInstru(){
		$db=Db::conectar();
		$listaUsersAdmin=[];
		$select=$db->query('SELECT * FROM usuarios where UsRol=2');
		
		foreach($select->fetchAll() as $UsersAdmin){
			$myUsersAdmin = new UsersAdmin();
			$myUsersAdmin->setUsid($UsersAdmin['UsId']);
			$myUsersAdmin->setUsName($UsersAdmin['UsName']);
                        $myUsersAdmin->setUsMail($UsersAdmin['UsMail']);
			$myUsersAdmin->setUsPass($UsersAdmin['UsPassword']);
                        $myUsersAdmin->setUsPassadmin($UsersAdmin['UsPassadmin']);
			

			$listaUsersAdmin[]=$myUsersAdmin;
		}
		return $listaUsersAdmin;
	}
        public function mostrarEgresado(){
		$db=Db::conectar();
		$listaUsersAdmin=[];
		$select=$db->query('SELECT * FROM egresado');
		
		foreach($select->fetchAll() as $UsersAdmin){
			$myUsersAdmin = new UserEgresado();
			$myUsersAdmin->setEgid($UsersAdmin['EgId']);
			$myUsersAdmin->setEgNombres($UsersAdmin['EgNombres']);
                        $myUsersAdmin->setApellidos($UsersAdmin['EgApellidos']);

                        
			

			$listaUsersAdmin[]=$myUsersAdmin;
		}
		return $listaUsersAdmin;
	}
	public function mostrar(){
		$db=Db::conectar();
		$listaUsersAdmin=[];
		$select=$db->query('SELECT * FROM usuarios');
		
		foreach($select->fetchAll() as $UsersAdmin){
			$myUsersAdmin = new Computador();
			$myUsersAdmin->setUsid($UsersAdmin['UsId']);
			$myUsersAdmin->setUsName($UsersAdmin['UsName']);
                        $myUsersAdmin->setUsMail($UsersAdmin['UsMail']);
			$myUsersAdmin->setUsPass($UsersAdmin['UsPassword']);
                        $myUsersAdmin->setUsPassadmin($UsersAdmin['UsPassadmin']);
			

			$listaUsersAdmin[]=$myUsersAdmin;
		}
		return $listaUsersAdmin;
	}
	
	//3. método para eliminar un libro, recibe como parámetro el id del libro
	public function eliminar($id){
		$db=Db::conectar();
		$eliminar=$db->prepare('DELETE FROM instructor WHERE InsUsuario=:id;DELETE FROM usuarios WHERE UsId=:id');
		$eliminar->bindValue('id',$id);
		$eliminar->execute();
	}
        public function eliminarEg($id){
		$db=Db::conectar();
		$eliminar=$db->prepare('DELETE FROM egresado WHERE EgId=:id');
		$eliminar->bindValue('id',$id);
		$eliminar->execute();
	}
        public function eliminarEst($id){
		$db=Db::conectar();
		$eliminar=$db->prepare('DELETE FROM estudios WHERE EstId=:id');
		$eliminar->bindValue('id',$id);
		$eliminar->execute();
	}
	
	//4. método para buscar un computador, recibe como parámetro el id del libro


	//5. método para actualizar un computador, recibe como parámetro el libro
	public function actualizarAdmin($UsersAdmin){
		$db=Db::conectar();
		$actualizar=$db->prepare('UPDATE usuarios SET UsId=:id,UsName=:realname,UsMail=:mail,'
                        . 'UsPassadmin=:pass'
                        . 'WHERE ID=:id');
		$actualizar->bindValue('id',$UsersAdmin->getId());
		$actualizar->bindValue('nombre',$UsersAdmin->getNombre());
		$actualizar->bindValue('fecha',$UsersAdmin->getFecha());
		$actualizar->bindValue('desarrollador',$UsersAdmin->getDesarrolador());
		$actualizar->bindValue('editor',$UsersAdmin->getEditor());
		
		$actualizar->execute();
                          
	}
	
    }

?>
