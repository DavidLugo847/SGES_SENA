<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.png" type="image/png" />
    </head>
    
    <body>

<?php
 require_once 'includes/controller.php';
 
 $controlador = new Controlador();
/*PÁGINAS DE ADMINISTRADOR*/
if( isset($_GET["accion"])){
 if($_GET["accion"] == "infoperson"){
 $controlador->verPagina('includes/instructor/infoperson.php');
 }
 elseif($_GET["accion"] == "infocount"){
 $controlador->verPagina('includes/instructor/infocount.php');
 }
 elseif($_GET["accion"] == "actuinfoperson"){
 $controlador->verPagina('includes/instructor/editinfoperson.php');
 }
 elseif ($_GET["accion"] == "aic") {
 $controlador->verPagina('includes/instructor/actic.php');
}
elseif ($_GET["accion"] == "addinfintru") {
 $controlador->verPagina('includes/instructor/addinfoinstru.php');
}
elseif ($_GET["accion"] == "gestionestudios") {
    $controlador->verPagina('includes/instructor/egresado/gesionestudios.php');
   }
   elseif ($_GET["accion"] == "editestudos") {
    $controlador->verPagina('includes/instructor/egresado/editestudios.php');
   }
   elseif ($_GET["accion"] == "addestudios") {
    $controlador->verPagina('includes/instructor/egresado/addestudios.php');
   }
   elseif ($_GET["accion"] == "gesthojas") {
    $controlador->verPagina('includes/instructor/hoja_vida/gestionhoja.php');
   }
   elseif ($_GET["accion"] == "addhoja") {
    $controlador->verPagina('includes/instructor/hoja_vida/addhojaselect.php');
   }
   elseif ($_GET["accion"] == "addhojae") {
    $controlador->verPagina('includes/instructor/hoja_vida/addhoja.php');
   }
   elseif ($_GET["accion"] == "mhoja") {
    $controlador->verPagina('includes/instructor/hoja_vida/hoja.php');
   }
   elseif ($_GET["accion"] == "edithoja") {
    $controlador->verPagina('includes/instructor/hoja_vida/edithoja.php');
   }
   elseif ($_GET["accion"] == "calhv") {
    $controlador->verPagina('includes/instructor/hoja_vida/calHv.php');
   }   
   elseif ($_GET["accion"] == "vercal") {
    $controlador->verPagina('includes/instructor/hoja_vida/vercal.php');
   }
   elseif ($_GET["accion"] == "editcal") {
    $controlador->verPagina('includes/instructor/hoja_vida/editcal.php');
   }
   
   


   elseif($_GET["accion"] == "delatehoja"){

    require("connect_db.php");
     
    extract($_GET);
    
    
    $sqlborrar="DELETE FROM hoja_vida WHERE HvId=$id";
    $resborrar=mysqli_query($mysqli,$sqlborrar);
    echo '<script>alert("REGISTRO ELIMINADO")</script> ';
    //header('Location: proyectos.php');
    
    header('Location: memberpage.php?accion=gesthojas');
     
     
 }
 elseif($_GET["accion"] == "delCal"){

   require("connect_db.php");
    
   extract($_GET);
   
   
   $sqlborrar="DELETE FROM calificacion WHERE CaId=$id";
   $resborrar=mysqli_query($mysqli,$sqlborrar);
   echo '<script>alert("REGISTRO ELIMINADO")</script> ';
   //header('Location: proyectos.php');
   
   header("Location: memberpage.php?id=$idEg&accion=vercal");
    
    
}

   
/*CIERRA PÁGINAS ADMINISTRADOR*/
/*ABRE PÁGINAS INSTRUCTOR*/
elseif ($_GET["accion"] == "egresados") {
 $controlador->verPagina('includes/instructor/egresado/gestionegresado.php');
}
elseif ($_GET["accion"] == "addegresado") {
 $controlador->verPagina('includes/instructor/egresado/addegresado.php');
}
elseif ($_GET["accion"] == "infoegresado") {
 $controlador->verPagina('includes/instructor/egresado/infegresado.php');
}

elseif ($_GET["accion"] == "aEg") {
 $controlador->verPagina('includes/instructor/egresado/edditegresado.php');
}

} else {
 $controlador->verPagina('includes/instructor/instruindex.php');
}

 ?>

</body>
</html>