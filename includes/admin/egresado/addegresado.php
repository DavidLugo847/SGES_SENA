<!DOCTYPE html>
<?php
$title = 'Members Page';
require_once('includes/config.php');
require('layout/headeradmin.php'); 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="recursos/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/main.css">
    <script src="recursos/jquery-3.2.1.min.js"></script>
    <script src="recursos/bootstrap.min.js"></script>
    <title>SGES - FORMULARIO</title>
</head>
<?php
    
    require("includes/registroinfo.php");

?>
<div id="contenido">


<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>REGISTRO DE EGRESADO</h2>
            </section>
            <section class="info_items">

                <p><span class="fa fa-mobile"></span>Los cracks de la programación 11-3 &copy;</p>
            </section>
        </section>

        <form id="frmregistro" class="form_contact" method="post" enctype="multipart/form-data">
            <h2>Informacion Personal</h2>
            <div class="user_info">
                <div><tr>
                        <td width="170" height="150" rowspan="3"><input type="file" name="foto" id="file-5" accept="image/jpg,png,jpeg" class="inputfile-5" data-multiple-caption="{count} archivos seleccionados" required="" multiple />
                    <label for="file-5">
                    <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    </figure>
                    <span class="iborrainputfile"><center>Seleccionar archivo</center></span>
                    </label></td>
                    </tr></div>
                        <table>
                    <tr>
                        <td><label for="nombres">Nombres</label>
                        <input type="text" name="nombres" id="nombreaprendiz"></td>                        
                    </tr>
                    <tr>
                        <td><label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidoaprendiz"></td>
                    <tr>
                    <td><label for="tipodoc">Tipo de Documento</label>
                        <div class="content-select"><select class="selc" width="" name="tipodoc" value="">
                        <option selected>---Selecciona el tipo de documento---</option>
                        <option>Cedula de Ciudadania</option>
                        <option>Cedula de Extrangeria</option>
                        <option>Targeta de Identidad</option>
                        <option>Pasaporte</option>
                        <option>Numero Ciego SENA</option>
                        <option>NIT</option>
                        <option>DNI</option>
                        </select><i></i>
                        </div></td>
                    </tr>
                    <tr>
                        <td><label for="numdoc">Numero de Documento</label>
                        <input type="text" name="numdoc" id=documento"></td>                        
                    </tr>
                    <tr><td colspan="2"><div id="aprendiz"></div></td>
                    <tr>
                        <td><label for="fechanacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fechanacimiento" id=documento"></td>
                    <tr>
                        <td><label for="ciudadr">Ciudad de Residencia</label>
                        <input type="text" name="ciudadr" id="ciudadaprendiz"></td>
                    </tr>
                    <tr>
                        <td><label for="numtelefono">Numero Telefonico</label>
                        <input type="text" name="numtelefono" id="telefonoaprendiz"></td>
                    </tr>

                </select><i></i>  
        </tr>
                </table>

                <input type="submit" name="submite" value="Guardar" id="btnSend">
            </div>
        </form>

    </section>

</div>​



