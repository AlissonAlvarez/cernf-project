<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title><?php echo PROYECTO; ?></title>
        <link rel="icon" href="../vista/imagenes/logo_icono.ico" type="image/ico" />

        <link rel="stylesheet" href="../vista/css/normalize.css" />
        <link rel="stylesheet" href="../vista/css/estilos_web.css" />
        <link rel="stylesheet" href="../vista/css/font-awesome.css">

        <script src="../vista/js/jquery-3.6.0.min.js"></script>
        <script src="../vista/js/jquery.validate.js"></script>
    </head>

    <body>

        <!--=================================header=================================-->
        <header>

            <div class="contenedor_encabezado">
                <img src="../vista/imagenes/Encabezado.png" alt="" class="encabezado">
                <a href="Controlador.php?accion=inicio"><img src="../vista/imagenes/Logo.png" class="logo" alt=""></a>
                <h1 class="textologo">CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</h1>
            </div>

            <div class="contenedor_redessociales">
                <ul>
                    <li><a href="#"><img src="../vista/imagenes/boton_social_facebook.png" alt="#" class="boton_social" /></a>
                    </li>
                    <li><a href="#"><img src="../vista/imagenes/boton_social_twitter.png" alt="#" class="boton_social" /></a>
                    </li>
                    <li><a href="#"><img src="../vista/imagenes/boton_social_linkedin.png" alt="#" class="boton_social" /></a>
                    </li>
                </ul>
            </div>

            <nav class="menu">
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
        <main class="main_plantilla">

        </main>

        <!--=================================footer=================================-->

        <footer>

            <div class="contenedor_footer">
                <div class="footer_informacion">

                    <div class="columna1">
                        <div>
                            <img src="../vista/imagenes/logo.png" class="logo_footer">
                        </div>

                    </div>

                    <div class="columna2">

                        <h1>Redes Sociales</h1>

                        <div class="fila">
                            <img src="../vista/imagenes/boton_social_facebook.png">
                            <label>Siguenos en Facebook</label>
                        </div>
                        <div class="fila">
                            <img src="../vista/imagenes/boton_social_twitter.png">
                            <label>Siguenos en Twitter</label>
                        </div>
                        <div class="fila">
                            <img src="../vista/imagenes/boton_social_linkedin.png">
                            <label>Siguenos en Linkedin</label>
                        </div>

                    </div>

                    <div class="columna3">

                        <h1>Información de Contacto</h1>

                        <div class="fila">
                            <img src="../vista/imagenes/boton_contacto_direccion.png">
                            <label>Vereda El Encanto, Guamal</label>
                        </div>

                        <div class="fila">
                            <img src="../vista/imagenes/boton_contacto_telefono.png">
                            <label>+57-313-809-8754</label>
                        </div>

                        <div class="fila">
                            <img src="../vista/imagenes/boton_contacto_correo.png">
                            <label>cernf@gmail.com</label>
                        </div>

                    </div>

                </div>

            </div>

            <div class="contenedor_copyright">
                <div class="footer_copyright">
                    <div class="copyright">
                        <h4>© 2021 Todos los Derechos Reservados | <a href="#">Grupo 6 ADSI SENA</a></h4>
                    </div>

                </div>

            </div>

        </footer>

    </body>

</html>