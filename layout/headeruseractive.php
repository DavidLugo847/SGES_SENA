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
        if ($_SESSION['UsEstado']==0) {
                
               echo ' <script language="javascript">alert("Esta cuenta no está activa");</script> ';
               echo "<script>location.href='index.php'</script>";
}
        if ($_SESSION['UsEstado']==3) {
                
               echo ' <script language="javascript">alert("Esta no cuenta con permiso de acceso");</script> ';
               echo "<script>location.href='index.php'</script>";
}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
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
    <li><a href="memberpage.php"><span class="icon-house"></span>Inicio</a></li>
    <li><a href="memberpage.php?accion=egresados"><span class="icon-suitcase"></span>Trabajos</a></li>
    <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
    <ul class="secbar">
    <li>
        
        <button id="boton" type="submit" value="Mostrar" onclick="Mostrar_Ocultar()"><span class="infouser">Bienvenido: <strong><?php echo $_SESSION['UsName'];?></strong></span></button>
        <div id="caja" style="width: 180px; height: 0px; background: orange; display: none; position: relative; z-index: 10;">
            <a href="memberpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infoperson"><span class="icon-house"></span><center>Inf. Personal</center></a>
            <a href="memberpage.php?id=<?php echo $_SESSION['UsId'];?>&accion=infocount"><center>Inf.  Cuenta</center></a>
            <a href="includes/logout.php"><span class="icon-house"></span><center>Cerrar Sesión</center></a>            
        </div>
    </li>
    
    </ul></ul>
    </nav>
        </header>




