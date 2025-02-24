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
        <main class="main_contacto">
            <h2>Contáctanos. Selecciona la sede más cercana y los diferentes canales de contacto que tenemos para poder
                atenderte.</h2>
            <div class="contentido_contacto" id="contentido_contacto">
                <div class="menu_contacto">
                    <select name="" id="sede">
                        <option>SEDES CENTRO EDUCATIVO GUAMAL NICOLAS DE FEDERMAN</option>
                        <option value="nicolasdefederman">Centro Educativo Rural Nicolas De Federman</option>
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



                    <div class="descripcion_contacto">
                        <div id="nicolasdefederman" class="informacion_sede">
                            <h1>CENTRO EDUCATIVO RURAL NICOLAS DE FEDERMAN</h1><br><br>
                            <p><b>Dirección:</b> Vda Humadea, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> nicolasdefederman.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127391.16580395127!2d-73.750313!3d3.815709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbfcc63cd5c45bfc4!2sEscuela%20Nicol%C3%A1s%20De%20Federman!5e0!3m2!1ses-419!2sco!4v1626629968744!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="antoniojosedesucre" class="informacion_sede">
                            <h1>ESCUELA RURAL ANTONIO JOSE DE SUCRE</h1><br><br>
                            <p><b>Dirección:</b> Vda El Carmen, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> antoniojosedesucre.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127383.91953737757!2d-73.771222!3d3.8642660000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe46ff9a70b166b0b!2sEscuela%20Antonio%20Jos%C3%A9%20de%20Sucre!5e0!3m2!1ses-419!2sco!4v1626631048306!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="eldanubio" class="informacion_sede">
                            <h1>ESCUELA RURAL EL DANUBIO</h1><br><br>
                            <p><b>Dirección:</b> Vda El Danubio, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> eldanubio.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31847.565462354283!2d-73.73206!3d3.8218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e114ee5c9cec1%3A0xf647a21cccff11a9!2sVda.%20Verda%20El%20Danubio%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631149468!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="elencanto" class="informacion_sede">
                            <h1>ESCUELA RURAL EL ENCANTO</h1><br><br>
                            <p><b>Dirección:</b> Vda El Encanto, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> elencanto.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31844.644460626714!2d-73.746104!3d3.8996739999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ef8aae1a1502cc8!2sEscuela%20El%20Encanto!5e0!3m2!1ses-419!2sco!4v1626631269893!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="elretiro" class="informacion_sede">
                            <h1>ESCUELA RURAL EL RETIRO</h1><br><br>
                            <p><b>Dirección:</b> Vda El Retiro, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> elretiro.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d254745.26731848248!2d-73.92494340369002!3d3.9387020623981868!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x430e6cb28c41025c!2sEl%20Retiro!5e0!3m2!1ses-419!2sco!4v1626633139963!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="laisla" class="informacion_sede">
                            <h1>ESCUELA RURAL LA ISLA</h1><br><br>
                            <p><b>Dirección:</b> Vda La Isla, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> laisla.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31844.62339392783!2d-73.81748!3d3.9002300000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e156792d4917d%3A0x2c711cc865896f25!2sVda.%20La%20Isle%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631412578!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="lapaz" class="informacion_sede">
                            <h1>ESCUELA RURAL LA PAZ</h1><br><br>
                            <p><b>Dirección:</b> Vda La Paz, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> lapaz.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31846.84813516459!2d-73.75236!3d3.84107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e141c8b747f0f%3A0x300610ec67542138!2sVda.%20La%20Paz%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631506361!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="montecristo" class="informacion_sede">
                            <h1>ESCUELA RURAL MONTECRISTO</h1><br><br>
                            <p><b>Dirección:</b> Vda Montecristo, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> montecristo.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127384.7227143685!2d-73.800493!3d3.858914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f2d4c80b82cab9a!2sVereda%20Montecristo%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631929506!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="orotoy" class="informacion_sede">
                            <h1>ESCUELA RURAL OROTOY</h1><br><br>
                            <p><b>Dirección:</b> Vda Orotoy, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> orotoy.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127374.54758084082!2d-73.806676!3d3.9261779999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5cce07dd1c5bc7d!2sEscuela%20Orotoy!5e0!3m2!1ses-419!2sco!4v1626630870878!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="pioxii" class="informacion_sede">
                            <h1>ESCUELA RURAL PIO XII</h1><br><br>
                            <p><b>Dirección:</b> Vda Pio XII, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> pioxii.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127378.6440653644!2d-73.790785!3d3.899237!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ab0b0dc65e800a5!2sEscuela%20P%C3%ADo%20XII!5e0!3m2!1ses-419!2sco!4v1626632281353!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="sanpedro" class="informacion_sede">
                            <h1>ESCUELA RURAL SAN PEDRO</h1><br><br>
                            <p><b>Dirección:</b> Vda San Pedro, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> sanpedro.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31845.199370805585!2d-73.83785!3d3.8850000000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e153473fc317f%3A0xade4d5dfa61f97a1!2sVda.%20San%20Pedro%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626632349514!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="santaana" class="informacion_sede">
                            <h1>ESCUELA RURAL SANTA ANA</h1><br><br>
                            <p><b>Dirección:</b> Vda Santa Ana, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> santaana.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3980.7015917002823!2d-73.739597!3d3.8740330000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94258197cfcdc156!2sEscuela%20Santa%20Ana!5e0!3m2!1ses-419!2sco!4v1626632432356!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                        <div id="santabarbara" class="informacion_sede">
                            <h1>ESCUELA RURAL SANTA BARBARA</h1><br><br>
                            <p><b>Dirección:</b> Vda Santa Barbara, Guamal<br>
                                <b>Telefono:</b> (+57) 3138098754<br>
                                <b>Correo:</b> santabarbara.cernf@gmail.com<br>
                                <b>Horario:</b> Lunes - Viernes de 7:00 am a 3:00 pm</p>
                            <iframe class="map box-img"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127376.01692063946!2d-73.759666!3d3.916536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc69700695266e73a!2sCentro%20Educativo%20Santa%20B%C3%A1rbara!5e0!3m2!1ses-419!2sco!4v1626632515388!5m2!1ses-419!2sco"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>

                    </div>
                </div>

                <div class="box-contact">
                    <h3>Formulario de Contacto</h3>
                    <form id="contact-form" action="#">
                        <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                        <fieldset>
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
                            </div>
                            <div class="coll-2">
                                <div>
                                    <div class="form-txt">Mensaje:</div>
                                    <label class="message">
                                        <textarea></textarea>
                                        <span class="error">*El mensaje es muy corto.</span> <span class="empty">*Este campo
                                            es obligatorio.</span> </label>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="btns"> <a class="btn" data-type="reset">Borrar</a> <a class="btn"
                                                                                              data-type="submit">Enviar</a> </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
        <script src="../vista/js/jquery_contacto.js"></script>

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