<link rel="icon" href="images/favicon.png" type="image/png" /><?php 
require('layout/headerindex.php');
require_once('includes/config.php');
require("includes/validar.php");
require("includes/registro.php");
	?>
<!----------------------- EL ICONO WE ----------------------->}

<link rel="icon" href="imagenes/favicon.png" type="image/png" />

<!----------------------- REGISTRO ----------------------->
<div class="overlayForm " id="overlayFormR">
    <div class="popup" id="popupRegistro">
        <a href="#" id="btn-close-popupR" class="btn-close-popup"><span class=" icon-times"
                style="font-size: 30px;"></span></a>
        <h4>REGISTRARSE</h4>
        <p> Ya eres usuario? <a href="#"> Inicia sesión</a> </p>
        <form method="post">
            <div class="contenedor-inputs">
                <input type="text" name="realname" placeholder="Usuario" class="width100" required=""> <br>
                <input type="email" name="nick" id="" placeholder="Correo" class="width100" required=""> <br>
                <input type="password" name="pass" placeholder="Contraseña" class="width45" required="">
                <input type="password" name="rpass" placeholder="Cofirmar contraseña" class="width45" required="">
            </div>
            <input type="submit" name="submit" class="btn-submit" value="registrarse">
        </form>
    </div>
</div>
<!----------------------- LOGIN ----------------------->
<div class="overlayForm " id="overlayFormL">
    <div class="popup" id="popupLogin">
        <a href="#" id="btn-close-popupL" class="btn-close-popup"><span class=" icon-times"
                style="font-size: 30px;"></span></a>
        <h4>INICIAR SESIÓN</h4>
        <p> Aún no eres usuario? <a href="#"> Registrate</a> </p>
        <form method="post">
            <div class="contenedor-inputs">
                <input type="email" name="nick" id="" placeholder="Correo" class="width100" required=""> <br>
                <input type="password" name="password" placeholder="Contraseña" class="width100" required="">
            </div>
            <input type="submit" name="submitval" class="btn-submit" value="Iniciar sesión">
        </form>
    </div>
</div>
<!--------------------------- // REGISTRO Y LOGIN modal --------------------------->


<!--banner-->
<!--Slider-->
<div class="w3l_banner_info">
    <div class="col-md-7 slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider_banner_info">
                        <h4>GESTION DE EGRESADOS DEL SENA</h4>
                        <p>Este aplicativo tiene como principal funcion ayudar a los egresados despues de 
                salir del SENA puedan acceder a empleos de manera mas directa, siendo seleccionado
                por un usuario que necesite sus habilidades tecnicas y/o tecnologicas.</p>
                    </div>

                </li>
                <li>
                    <div class="slider_banner_info">
                        <h4>REGISTRA TUS DATOS</h4>
                        <p>Accederás a vacantes seguras de empleo, de manera facil y sencilla, sin hacer papeleos ni filas.</p>
                    </div>

                </li>
                <li>
                    <div class="slider_banner_info">
                        <h4>NO TE PREOCUPES</h4>
                        <p>Tu vida laboral avanzara de manera dinamica con el SENA.</p>
                    </div>

                </li>
                <li>
                    <div class="slider_banner_info">
                        <h4>SOMOS LOS NUMERO UNO EN COLOMBIA</h4>
                        <p>El Sistema Nacional de Aprendizaje se asegura de que sus aprendices apliquen sus habilidades en su vida laboral.</p>
                    </div>

                </li>
            </ul>
        </div>
    </div>

</div>
<div class="col-md-5 banner-form-agileinfo">
    <button class="botones" id="btn-abrir-popup-login">INICIAR SESIÓN</button>
    <button class="botones" id="btn-abrir-popup-resgistro">REGISTRARSE</button>
</div>
</form>
</div>
<!--//Slider-->
<div class="clearfix"></div>


<!--//banner-->

<!-- Información de relleno  -->
<div class="features" id="features">
    <div class="container">
        <h2 class="title-w3">Increibles oprotunidades de trabajo (para nada será el título definitivo .-.)</h2>
        <div class="w-agile-top-info">
            <div class="w-welcome-grids">
                <div class="col-md-7 w-welcome-left">
                    <h5>Recomendaciones de grandes empresarios!!</h5>
                    <p>El SENA te ofrece el conocimiento para el trabajo y con los profecionales mas preparados para el trabajo. <span>Phasellus vestibulum velit sed nisi
                            y tambien te da credenciales de experiencia.</span></p>
                </div>
                <div class="col-md-5 w3ls-welcome-img1">
                    <img src="images/Imgn1.jpg" alt="" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w-welcome-grids w-welcome-bottom">
                <div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
                    <img src="images/Imagn2.jpg" alt="" />
                </div>
                <div class="col-md-7 w-welcome-left">
                    <h5>Gran variedad de empleos para los egresados</h5>
                    <p>Te abre mejores oportunidades de trabajo de acuerdo a tu profecion y con la mejor asesoria. <span>Asi que matriculate en el SENA te dara la mejor oportunidad de tu vida.</span></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>


<!-- js -->
<script src="style/js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="style/js/mine.js" type="text/javascript"></script>
<script src="style/js/responsiveslides.min.js" type="text/javascript"></script>
<!--banner Slider desde aquí-->
<script src="js/responsiveslides.min.js"></script>
<script>
$(function() {
    // Slideshow 4
    $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });

});
</script>

<!-- Aquí se acaba el banner Slider-->

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
<footer style="height: 100px; ">
    <footer class="ft">
                    
                    
                    <p class="fttext"> Desarrollado por Aprendices1103     -     Barrera_Cubillos_Perez</p>
                    <center><p class="copyright">&copy;2020</p></center>
                </footer>
</footer>

</html>