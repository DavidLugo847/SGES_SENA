<?php
require('includes/config.php'); 
require('layout/headeradmin.php'); 

?>
<?php 
    
                $checkUsaceptado=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsEstado='2'");
                $check_Usaceptado=mysqli_num_rows($checkUsaceptado);
                
                $checkUsrechazado=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE UsEstado='3'");
                $check_Usrechazado=mysqli_num_rows($checkUsrechazado);
?>


<div class="container">

	<div class="row">

	    
			
				<h2>Petición de acceso</h2>
                              	<hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-6">
                                        <a class="btn btn-primary btn-lg btn-block" href="adminpage.php?accion=listacepts" style="color: white;">Usuario aceptados [<?php echo $check_Usaceptado ?>]</a></div>
                                    <div class="col-xs-6 col-md-6">
                                        <a class="btn btn-danger btn-lg btn-block" href="adminpage.php?accion=listdeclines" style="color: white;">Usuarios rechazados  [<?php echo $check_Usrechazado ?>]</a></div>
                                    
				</div>
                                
                                <br><table table border="1" class="table-gestion">
                                    <tr class="tabla-cabecera">

                                        <td>Nombre</td>
                                        <td>Mail</td>
                                        <td>Información</td>

                                    </tr>
                                    <?php 
                                require("connect_db.php");
                                $sql=("SELECT * FROM usuarios where UsEstado=10");
                                $query=mysqli_query($mysqli,$sql);
				while($arreglo=mysqli_fetch_array($query)){
                                    
                                $IdUser=$arreglo[0];
                                $UserMail=$arreglo[2];
                                $nombres=("SELECT * FROM info_usuario WHERE InfUsuario=$IdUser");
                                $ressqll=mysqli_query($mysqli,$nombres);
                                while ($row=mysqli_fetch_row ($ressqll)){
                                $UsId=$row[0];
                                $UsNombres=$row[1];
                                $UsApellidos=$row[2];
                                $EstName=$row[3];
                                $EstAnioI=$row[4];
                                $EstAnioF=$row[5];
                                $EstLugarG=$row[6];
                                  }  
            
                               ?>
                                    <tr>
                                        <td><?php echo $UsNombres;?> <?php echo $UsApellidos;?></td>                                        
                                        <td><?php echo $UserMail;?></td>
                                        <td><a href="adminpage.php?id=<?php echo $arreglo[0];?>&accion=infopet">Información</a></td>
                                        
                                    </tr>
                             <?php  }?>  
                                </table>
                                

		
	</div>


</div>