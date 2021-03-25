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
    
    require_once('includes/registroinfo.php');
    require ('includes/mostrar/mostraregresado.php');


?>
<div id="contenido">


<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>REGISTRO DE HOJA</h2>
            </section>
            <section class="info_items">

                <p><span class="fa fa-mobile"></span>Los cracks de la programación 11-3 &copy;</p>
            </section>
        </section>

        <form id="frmregistro" class="form_contact" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $EgId?>">
            <h2>Informacion Personal</h2>
            <div class="user_info">
                <div>
                    <img src="<?php echo $InsFoto; ?>" onerror=this.src="media/fotos/not_found/default_user.jpg" height="200px">
                     </div>
                        <table>
                    <tr>
                        <td><label for="nombres">Nombres</label>
                            <p><?php echo $Nombres; ?></p></td>                        
                    </tr>
                    <tr>
                        <td><label for="apellidos">Apellidos</label>
                        <p><?php echo $Apellidos; ?></p></td>
                    <tr>
                    <td><label for="tipodoc">Tipo de Documento</label>
                        <p><?php echo $Tipodoc; ?></p></td>
                    </tr>
                    <tr>
                        <td><label for="numdoc">Numero de Documento</label>
                        <p><?php echo $Numdoc; ?></p></td>                        
                    </tr>
                    <tr><td colspan="2"><div id="aprendiz"></div></td>
                    <tr>
                        <td><label for="fechanacimiento">Fecha de Nacimiento</label>
                        <p><?php echo $Fechan; ?></p></td>
                    <tr>
                        <td><label for="ciudadr">Ciudad de Residencia</label>
                        <p><?php echo $Ciudadr; ?></p></td>
                    </tr>
                    <tr>
                        <td><label for="numtelefono">Numero Telefonico</label>
                        <p><?php echo $NumTelefono; ?></p></td>
                    </tr>

                        
                </table>
                <table table id="caja2" class="table table-danger">
                    <?php
                        
                            $idEst=$EgId;

                            $texto='Mostar Más';

                            require("connect_db.php");
                            $sql="SELECT * FROM estudios WHERE EstEgresado=$id LIMIT 1";
                    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                            $query=mysqli_query($mysqli,$sql);
                            
                            
                            
                            $checkEg=mysqli_query($mysqli,"SELECT * FROM estudios WHERE EstEgresado=$idEst");
                            $check_Eg=mysqli_num_rows($checkEg);
                            
                            if ($check_Eg==NULL){
                                echo 'nada we';
                            }
                            
                            

                            ?>
                    <tr>
                        <td colspan="6"><h5>Estudios Realizados</h5></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td>Nombre</td>
                        <td>Nivel Formativo</td>
                        <td>Fecha de inicio</td>
                        <td>Fecha de Graduación</td>
                        <td>Lugar de Graduación</td>
                    </tr>
                    <?php 
                    if($check_Eg>=1){
                        $estudios="<tr><td><a href='adminpage.php?id=$idEst&accion=addestudios' class='btn btn-danger btn-lg btn-block'>Agregar Estudios</a></td></tr>";;
                    }
                    while($arreglo=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $arreglo[3]?></td>
                        <td><?php echo $arreglo[2]?></td>
                        <td><?php echo $arreglo[4]?></td>
                        <td><?php echo $arreglo[5]?></td>
                        <td><?php echo $arreglo[6]?></td>
                    </tr>
                    
                    <?php } ?>  
                 <tr>
                    
                        <td colspan="6">
                            <a id="boton" value="Ocultar" class="btn btn-danger btn-lg btn-block" onclick="Mostrar_Ocultar2()"><?php echo $texto;?></a>  
                        </td>
                </tr> 
                </table>
                <table id="caja1" class="table table-danger" style="display: none; position: relative;" >
                    <?php
                        
                            $idEst=$EgId;

                              $texto='Mostar Menos';

                            
                            require("connect_db.php");
                            $sql="SELECT * FROM estudios WHERE EstEgresado=$id";
                    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                            $query=mysqli_query($mysqli,$sql);
                            
                            
                            
                            $checkEg=mysqli_query($mysqli,"SELECT * FROM estudios WHERE EstEgresado=$idEst");
                            $check_Eg=mysqli_num_rows($checkEg);
                            
                            if ($check_Eg==NULL){
                                echo 'nada we';
                            }
                            
                            

                            ?>
                    <tr>
                        <td colspan="6"><h5>Estudios Realizados</h5></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td>Nombre</td>
                        <td>Nivel Formativo</td>
                        <td>Fecha de inicio</td>
                        <td>Fecha de Graduación</td>
                        <td>Lugar de Graduación</td>
                    </tr>
                    <?php 
                    if($check_Eg>=1){
                        $estudios="<tr><td><a href='adminpage.php?id=$idEst&accion=addestudios' class='btn btn-danger btn-lg btn-block'>Agregar Estudios</a></td></tr>";;
                    }
                    while($arreglo=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $arreglo[3]?></td>
                        <td><?php echo $arreglo[2]?></td>
                        <td><?php echo $arreglo[4]?></td>
                        <td><?php echo $arreglo[5]?></td>
                        <td><?php echo $arreglo[6]?></td>
                    </tr>
                    
                    <?php } ?>  
                 <tr>
                    
                        <td colspan="6">
                            <a id="boton" value="Ocultar" class="btn btn-danger btn-lg btn-block" onclick="Mostrar_Ocultar2()"><?php echo $texto ?></a>  
                        </td>
                </tr>
                </table>
                
                <input type="submit" name="" value="Guardar" id="btnSend">
            </div>
        </form>

    </section>

</div>​





