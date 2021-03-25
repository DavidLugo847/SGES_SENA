<?php
        $mysqli = new MySQLi("localhost", "root","", "sges");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}

	class Db{
        private static $conexion=NULL;
        private function __construct() {}
        
        public static function conectar(){
            $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion= new PDO('mysql:host=localhost;dbname=sges','root','',$pdo_options);
            return self::$conexion;
        }
    }
?>