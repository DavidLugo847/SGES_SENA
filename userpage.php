<html>
    <head>
        <title>SGES - Home User</title>
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
 $controlador->verPagina('includes/usuario/infoperson.php');
 }
 elseif($_GET["accion"] == "infocount"){
 $controlador->verPagina('includes/usuario/infocount.php');
 }
 elseif($_GET["accion"] == "aic"){
 $controlador->verPagina('includes/usuario/editusuario.php');
 }
 elseif($_GET["accion"] == "addinfo"){
 $controlador->verPagina('includes/usuario/addinfoperson.php');
 }
 elseif($_GET["accion"] == "editip"){
 $controlador->verPagina('includes/usuario/editinfoperson.php');
 }
 elseif($_GET["accion"] == "mhoja"){
    $controlador->verPagina('includes/usuario/verhoja.php');
    }
    elseif($_GET["accion"] == "vercal"){
        $controlador->verPagina('includes/usuario/vercal.php');
        }
 
 
 /*PÁGINAS DE USUARIO*/
 elseif($_GET["accion"] == "inicio"){
 $controlador->verPagina('includes/usuario/indexusuario.php');
 }
} else {
 $controlador->verPagina('includes/usuario/usuarioindex.php');
}

 ?>

</body>
</html>