<?php
	session_start();
	if (@!$_SESSION['UsName']) {
		header("Location:index.php");
	}elseif ($_SESSION['UsRol']==1) {
		header("Location:adminpage.php");
	}
        elseif ($_SESSION['UsRol']==2) {
		header("Location:memberpage.php");
	}
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
<script src="style/js/mostrartabla.js" type="text/javascript"></script>
</head>
<body> 

		<!--Top-Bar-->
	<div class="header2" style="margin-bottom: 20px;">
		<nav class="navbar navbar-default navbar-defaultUsers">
					
		<div class="log">
			<a class="bordes" href="memberpage.php" title="Sistema de Gestionamiento de Egresados del SENA">SGES</a>
		</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav navbar-right">

							<li><a href="userpage.php" class="hvr-underline-from-center scroll MA">Inicio</i> </a></li>   
                            <li><a href="userpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infoperson" class="hvr-underline-from-center scroll MA"><span class="icon-house"></span><center>Inf. Personal</center></a></li>                         
							<li><a href="userpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infocount" class="hvr-underline-from-center scroll MA">Inf. Cuenta</a></li>                            
                            <li><a href="includes/logout.php" class="hvr-underline-from-center scroll MA">Cerrar Sesión</a></li>
						<!-- si luego no sé que demonios es "MA" según yo significa Menú de admin-->
						</ul>
					</div>
					
				</nav>
        </div>


<!--   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/side.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="style/js/script.js" type="text/javascript"></script>
</head>
<header>
    <div class="menu_bar">
    <a href="#" class="bt-menu"><span class="icon-list2"></span>MENU</a>
    </div>

    <nav>
    <ul>
    <li><a href="userpage.php"><span class="icon-house"></span>Inicio</a></li>
    <li><a href="userpage.php"><span class="icon-suitcase"></span>Trabajos</a></li>
    <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
    <ul class="secbar">
    <li>
        
        <button id="boton" type="submit" value="Mostrar" onclick="Mostrar_Ocultar()"><span class="infouser">Bienvenido: <strong><?php echo $_SESSION['UsName'];?></strong></span></button>
        <div id="caja" style="width: 180px; height: 0px; background: orange; display: none; position: relative; z-index: 10;">
            <a href="userpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infoperson"><span class="icon-house"></span><center>Inf. Personal</center></a>
            <a href="userpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infocount"><center>Inf.  Cuenta</center></a>
            <a href="includes/logout.php"><span class="icon-house"></span><center>Cerrar Sesión</center></a>            
        </div>
    </li>
    
    </ul></ul>
    </nav>
        </header>


-->


