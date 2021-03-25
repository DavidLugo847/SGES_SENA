<?php
$title = 'Members Page';
require_once('includes/config.php');
require('layout/headerinstru.php'); 
require('includes/mostrar/mostraregresado.php');
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
            <h2>Registro de estudios</h2>
            <div style="display: flex; ">
            <div style="float: left; width: 50%;">
            <label>Nombre: </label><p><?php echo $Nombres;?> <?php echo $Apellidos;?></p>
            <label>No documento: </label><p><?php echo $Numdoc;?></p>
            </div>
            <div style="float: left; width: 50%;">
                <img src="<?php echo $InsFoto; ?> " height="140px" onerror=this.src="media/fotos/not_found/default_user.jpg">
            </div>
            </div>
            <div class="user_info">

                        <table>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <tr>
                        <td><label for="nivelf">Nivel de formación</label>
                            <div class="content-select" ><select class="selc" name="nivelf">
                                <option selected>---Selecciona el nivel de formación---</option>
                                <option>Técnico</option>
                                <option>Tecnólogo</option>
                            </select><i></i></div></td>                        
                    </tr>        
                    <tr>
                        <td><label for="nombrecurso">Nombre del curso</label>
                        <input type="text" name="nombrecurso" id="nombreaprendiz"></td>                        
                    </tr>                 
                    </tr>
                    <tr>
                        <td><label for="fechainicio">Fecha de inicio de la formación</label>
                        <input type="date" name="fechainicio" id=documento"></td>                        
                    </tr>
                    <tr><td colspan="2"><div id="aprendiz"></div></td>
                    <tr>
                        <td><label for="fechafinal">Fecha de graduación</label>
                        <input type="date" name="fechafinal" id=documento"></td>
                    <tr>
                        <td><label for="sedegradu">Sede de graduación</label>
                        <input type="text" name="sedegradu" id="ciudadaprendiz"></td>
                    </tr>


                <i></i>  
        </tr>
                </table>
                <div><tr>
                    <label>Certificado</label>
                        <td width="170" height="150" rowspan="3"><input type="file" name="certificado" id="file-5" accept="image/jpg,png,jpeg" class="inputfile-5" data-multiple-caption="{count} archivos seleccionados" required="" multiple />
                    <label for="file-5">
                    <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    </figure>
                    <span class="iborrainputfile"><center>Seleccionar archivo</center></span>
                    </label></td>
                    </tr></div>
                
                <input type="submit" name="estudios" value="Guardar" id="btnSend">
            </div>
        </form>

    </section>

</div>​

