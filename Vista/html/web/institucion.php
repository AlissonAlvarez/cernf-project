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

        <!-- <script src="../vista/js/jquery-3.6.0.min.js"></script> -->
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
        <main class="main_institucion">

            <div class="contenedor_encabezado">
                <a href="Controlador.php?accion=inicio"><img src="../vista/imagenes/Logo.png" class="logo" alt=""></a>
                <h1 class="textologo">CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</h1>
            </div>
            
            <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1>Quiénes<em> Somos</em></h1>
                </div>
                <div class="section-content">
                    <div class="tabs-content">
                        <div class="wrapper">
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                <li><a href="#tab1" class="active">MISIÓN</a></li>
                                <li><a href="#tab2">VISIÓN</a></li>
                                <li><a href="#tab3">FILOSOFÍA</a></li>
                            </ul>
                            <section id="first-tab-group" class="tabgroup">
                                <div id="tab1">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../vista/imagenes/" alt="">
                                                <div class="text-content">
                                                    <h4>Conoce nuestra Mision</h4>
                                                    <p>Garantizar un servicio educativo de calidad, en todos los niveles y modalidades del sistema
                                                        educativo, promoviendo la formación integral y desarrollo de la identidad y autoestima del
                                                        educando, que facilite su integración social con hábitos de aprendizaje permanente acorde a
                                                        los cambios científico tecnológicos, así como a las exigencias del mundo globalizado y,
                                                        gestionar recursos financieros, de personal infraestructura, desarrollo de tecnologías
                                                        educativas y todo aquello que sirva de soporte a la mejora permanente del servicio educativo.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div id="tab2">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../vista/imagenes/" alt="">
                                                <div class="text-content">
                                                    <h4>Conoce nuestra vision</h4>
                                                    <p>Se proyecta para un periodo de mediano y largo plazo, concentrando sus recursos y esfuerzo,
                                                        en hacer que el año 2025 sea la continuidad estratégica del camino trazado en años anteriores,
                                                        logrando consolidarnos como líderes en Gestión Educativa y nos constituyamos en una
                                                        institución en la que principalmente: “Sea una Institución reconocida por la comunidad Local,
                                                        por su gestión eficiente y haber logrado niveles de rendimiento académico de los alumnos por
                                                        encima del promedio nacional; mantiene liderazgo entre la instituciones similares con
                                                        propuestas innovadoras en los procesos de gestión con una plana de personal docente y
                                                        Administrativo competente y motivado que genera un clima organizacional favorable, logrando
                                                        así formar estudiantes competentes en los distintos campos del ser, saber y saber hacer en la
                                                        educación básica primaria inclusiva".</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div id="tab3">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../vista/imagenes/" alt="">
                                                <div class="text-content">
                                                    <h4>Conoce nuestra filosofia</h4>
                                                    <p>Ejecutamos un programa educativo inclusivo “Escuela Nueva” dirigido, principalmente, a la
                                                        escuela multigrado de las zonas rurales, caracterizadas por la alta dispersión de su
                                                        población; por tal razón, en estas sedes educativas los niños y niñas de tres o más grados
                                                        cuentan con un solo docente que orienta su proceso de aprendizaje, por equipos de educadores
                                                        que han integrado las propuestas teóricas de la pedagogía activa con aprendizajes de sus
                                                        vivencias y sus prácticas en el aula, ofreciendo una alternativa pedagógica para la primaria
                                                        completa a favor del mejoramiento cualitativo de la formación humana que se brinda a los niños
                                                        y las niñas en las zonas rurales del país. Acoge y pone en práctica los principios y
                                                        fundamentos de las pedagogías activas y atiende necesidades reales de la población rural de
                                                        Colombia.</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
        <script src="../vista/js/jquery_slider.js"></script>


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
    
</body>

</html>