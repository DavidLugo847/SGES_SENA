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
    

?>
<div class="container">


<div class="row">

       <!-- <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>REGISTRO DE HOJA DE VIDA</h2>
            </section>
            <section class="info_items">

                <p><span class="fa fa-mobile"></span>Los cracks de la programación 11-3 &copy;</p>
            </section>
        </section>-->

        <form id="frmregistro" class="form_buscar" method="post" enctype="multipart/form-data">
            
            <div class="user_info">
             <div class="textotitulo_user_info">Informacion Egresado</div> 
                    <div class="header_form_buscar">                    
                        <input type="search" name="nombres" class="input-form-submit" id="nombreaprendiz" placeholder="Buscar">                        
                        <label for="buscar" class="icon-search"></label>
                        <input type="submit" name="buscar" value="Buscar" id="btnSend">  
                    </div>
                                           
                   

                <table border="" class="table-gestion">
                    <tr class="tabla-cabecera">
                                        <td>Id</td>
                                        <td>Nombres</td>
                                        <td>Apellidos</td>
                                        <td>Tipo de documento</td>
                                        <td>Num Doc</td>
                                        <td>Fecha Nacimiento</td>
                                        <td>Ciudad de Residencia</td>
                                        <td>Número Teléfono</td>
                                        <td>Seleccionar Egresado</td>
                                    </tr>

                                 <?php 
                                 if(isset($_POST['buscar'])){
                                     
                                 $buscador=$_POST['nombres'];
                                 
                                $sql=("SELECT * FROM egresado WHERE EgNombres like '$buscador' or EgApellidos like '$buscador'");
                                
                                $checkEg=mysqli_query($mysqli,"SELECT * FROM egresado WHERE EgNombres like '$buscador' or EgApellidos like '$buscador'");
                        	$check_Eg=mysqli_num_rows($checkEg);
                                
                                
                                

                                if ($check_Eg==NULL){
                                    
                                    echo '<tr><td colspan="9"><center>No hay resultados de busqueda para la palabra "'.$buscador.'"</center></td></tr>';
                                }
                                else{
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
				 while($arreglo=mysqli_fetch_array($query)){
				                    	echo "<tr class='success'>";
				    	                echo "<td>$arreglo[0]</td>";
                                        echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td>$arreglo[3]</td>";
                                        echo "<td>$arreglo[4]</td>";
                                        echo "<td>$arreglo[5]</td>";
                                        echo "<td>$arreglo[6]</td>";
                                        echo "<td>$arreglo[7]</td>";
                                        echo "<td><a href='memberpage.php?id=$arreglo[0]&accion=addhojae'>Seleccionar</a></td>";
                                        echo "</tr>";
                                 }
                                 }
                                 }
                                else {
                                    $sql=("SELECT * FROM egresado");
                                    $query=mysqli_query($mysqli,$sql);
                                    while($arreglo=mysqli_fetch_array($query)){
                                    echo "<tr class='success'>";
                                    echo "<td>$arreglo[0]</td>";
                                    echo "<td>$arreglo[1]</td>";
                                    echo "<td>$arreglo[2]</td>";
                                    echo "<td>$arreglo[3]</td>";
                                    echo "<td>$arreglo[4]</td>";
                                    echo "<td>$arreglo[5]</td>";
                                    echo "<td>$arreglo[6]</td>";
                                    echo "<td>$arreglo[7]</td>";
                                    echo "<td class='rojo'><a href='memberpage.php?id=$arreglo[0]&accion=addhojae'>Seleccionar</a></td>";
                                    echo "</tr>";
                                    }
                                }
                                        ?>
                </table>
                
            </div>
        </form>

    <div class="row">
    <!--$sql=("SELECT * FROM egresado WHERE EgNombres or EgApellidos or EgTIpodoc or EgNumdoc or EgFechanacimiento or EgCiudadre or EgNumTelefono=$buscador");-->
</div>​



