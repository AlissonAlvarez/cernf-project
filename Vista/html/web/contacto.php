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
        <main class="main_contacto">

            <div class="contenedor_encabezado">
                <a href="Controlador.php?accion=inicio"><img src="../vista/imagenes/Logo.png" class="logo" alt=""></a>
                <h1 class="textologo">CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</h1>
            </div>

            <div class="contenido_contacto" id="contentido_contacto">
                <h2>Contáctanos y encuentra tu sede más cercana.</h2>
                <div class="box-contact">
                    <form id="contact-form" action="#">
                        <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                        <fieldset>
                            <div class='input-image'>
                                <div class="coll-1">
                                    <div>
                                        <div class="form-txt">Nombre Completo:</div>
                                        <label class="name">
                                            <input type="text">
                                            <span class="error">*Este no es un nombre valido.</span> <span class="empty">*Este
                                                campo es obligatorio.</span> </label>
                                        <div class="clear"></div>
                                    </div>
                                    <div>
                                        <div class="form-txt">Teléfono:</div>
                                        <label class="phone">
                                            <input type="tel">
                                            <span class="error">*Esto no es un número de teléfono válido.</span> <span
                                                class="empty">*This
                                                field is required.</span> </label>
                                        <div class="clear"></div>
                                    </div>
                                    <div>
                                        <div class="form-txt">Correo:</div>
                                        <label class="email">
                                            <input type="email">
                                            <span class="error">* Esta no es una dirección de correo electrónico válida.</span>
                                            <span class="empty">*Este campo es obligatorio.</span> </label>
                                        <div class="clear"></div>
                                    </div>
                                    <div>
                                        <div class="form-txt">Mensaje:</div>
                                        <label class="message">
                                            <textarea></textarea>
                                            <span class="error">*El mensaje es muy corto.</span> <span class="empty">*Este campo
                                                es obligatorio.</span> </label>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="btns"> 
                                        <a class="btn btn-submit"data-type="submit">Enviar</a>
                                    </div>
                                </div>
                                <div class="coll-2">
                                    <!-- <img src="../vista/imagenes/nina.png" class="image-contact" /> -->
                                </div>
                            </div>
                            <div class="clear"></div>
                        </fieldset>
                    </form>
                </div>
                <div class="contacto">
                    <select id="sede">
                        <option value="nicolasdefederman">Centro Educativo Rural Nicolás De Federman</option>
                    <!-- <option value="">Seleccione una sede</option> -->
                    <option value="antoniojosedesucre">Escuela Rural Antonio Jose De Sucre</option>
                    <option value="eldanubio">Escuela Rural El Danubio</option>
                    <option value="elencanto">Escuela Rural El Encanto</option>
                    <option value="elretiro">Escuela Rural El Retiro</option>
                    <option value="laisla">Escuela Rural La Isla</option>
                    <option value="lapaz">Escuela Rural La Paz</option>
                    <option value="montecristo">Escuela Rural Montecristo</option>
                    <option value="orotoy">Escuela Rural Orotoy</option>
                    <option value="pioxii">Escuela Rural Pio XII</option>
                    <option value="sanpedro">Escuela Rural San Pedro</option>
                    <option value="santaana">Escuela Rural Santa Ana</option>
                    <option value="santabarbara">Escuela Rural Santa Barbara</option>
                    </select>

                    <div id="descripcion_contacto"></div>
                </div>
            </div>

        </main>
        <script src="../vista/js/iframe.js"></script>
        <!-- <script src="../vista/js/jquery_contacto.js"></script> -->
        <script src="../vista/js/jquery_Slider.js"></script>

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