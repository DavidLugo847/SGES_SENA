<?php
$title = 'Members Page';
require_once('includes/config.php');
require('layout/headerinstru.php'); 

require_once('includes/registroinfo.php');

if (isset($_POST['pasconfirmar'])){
$nota1=$_POST['punt'];
$nota2=$_POST['resp'];
$nota3=$_POST['discip'];
$nota4=$_POST['ppersonal'];
$nota5=$_POST['desem'];
}
?>
<div id="contenido">


<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>CALIFICACIÓN HOJA DE VIDA</h2>
            </section>

        </section>

        <form id="frmprom" class="form_contact" method="post">
            <h2>Calificación</h2>
            <div class="user_info">
               
                        <table>
                            <input type="hidden" name="id" value="<?php $id=$_GET['id'];echo $id;?>">
                        <tr>
                            <td><label for="names">Puntualidad</label</td>
                            <td><input name="punt" class="nota" type="number" min="0" max="5" value="<?php echo $nota1; ?>" required="" id="punt">
                        </td>
                        </tr>
                        <tr>
                            <td><label for="names">Responsabilidad</label</td>
                        <td><input name="resp" class="nota" type="number" value="<?php echo $nota2; ?>" min="0" max="5" required id="resp"></td>
                        </tr>
                        <tr>
                            <td><label for="names">Disciplina</label</td>
                        <td><input name="discip" class="nota" type="number" value="<?php echo $nota3; ?>" min="0" max="5" required id="discip"></td>
                        </tr>
                        <tr>
                            <td><label for="names">Presentacion Personal</label</td>
                        <td><input name="ppersonal" class="nota" type="number" value="<?php echo $nota4; ?>" min="0" max="5" required id="ppersonal"></td>
                        </tr>
                        <tr>
                            <td><label for="names">Desempeño</label</td>
                        <td><input name="desem" class="nota" type="number" value="<?php echo $nota5; ?>" min="0" max="5"required id="desem"></td>
                        </tr>
                  
                    
                </table>
                
                


                
                <?php
                if (isset($_POST['pasconfirmar'])){

                if(($nota1>=0 and $nota1<=20)and ($nota2>=0 and $nota2<=20)and($nota3>=0 and $nota3<=20)and($nota4>=0 and $nota4<=20)){
                $promedio= ($nota1+$nota2+$nota3+$nota4)/4;
                }
                else{echo "Error, ingrese notas validas";}

                ?>
                
                <table>
        <tr><td>
                 <p class="promp"><?php
                 
                echo'<link href="recursos/main.css" type="text/css" rel="stylesheet">';

                if($promedio < 1 ){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-half'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}



                elseif($promedio >=1 and $promedio < 1.5 ){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}

                elseif($promedio >=1.5 and $promedio < 2 ){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-half'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}
                    
                elseif($promedio >= 2 and $promedio < 2.5){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}

                elseif($promedio >= 2.5 and $promedio < 3){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-half'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}

                elseif($promedio >= 3 and $promedio < 3.5){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-empty'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}
                elseif($promedio >= 3.5 and $promedio < 4){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-half'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}

                elseif($promedio >= 4 and $promedio <= 4.5){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-empty'></span>
                    
                    </font>";}

                elseif($promedio > 4.5 and $promedio < 5){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-half'></span>
                    
                    </font>";}

                elseif($promedio == 5){
                    echo"<font face = 'Arial' color='#FFA600' size='5'>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    <span class='icon-star-full'></span>
                    
                    </font>";}?></p>
            </td></tr>
        <tr>
                 <td><label for="names">Su Promedio es:</label</td>
                 <td><?php echo '' .$promedio; ?>
                     <input type="hidden" name="promedio" value="<?php echo $promedio;?>">
                 </td>
                 
                 </tr>
                    
                </table>
                <table>
                    <tr>
                        <td><input type="submit" name="pasconfirmar" value="Guardar" id="btnSend" ></td>
                        <td><input type="submit" name="submitProm" value="Confirmar" id="btnSend"></td>
                </tr>
                </table>
 <?php }
                 else {?>
                 <input type="submit" name="pasconfirmar" value="Guardar" id="btnSend">    
                 <?php }?>
            </div>
        </form>

    </section>

</div>​



