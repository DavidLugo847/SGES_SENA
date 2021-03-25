
<?php
$title = 'Members Page';
require('includes\config.php');
require('layout/headeradmin.php');
$id=$_GET['id'];

?>


<div class="container">
    <input type="hidden" value="<?php echo $EgId;?>">
	<div class="row">

	    
			
                <h2>Calificaciones</h2>
                              	<hr>
                                <a href="adminpage.php?id=<?php echo $id;?>&accion=calhv" class="btn btn-danger btn-lg btn-block"><h4>Agregar Calificación</h4></a>
                                
                                <br><table border="" class="table-gestion">
                                    <tr class="tabla-cabecera">
                                        <td>Puntualidad</td>
                                        <td>Responsabilidad</td>
                                        <td>Disciplina</td>
                                        <td>Presentación Personal</td>
                                        <td>Desempeño</td>
                                        <td>Promedio</td>
                                        <td style="width:50px">Editar</td>
                                        <td style="width:50px">Eliminar</td>
                                    </tr>

                                 <?php 
                                $sql=("SELECT * FROM calificacion where caHvId=$id");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
				 while($arreglo=mysqli_fetch_array($query)){
                    $promsum=$arreglo[2]+$arreglo[3]+$arreglo[4]+$arreglo[5]+$arreglo[6];
                    $prom=$promsum/5;

				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
                        echo "<td>$arreglo[6]</td>";
                        echo "<td>".round($prom,1)."</td>";
                        echo "<td class='verde'><a href='adminpage.php?id=$arreglo[0]&idEg=$id&accion=editcal'><center><span class='icon-pencil'></span></a></td>";
                        echo "<td class='rojo'><a href='adminpage.php?id=$arreglo[0]&idEg=$id&accion=delCal'><center><span class='icon-trash'></span><center></a></td>";
                        echo "</tr>";
                                 }
                                 
                                        ?>
                                    
                                    
                                    
                                </table>
                                

		
	</div>


</div>