<!DOCTYPE html>
<?php
$title = 'Members Page';
require('layout/headeruser.php'); 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="recursos/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/main.css">
    <link href="style/main_1.css" rel="stylesheet" type="text/css"/>
    <script src="recursos/jquery-3.2.1.min.js"></script>
    <script src="recursos/bootstrap.min.js"></script>
    <title>SGES - FORMULARIO</title>
</head>
<?php
    require_once('includes/config.php');
    require("includes/registro.php");

?>
<div id="contenido">


<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>REGISTRO DE USUARIO</h2>
            </section>
            <section class="info_items">

                <p><span class="fa fa-mobile"></span>Los cracks de la programación 11-3 &copy;</p>
            </section>
        </section>

        <form id="frmregistro" class="form_contact" method="post" enctype="multipart/form-data">
            <h2>Informacion Personal</h2>
            <div class="user_info">
                
                        <table>
                    <tr>
                        <td><label for="nombres">Nombres</label>
                        <input type="text" name="nombres" id="nombreaprendiz" required=""></td>                        
                    </tr>
                    <tr>
                        <td><label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidoaprendiz" required=""></td>
                    <tr>
                    <tr>
                        <td><label for="nombreempresa">Nombre de la empresa</label>
                        <input type="text" name="nombreempresa" placeholder="Opcional..." id="apellidoaprendiz"></td>
                    <tr>
                    <tr>
                        <td><label for="cargoempresa">Cargo de empresa</label>
                        <input type="text" name="cargoempresa" placeholder="Opcional..." id="ciudadaprendiz"></td>
                    </tr>
                    <tr>
                        <td><label for="numtelefono">Correo de Contacto</label>
                        <input type="text" name="correo" id="telefonoaprendiz" required=""></td>
                    </tr>
                    <tr>
                        <td><label for="numtelefono">Numero de contacto</label>
                        <input type="text" name="numtelefono" id="telefonoaprendiz" required=""></td>
                    </tr>
                    <tr>
                        <td><label for="motivovisita">Motivo de la visita</label>
                            <textarea name="motivovisita" rows="40" cols="40" required=""></textarea></td>
                    </tr>
 

                </select><i></i>  
        </tr>
                </table>

                <input type="submit" name="infousuario" value="Guardar" id="btnSend">
            </div>
        </form>

    </section>

</div>​



