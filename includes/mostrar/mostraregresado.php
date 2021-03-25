<?php
extract($_GET);
		require("connect_db.php");

		$sql2="SELECT * FROM egresado WHERE EgId=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql2l=mysqli_query($mysqli,$sql2);
		while ($row=mysqli_fetch_row ($ressql2l)){
                        $EgId=$row[0];
                        $Nombres=$row[1];
                        $Apellidos=$row[2];
		    	$Tipodoc=$row[3];
		    	$Numdoc=$row[4];
		    	$Fechan=$row[5];
		    	$Ciudadr=$row[6];
                        $NumTelefono=$row[7];
                        $InsFoto=$row[8];
		    }
?>