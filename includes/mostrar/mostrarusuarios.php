                <?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM usuarios WHERE UsId=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$UsNombre=$row[1];
		    	$mail=$row[2];
		    	$pasadmin=$row[3];
                        $passusuaio=$row[4];
		    }

		?>