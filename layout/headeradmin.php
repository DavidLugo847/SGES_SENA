<?php
	session_start();
	if (@!$_SESSION['UsName']) {
		header("Location:index.php");
	}elseif ($_SESSION['UsRol']==2) {
                header("Location:index.php");
        }
        elseif ($_SESSION['UsRol']==3) {
		header("Location:index.php");
	}
            
    $checkUs=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsEstado='10'");
    $check_Ust=mysqli_num_rows($checkUs);    
        
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistema de gestionamiento de egresados del SENA</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freightage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />


<!-- //for-mobile-apps -->
<link href="style/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="style/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

<!--fuentes chafas xd-->
<link href="style/main_1.css" rel="stylesheet" type="text/css"/>
<link href="style/styless.css" rel="stylesheet"  type="text/css">
</head>
<body> 

		<!--Top-Bar-->
	<div class="header2" style="margin-bottom: 20px;">
		<nav class="navbar navbar-default navbar-defaultUsers">
					
		<div class="log">
			<a class="bordes" href="adminpage.php" title="Sistema de Gestionamiento de Egresados del SENA">SGES</a>
		</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">

							<li><a href="adminpage.php" class="hvr-underline-from-center scroll" >Inicio</i> </a></li>                            
							<li><a href="adminpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infocount" class="hvr-underline-from-center scroll MA" >Inf. Cuenta</a></li>
                            <li><a href="adminpage.php?accion=peticionacceso" class="hvr-underline-from-center scroll"><i class="icon-notifications"></i><sup>[<?php echo $check_Ust; ?>]</sup> </a></li>
                            <li><a href="includes/logout.php" class="hvr-underline-from-center scroll MA">Cerrar Sesión</a></li>
						<!-- si luego no sé que demonios es "MA" según yo significa Menú de admin-->
						</ul>
					</div>
					
				</nav>
        </div>
