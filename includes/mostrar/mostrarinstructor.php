 <?php      
		$sql2="SELECT * FROM instructor WHERE InsUsuario=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql2l=mysqli_query($mysqli,$sql2);
		while ($row=mysqli_fetch_row ($ressql2l)){
                        $InsUsuario=$row[0];
                        $InsTipodoc=$row[2];
		    	$InsId=$row[3];
		    	$InsName=$row[4];
		    	$InsApellido=$row[5];
		    	$InsTelefono=$row[6];
                        $InsCorreo=$row[7];
                        $InsFoto=$row[8];
		    }
?>