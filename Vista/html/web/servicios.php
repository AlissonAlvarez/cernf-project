<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title><?php echo PROYECTO; ?></title>
        <link rel="icon" href="../vista/imagenes/logo2.png" type="image/ico" />

        <link rel="stylesheet" href="../vista/css/normalize.css" />
        <link rel="stylesheet" href="../vista/css/estilos_web.css" />
        <link rel="stylesheet" href="../vista/css/font-awesome.css">

        <script src="../vista/js/jquery-3.6.0.min.js"></script>
        <script src="../vista/js/jquery.validate.js"></script>
    </head>

    <body>

        <!--=================================header=================================-->
        <header>
            <div class="contenedor_redessociales">
                <div class="redes-sociales">
                    <a href="#"><img src="../vista/svg/facebook.svg" alt="Facebook" class="boton_social" /></a>
                    <a href="#"><img src="../vista/svg/twitter.svg" alt="Twitter" class="boton_social" /></a>
                    <a href="#"><img src="../vista/svg/instagram.svg" alt="Instagram" class="boton_social" /></a>
                </div>
            </div>            

            <nav class="menu">

            <div class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul>
                <li><a href="Controlador.php?accion=inicio" class="menu_inicio">Inicio</a></li>
                <li><a href="Controlador.php?accion=institucion" class="menu_institucion">Institución</a></li>
                <li><a href="Controlador.php?accion=servicios" class="menu_servicios">Servicios</a></li>
                <li><a href="Controlador.php?accion=contacto" class="menu_contacto">Contácto</a></li>
                <li><a href="Controlador.php?accion=cuenta" class="menu_cuenta">Cuenta</a></li>
            </ul>
        </nav>


        </header>

        <!--==================================main==================================-->
        <main class="main_servicios">

            <div class="contenedor_encabezado">
                <a href="Controlador.php?accion=inicio"><img src="../vista/imagenes/Logo.png" class="logo" alt=""></a>
                <h1 class="textologo">CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</h1>
            </div>

            <section class="servicios">
                <h2>Nuestros Servicios</h2>
                <div class="cards-container">
                    <div class="card">
                        <img src="../vista/imagenes/manual_convivencia.png" alt="Servicio 1">
                        <h3>Servicio 1</h3>
                        <p>Descripción breve del servicio 1.</p>
                    </div>
                    <div class="card">
                        <img src="../vista/imagenes/manual_convivencia.png" alt="Servicio 2">
                        <h3>Servicio 2</h3>
                        <p>Descripción breve del servicio 2.</p>
                    </div>
                    <div class="card">
                        <img src="../vista/imagenes/manual_convivencia.png" alt="Servicio 3">
                        <h3>Servicio 3</h3>
                        <p>Descripción breve del servicio 3.</p>
                    </div>
                    <div class="card">
                        <img src="../vista/imagenes/manual_convivencia.png" alt="Servicio 4">
                        <h3>Servicio 4</h3>
                        <p>Descripción breve del servicio 4.</p>
                    </div>
                    <div class="card">
                        <img src="../vista/imagenes/manual_convivencia.png" alt="Servicio 5">
                        <h3>Servicio 5</h3>
                        <p>Descripción breve del servicio 5.</p>
                    </div>
                    <div class="card">
                        <img src="../vista/imagenes/manual_convivencia.png" alt="Servicio 6">
                        <h3>Servicio 6</h3>
                        <p>Descripción breve del servicio 6.</p>
                    </div>
                </div>
            </section>

        </main>

        <!--=================================footer=================================-->

        <footer>

            <div class="contenedor_footer">
                <div class="footer_informacion">

                    <div class="columna1">
                        <div>
                            <img src="../vista/imagenes/logo-1.png" class="logo_footer">
                        </div>

                    </div>

                    <div class="columna2">

                        <h1>Redes Sociales</h1>

                        <div class="fila">
                            <img src="../vista/svg/facebook.svg" class="boton_social_footer">
                            <label>Siguenos en Facebook</label>
                        </div>
                        <div class="fila">
                            <img src="../vista/svg/twitter.svg" class="boton_social_footer">
                            <label>Siguenos en Twitter</label>
                        </div>
                        <div class="fila">
                            <img src="../vista/svg/instagram.svg" class="boton_social_footer">
                            <label>Siguenos en Linkedin</label>
                        </div>

                    </div>

                    <div class="columna3">

                        <h1>Información de Contacto</h1>

                        <div class="fila">
                            <img src="../vista/svg/location.svg">
                            <label>Vereda El Encanto, Guamal</label>
                        </div>

                        <div class="fila">
                            <img src="../vista/svg/phone.svg">
                            <label>+57-313-809-8754</label>
                        </div>

                        <div class="fila">
                            <img src="../vista/svg/mail.svg">
                            <label>cernf@gmail.com</label>
                        </div>

                    </div>

                </div>

            </div>

            <div class="contenedor_copyright">
                <div class="footer_copyright">
                    <div class="copyright">
                        <h4>© 2025 Todos los Derechos Reservados | <a href="#">CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</a></h4>
                    </div>

                </div>

            </div>

        </footer>

        <script src="../vista/js/jquery_slider.js"></script>        

    </body>

</html>