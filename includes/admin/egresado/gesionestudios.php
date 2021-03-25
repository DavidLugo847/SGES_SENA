
<?php
$title = 'Members Page';
require('includes/mostrar/mostraregresado.php');
require('layout/headeradmin.php');
?>


<div class="container">
    <input type="hidden" value="<?php echo $EgId;?>">
	<div class="row">

	    
			
                <h2>Estudios: <?php echo $Nombres;?> <?php echo $Apellidos;?></h2>
                              	<hr>
                                <a href="adminpage.php?id=<?php echo $id ?>&accion=addestudios" class="btn btn-danger btn-lg btn-block"><h4>Agregar Estudios</h4></a>
                                
                                <br><table border="" class="table-gestion">
                                    <tr class="tabla-cabecera">

                                        <td>Id</td>
                                        <td>Nombre del curso</td>
                                        <td>Nivel Formativo</td>
                                        <td>Fecha de inicio</td>
                                        <td>Fecha de graduación</td>
                                        <td>Sede de graduación</td>
                                        <td>Certificado</td>
                                        <td style="width:50px">Editar</td>
                                        <td style="width:50px">Eliminar</td>
                                    </tr>

                                 <?php 
                                $sql=("SELECT * FROM estudios WHERE EstEgresado=$id");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";
                        echo "<td><a target=_blank href='$arreglo[7]'><span class='icon-file-text2'></span>  Mostrar</a></td>";
                        echo "<td class='verde'><a href='adminpage.php?EstId=$arreglo[0]&accion=editestudos'><center><span class='icon-pencil'></span></a></td>";
                        echo "<td class='rojo'><a href='includes/admin_users.php?id=$arreglo[0]&idEg=$EgId&accion=eEst'><center><span class='icon-trash'></span><center></a></td>";
                        echo "</tr>";
                                 }
                                 
                                        ?>
                                    
                                    
                                    
                                </table>
                                

		
	</div>


</div>