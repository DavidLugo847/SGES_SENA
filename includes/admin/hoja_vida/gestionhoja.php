
<?php
require("connect_db.php");
$title = 'Members Page';
require('layout/headeradmin.php'); 
?>

<div class="container">

	<div class="row">

	    
			
				<h2>Gestionar Hojas de vida</h2>
                              	<hr>
                                <a href="adminpage.php?accion=addhoja" class="btn btn-danger btn-lg btn-block"><h4>Agregar hoja de vida</h4></a>
                                <br>
                            <?php 
                                
                                $sql=("SELECT * FROM hoja_vida");
                                $query=mysqli_query($mysqli,$sql);
				while($arreglo=mysqli_fetch_array($query)){
                                    
                                $IdEgresado=$arreglo[1];

                                $nombres=("SELECT * FROM egresado WHERE EgId=$IdEgresado");
                                $ressqll=mysqli_query($mysqli,$nombres);
                                while ($row=mysqli_fetch_row ($ressqll)){
                                $EstId=$row[0];
                                $EgNombres=$row[1];
                                $EgApellidos=$row[2];
                                $EgTipodoc=$row[3];
                                $EgNumdoc=$row[4];
                                $EgFechaN=$row[5];
                                $CiudadRe=$row[6];
                                $EstuTelefono=$row[7];
                                $EstFoto=$row[8];
                                  }  
            
                               ?>

                                <div class="gestion-global">
                                <a href="adminpage.php?id=<?php echo $EstId?>&accion=mhoja">
                                <div class="gestion-hoja">
                                <div class="foto"><img src="<?php echo $EstFoto;?>" alt=""></div>
                                <div class="contener-info">
                                <div class="info1"><label>Nombre:</label><br><?php echo $EgNombres.' '.$EgApellidos ?></div>
                                <div class="info2"><label>Documento:</label><br><?php echo $EgTipodoc.':  '.$EgNumdoc ?></div>
                                </div>
                                <div class="contener-info">
                                <div class="info1"><label>Ciudad de residencia:</label><br><?php echo $CiudadRe; ?></div>
                                <div class="info2"><label>Fecha de nacimiento:</label><br><?php echo $EgFechaN;?></div>
                                </div>
                                </div>
                                </a>
                                <div class="botoncal">
                                  <div class="mita-cal">
                                        <div class="num-cal"><?php    
                                        $consulta=("SELECT SUM(CaPromedio) FROM calificacion where CaHvId='$IdEgresado'");    
                                        $ressqll=mysqli_query($mysqli,$consulta);
                                        while ($row=mysqli_fetch_row ($ressqll)){
                                           $CalSuma=$row[0]; 
                                        }
                                        $sumatabla=("SELECT COUNT(*) FROM calificacion where CaHvId='$IdEgresado'");    
                                        $pedido=mysqli_query($mysqli,$sumatabla);
                                        while ($row=mysqli_fetch_row ($pedido)){
                                            
                                           $CalCenta=$row[0]; 

                                           if(empty($CalCenta)){
                                            $CalCenta=0.1;
                                           }
                                        }
                                        
                                        $suma=$CalSuma/$CalCenta;

                                        echo round($suma, 1);
                                        ?></div>
                                        <div class="estrella-cal">
                                            <div class="mitad-estrella-cal">
                                            <?php
                 
                                                echo'<link href="recursos/main.css" type="text/css" rel="stylesheet">';
                                
                                                if($suma < 1 ){
                                                    echo"<font face = 'Arial' color='#FFA600' size='3'>
                                                    <span class='icon-star-half'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                
                                
                                
                                                elseif($suma >=1 and $suma < 1.5 ){
                                                    echo"<font face = 'Arial' color='#FFA600' size='3'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                
                                                elseif($suma >=1.5 and $suma < 2 ){
                                                    echo"<font face = 'Arial' color='#FFA600' size='3'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-half'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                                    
                                                elseif($suma >= 2 and $suma < 2.5){
                                                    echo"<font face = 'Arial' color='#FFA600' size='3'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                
                                                elseif($suma >= 2.5 and $suma < 3){
                                                    echo"<font face = 'Arial' color='#FFA600' size='4'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-half'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                
                                                elseif($suma >= 3 and $suma < 3.5){
                                                    echo"<font face = 'Arial' color='#FFA600' size='4'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-empty'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                                elseif($suma >= 3.5 and $suma < 4){
                                                    echo"<font face = 'Arial' color='#FFA600' size='4'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-half'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                
                                                elseif($suma >= 4 and $suma <= 4.5){
                                                    echo"<font face = 'Arial' color='#FFA600' size='4'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-empty'></span>
                                                    
                                                    </font>";}
                                
                                                elseif($suma > 4.5 and $suma < 5){
                                                    echo"<font face = 'Arial' color='#FFA600' size='4'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-half'></span>
                                                    
                                                    </font>";}
                                
                                                elseif($suma == 5){
                                                    echo"<font face = 'Arial' color='#FFA600' size='4'>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    <span class='icon-star-full'></span>
                                                    
                                                    </font>";}?>
                                                    
                                            </div>
                                            <div class="resto-estrella-cal">
                                                
                                            <?php
                                            $consulta2=("SELECT COUNT(*) FROM calificacion WHERE CaHvId=$IdEgresado");    
                                            $ressqll=mysqli_query($mysqli,$consulta2);
                                            while ($row=mysqli_fetch_row ($ressqll)){
                                               $num=$row[0]; 
                                            }
                                                                                                                                
                                            ?>
                                            
                                            
                                            
                                            <strong><?php echo round($num, 1); ?></strong> VOTOS</div>
                                        </div>
                                    </div>
                                  <div class="resto-cal">
                                  <a href="adminpage.php?id=<?php echo $arreglo[1];?>&accion=calhv"><div class="botones-cal">Add<br> calificación</div></a>
                                  <a href="adminpage.php?id=<?php echo $arreglo[1];?>&accion=vercal"><div class="botones-cal">Ver<br> calificaciones</div></a>
                                  </div>
                                </div>
                                <div class="botonesEA">
                                <a href="adminpage.php?id=<?php echo $arreglo[1];?>&accion=edithoja"><div class="botonA"><span class="icon-pencil"></div></span></a>
                                <a href="adminpage.php?id=<?php echo $arreglo[0];?>&accion=delatehoja"><div class="botonE"><span class="icon-trash"></div></span></a>
                                </div>
                                </div> 
                                <?php  }?>  



                               <!--
                                    <tr>
                                        <td><?php echo $arreglo[0]; ?></td>                                        
                                        <td><?php echo $EgNombres;?></td>
                                        <td><?php echo $EgApellidos; ?></td>
                                        <td><a href="adminpage.php?id=<?php echo $arreglo[1];?>&accion=mhoja">Ver</a></td>
                                        <td>
                                        <?php    
                                        $consulta=("SELECT SUM(CaPromedio) FROM calificacion");    
                                        $ressqll=mysqli_query($mysqli,$consulta);
                                        while ($row=mysqli_fetch_row ($ressqll)){
                                           $CalSuma=$row[0]; 
                                        }
                                        $sumatabla=("SELECT COUNT(*) FROM calificacion");    
                                        $pedido=mysqli_query($mysqli,$sumatabla);
                                        while ($row=mysqli_fetch_row ($pedido)){
                                           $CalCenta=$row[0]; 
                                        }
                                        
                                        $suma=$CalSuma/$CalCenta;

                                        echo round($suma, 1);
                                        ?>

                                        <p class="promp">
                <?php
                 
                 echo'<link href="recursos/main.css" type="text/css" rel="stylesheet">';
 
                 if($suma < 1 ){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-half'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
 
 
 
                 elseif($suma >=1 and $suma < 1.5 ){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
 
                 elseif($suma >=1.5 and $suma < 2 ){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-half'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
                     
                 elseif($suma >= 2 and $suma < 2.5){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
 
                 elseif($suma >= 2.5 and $suma < 3){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-half'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
 
                 elseif($suma >= 3 and $suma < 3.5){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-empty'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
                 elseif($suma >= 3.5 and $suma < 4){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-half'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
 
                 elseif($suma >= 4 and $suma <= 4.5){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-empty'></span>
                     
                     </font>";}
 
                 elseif($suma > 4.5 and $suma < 5){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-half'></span>
                     
                     </font>";}
 
                 elseif($suma == 5){
                     echo"<font face = 'Arial' color='#FFA600' size='5'>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     <span class='icon-star-full'></span>
                     
                     </font>";}?></p>    
                                        </td>
                                        <td><a href="adminpage.php?id=<?php echo $arreglo[1];?>&accion=calhv">Calificar</a></td>
                                        <td><a href="adminpage.php?id=<?php echo $arreglo[1];?>&accion=edithoja">Editar</a></td>
                                        <td><a href="adminpage.php?id=<?php echo $arreglo[0];?>&accion=delatehoja">Eliminar</a></td>
                                    </tr>
                                                               

                                </table>
                 -->

		
	</div>


</div>