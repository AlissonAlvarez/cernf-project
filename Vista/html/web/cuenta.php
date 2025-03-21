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
        <main class="main_cuenta">
            <div class="contenedor_cuenta">

                <div class="contenedor_boton">
                    <div class="contenedor_boton_ingresar">
                        <h3 class="pregunta">¿Ya tienes una cuenta?</h3>
                        <button class="boton_contenedor" id="boton_ingresar" >Ingresar</button>
                    </div>

                    <div class="contenedor_boton_validar">
                        <h3 class="pregunta">¿Olvidaste tu contraseña?</h3>
                        <button class="boton_contenedor" id="boton_validar">Validar</button>
                    </div>
                </div>

                <div class="contenedor_formulario">

                    <form class="formulario_ingresar" id="formulario_ingresar" name="formulario_ingresar" action="Controlador.php" method="POST">
                        <div class="titulo_formulario">
                            <h2 align="center">Iniciar Sesión</h2><br>
                        </div>

                        <div class="label_formulario">
                            <label for="usuario">Usuario</label>
                            <input type="hidden" id="accion" name="accion" value="iniciar_sesion">
                            <input type="text" id="usuario" name="usuario" required>
                            <span class="mensaje_error"></span>
                        </div>

                        <div class="label_formulario">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" required>
                            <span class="mensaje_error"></span>
                        </div>

                        <div class="checkbox_formulario">
                            <input type="checkbox" class="check" id="check" checked>
                            <label for="check"><span></span>Recordarme</label>
                        </div>

                        <div class="label_formulario">
                            <input type="submit" id="login" name="boton_ingresar" value="Ingresar" >
                        </div>


                    </form>

                    <form class="formulario_validar" id="formulario_validar" name="formulario_validar" action="" method="">
                        <div class="titulo_formulario">
                            <h2 align="center">Recuperar Contraseña</h2><br>
                        </div>

                        <div class="label_formulario">
                            <label class="label_select_formulario">Tipo de documento</label>
                            <div class="select_formulario">
                                <select>
                                    <option value="">Seleccionar</option>
                                    <option value="">Cédula de Ciudadanía</option>
                                    <option value="">Tarjeta de Identidad</option>
                                    <option value="">Registro Civil</option>
                                </select>
                            </div>
                        </div>

                        <div class="label_formulario">
                            <label>Número de documento</label>
                            <input type="text" class="input_formulario" id="input_formulario" name="input_formulario">
                            <span class="mensaje_error"></span>
                        </div>

                        <div class="label_formulario">
                            <input type="submit" value="Validar">
                        </div>
                    </form>
                </div>


            </div>

        </main>
        <script src="../vista/js/script_cuenta.js"></script>

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