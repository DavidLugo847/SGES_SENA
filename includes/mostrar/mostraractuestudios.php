               <?php
		require("connect_db.php");
                $sql="SELECT * FROM estudios WHERE EstId=$Estid";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressqll=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressqll)){
                        $EstId=$row[0];
                        $EstEgresado=$row[1];
                        $EstNivelF=$row[2];
                        $EstName=$row[3];
		    	$EstAnioI=$row[4];
		    	$EstAnioF=$row[5];
                        $EstLugarG=$row[6];
		    }

		?>