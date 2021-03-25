<?php
$nota1=$_POST['punt'];
$nota2=$_POST['resp'];
$nota3=$_POST['discip'];
$nota4=$_POST['ppersonal'];
$nota5=$_POST['desem'];


if(($nota1>=0 and $nota1<=20)and ($nota2>=0 and $nota2<=20)and($nota3>=0 and $nota3<=20)and($nota4>=0 and $nota4<=20)){
$promedio= ($nota1+$nota2+$nota3+$nota4)/4;
}
else{echo "Error, ingrese notas validas";}

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="recursos/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="js/jquery.numeric.js" type="text/javascript"></script>
    <script src="recursos/jquery-3.2.1.min.js"></script>
    <script src="recursos/bootstrap.min.js"></script>
    <title>SGES - FORMULARIO</title>
</head>
<header>
    <div class="menu_bar">
    <a href="#" class="bt-menu"><span class="icon-list2"></span>MENU</a>
    </div>

    <nav>
    <ul>
    <li><a href="#"><span class="icon-house"></span>Inicio</a></li>
    <li><a href="../forms/form_datos.php"><span class="icon-suitcase"></span>Formulario de Prueba</a></li>
    <li><a href="#"><span class="icon-rocket"></span>Proyectos</a></li>
    <ul class="secbar">
    <li><a href="logout.php"><span class="registrarse"></span>Cerrar Sesion</a></li>
    <li><a href="./index.php"><span class="iniciar"></span>Atras</a></li>
    </ul></ul>
    </nav>
        </header>
<div id="contenido">

  <h2>CALIFICACIONES</h2>

<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>CALIFICACION DEL EGRESADO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> oe cubillos este es el formulario de calificacion</p>
                <p><span class="fa fa-mobile"></span>tiene que mostrar estos resultados con estrellas en otra pagina</p>
            </section>
        </section>
    
            <h2>Categorias</h2>
            <div class="user_info">
               
                        <table>
        <tr>
                 <td><label for="names">Su Promedio es:</label</td>
                 <td><?php echo '' .$promedio; ?></td>
                 </tr>
                    
                </table>
                    
            </div>
        </form>

    </section>

</div>​