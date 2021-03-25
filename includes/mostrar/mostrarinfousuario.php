 <?php      
		$sql2="SELECT * FROM info_usuario WHERE InfUsuario=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql2l=mysqli_query($mysqli,$sql2);
		while ($row=mysqli_fetch_row ($ressql2l)){
                        $InfUsuario=$row[0];
                        $InfNombres=$row[1];
                        $InfApellidos=$row[2];
		    	$InfEmpresa=$row[3];
		    	$InfCargo=$row[4];
		    	$InfTelefono=$row[5];
		    	$InfCorreo=$row[6];
                        $InfMotivovisita=$row[7];
		    }
?>