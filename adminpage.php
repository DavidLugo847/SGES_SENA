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
 if($_GET["accion"] == "gestadmin"){
 $controlador->verPagina('includes/admin/gestionadmins.php');
 }
  elseif ($_GET["accion"] == "addadmin") {
  $controlador->verPagina('includes/admin/addadmin.php');
}
 elseif($_GET["accion"] == "aAdmin"){
$controlador->verPagina('includes/admin/editadmin.php');
 }
 elseif($_GET["accion"] == "infopersonal"){
     
$controlador->verPagina('includes/admin/infoperson.php');
 }
 elseif($_GET["accion"] == "infocount"){
     
$controlador->verPagina('includes/admin/infocount.php');
 }
  /*CIERRA PÁGINAS DE ADMINISTRADOR*/

  /*PÁGINAS DE INSTRUCTOR*/
 elseif($_GET["accion"] == "gestinstru"){
 $controlador->verPagina('includes/admin/instru/gestioninstru.php');
 }
 elseif($_GET["accion"] == "addinstru"){
 $controlador->verPagina('includes/admin/instru/addinstru.php');
}
elseif($_GET["accion"] == "addinstruinfo"){
 $controlador->verPagina('includes/admin/instru/addinfoinstru.php');
}
/*Actualizar*/
 elseif($_GET["accion"] == "aInstru"){
$controlador->verPagina('includes/admin/instru/editinstru.php');
}
elseif ($_GET['accion'] == "ainfinstr") {
$controlador->verPagina('includes/admin/instru/editInfoinstru.php');
}
/*Cierra actualizar*/
/*CIERRA PÁGINAS DE INSTRUCTOR*/


/*ABRE PÁGINAS EGRESADO*/
elseif($_GET["accion"] == "gestegresado"){
 $controlador->verPagina('includes/admin/egresado/gestionegresado.php');
 }
 elseif($_GET["accion"] == "addegresado"){
 $controlador->verPagina('includes/admin/egresado/addegresado.php');
 }
 elseif($_GET["accion"] == "infoegresado"){
 $controlador->verPagina('includes/admin/egresado/infegresado.php');
 }
 elseif($_GET["accion"] == "gestionestudios"){
 $controlador->verPagina('includes/admin/egresado/gesionestudios.php');
 }
 elseif($_GET["accion"] == "addestudios"){
 $controlador->verPagina('includes/admin/egresado/addestudios.php');
 }
 elseif($_GET["accion"] == "editestudos"){
 $controlador->verPagina('includes/admin/egresado/editestudios.php');
 }
 elseif($_GET["accion"] == "aEg"){
 $controlador->verPagina('includes/admin/egresado/edditegresado.php');
 }
/*CIERRA PÁGINAS EGRESADO*/
 
 
 /*GESTIONAR HOJAS*/
 
 elseif($_GET["accion"] == "gestionhoja"){
 $controlador->verPagina('includes/admin/hoja_vida/gestionhoja.php');
 }
 elseif($_GET["accion"] == "addhoja"){
 $controlador->verPagina('includes/admin/hoja_vida/addhojaselect.php');
 }
 elseif($_GET["accion"] == "addhojae"){
 $controlador->verPagina('includes/admin/hoja_vida/addhoja.php');
 }
 elseif($_GET["accion"] == "edithoja"){
 $controlador->verPagina('includes/admin/hoja_vida/edithoja.php');
 }
 elseif($_GET["accion"] == "mhoja"){
 $controlador->verPagina('includes/admin/hoja_vida/hoja.php');
 }
 elseif($_GET["accion"] == "calhv"){
 $controlador->verPagina('includes/admin/hoja_vida/calHv.php');
 }
 elseif($_GET["accion"] == "vercal"){
    $controlador->verPagina('includes/admin/hoja_vida/vercal.php');
    }
   elseif($_GET["accion"] == "editcal"){
   $controlador->verPagina('includes/admin/hoja_vida/editcal.php');
   }
    
    
 elseif($_GET["accion"] == "delatehoja"){

    require("connect_db.php");
     
    extract($_GET);
    
    
    $sqlborrar="DELETE FROM hoja_vida WHERE HvId=$id";
    $resborrar=mysqli_query($mysqli,$sqlborrar);
    echo '<script>alert("REGISTRO ELIMINADO")</script> ';
    //header('Location: proyectos.php');
    
    header('Location: adminpage.php?accion=gestionhoja');
     
     
 }
 elseif($_GET["accion"] == "delCal"){

   require("connect_db.php");
    
   extract($_GET);
   
   
   $sqlborrar="DELETE FROM calificacion WHERE CaId=$id";
   $resborrar=mysqli_query($mysqli,$sqlborrar);
   echo '<script>alert("REGISTRO ELIMINADO")</script> ';
   //header('Location: proyectos.php');
   
   header("Location: adminpage.php?id=$idEg&accion=vercal");
    
    
}

 
 
 
 
 
 /*CIERRA GESTIONAR HOJAS*/
 elseif($_GET["accion"] == "peticionacceso"){
 $controlador->verPagina('includes/admin/peticionacceso.php');
 }
 elseif($_GET["accion"] == "infopet"){
 $controlador->verPagina('includes/admin/infopet.php');
 }
 /*VISITA*/
elseif($_GET["accion"] == "petacept"){
    require("connect_db.php");
     
    extract($_GET);
    
    
    $petacept="update usuarios set UsEstado=2 WHERE UsId=$id";
    $respetacept=mysqli_query($mysqli,$petacept);
    echo '<script>alert("USUARIO ACEPTADO")</script> ';
    //header('Location: proyectos.php');
    
    header('Location: adminpage.php?accion=peticionacceso');
     
 
 }
 elseif($_GET["accion"] == "petdecline"){
    require("connect_db.php");
     
    extract($_GET);
    
    
    $petacept="update usuarios set UsEstado=3 WHERE UsId=$id";
    $respetacept=mysqli_query($mysqli,$petacept);
    echo '<script>alert("USUARIO RECHAZADO")</script> ';
    //header('Location: proyectos.php');
    
    header('Location: adminpage.php?accion=peticionacceso');
     
 
 }
 
  elseif($_GET["accion"] == "listdeclines"){
 $controlador->verPagina('includes/estusuario/usrechazados.php');
 }
 elseif($_GET["accion"] == "listacepts"){
 $controlador->verPagina('includes/estusuario/usaceptados.php');
 }
/*CERRAR */
} else {
 $controlador->verPagina('includes/admin/admin.php');
}


 ?>

</body>
</html>