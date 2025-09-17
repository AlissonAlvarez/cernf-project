<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <ttle><?php echo PROYECTO; ?></title>
        <link rel="icon" href="../vista/imagenes/logo.png" type="image/ico" />

        <link rel="stylesheet" href="vista/css/normalize.css" />
        <link rel="stylesheet" href="vista/css/estilos_web.css" />
        <link rel="stylesheet" href="vista/css/font-awesome.css">

        <script src="vista/js/jquery-3.6.0.min.js"></script>
        <script src="vista/js/jquery.validate.js"></script>
    </head>

    <body>

        <!--=================================header=================================-->
        <header>
            <div class="contenedor_redessociales">
                <ul>
                    <li><a href="#"><img src="vista/svg/facebook.svg" alt="#" class="boton_social" /></a>
                    </li>
                    <li><a href="#"><img src="vista/svg/twitter.svg" alt="#" class="boton_social" /></a>
                    </li>
                    <li><a href="#"><img src="vista/svg/instagram.svg" alt="#" class="boton_social" /></a>
                    </li>
                </ul>
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="Controlador/Controlador.php?accion=inicio" class="menu_inicio">Inicio</a></li>
                    <li><a href="Controlador/Controlador.php?accion=institucion" class="menu_institucion">Institución</a></li>
                    <li><a href="Controlador/Controlador.php?accion=servicios" class="menu_servicios">Servicios</a></li>
                    <li><a href="Controlador/Controlador.php?accion=contacto" class="menu_contacto">Contácto</a></li>
                    <li><a href="Controlador/Controlador.php?accion=cuenta" class="menu_cuenta">Cuenta</a></li>
                </ul>
            </nav>

        </header>

        <!--==================================main==================================-->
        <main class="main_inicio">

            <div class="contenedor_encabezado">
                <a href="Controlador/Controlador.php?accion=inicio"><img src="vista/imagenes/Logo.png" class="logo" alt=""></a>
                <h1 class="textologo">CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</h1>
            </div>

            <div class="contenedor_encabezado2">
                <video autoplay muted loop>
                    <source src="vista/videos/niñas.mp4" type="video/mp4" />
                </video>
                <div class="overlay">
                    <h1>Título encima del video</h1>
                    <p>Texto de prueba</p>
                </div>
            </div>

            <section class="seccion_uno">
                <div class='imagen_descripcion'>
                    <div class='text_image'>
                        <h2>Forjando un futuro de posibilidades</h2>
                        <p>En el Centro Educativo Rural Nicolás de Federmán, creemos en el poder de la 
                            educación para transformar vidas. Aquí, en el corazón de los llanos, cada 
                            niño tiene la oportunidad de descubrir su potencial, desarrollar sus talentos
                            y construir un futuro lleno de posibilidades. Con valores de esfuerzo, 
                            creatividad y comunidad, guiamos a nuestros estudiantes en un camino de 
                            aprendizaje que les permitirá alcanzar sus sueños y aportar al desarrollo 
                            de su región.</p>
                    </div>
                    <img src="vista/imagenes/nina.png" alt="" class="imagen_uno">
                </div>
            </section>

            <!--================= Slider =================-->
            <section class="slider">
                <div class="slider-text">
                    <p>
                        En el <strong>Centro Educativo Rural Nicolás de Federmán</strong> nos preocupamos por el <strong>desarrollo integral</strong> de cada estudiante. 
                        Ofrecemos <strong>clases de computación</strong> para adquirir habilidades digitales, <strong>talleres de teatro</strong> que fomentan la creatividad, 
                        y programas que refuerzan <strong>valores</strong> como respeto, solidaridad y responsabilidad. Nuestro enfoque personalizado asegura que cada niño 
                        reciba la atención necesaria para crecer académica, emocional y socialmente, preparándolos para enfrentar los retos del futuro con entusiasmo y seguridad.
                    </p>
                </div>              

                <div class="slider-container">
                    <div class="slide active"><img src="vista/imagenes/slider-1.png" alt="Slide 1"></div>
                    <div class="slide"><img src="vista/imagenes/slider-2.png" alt="Slide 2"></div>
                    <div class="slide"><img src="vista/imagenes/slider-3.png" alt="Slide 3"></div>
                </div>
                <div class="slider-controls">
                    <span class="prev">&#10094;</span>
                    <span class="next">&#10095;</span>
                </div>
            </section>

            <!--================= Servicios =================-->
            <section class="servicios">
                <h2>Nuestros Servicios</h2>
                <div class="cards-container">
                    <div class="card">
                        <img src="vista/imagenes/manual_convivencia.png" alt="Servicio 1">
                        <h3>Servicio 1</h3>
                        <p>Descripción breve del servicio 1.</p>
                    </div>
                    <div class="card">
                        <img src="vista/imagenes/manual_convivencia.png" alt="Servicio 2">
                        <h3>Servicio 2</h3>
                        <p>Descripción breve del servicio 2.</p>
                    </div>
                    <div class="card">
                        <img src="vista/imagenes/manual_convivencia.png" alt="Servicio 3">
                        <h3>Servicio 3</h3>
                        <p>Descripción breve del servicio 3.</p>
                    </div>
                    <div class="card">
                        <img src="vista/imagenes/manual_convivencia.png" alt="Servicio 4">
                        <h3>Servicio 4</h3>
                        <p>Descripción breve del servicio 4.</p>
                    </div>
                    <div class="card">
                        <img src="vista/imagenes/manual_convivencia.png" alt="Servicio 5">
                        <h3>Servicio 5</h3>
                        <p>Descripción breve del servicio 5.</p>
                    </div>
                    <div class="card">
                        <img src="vista/imagenes/manual_convivencia.png" alt="Servicio 6">
                        <h3>Servicio 6</h3>
                        <p>Descripción breve del servicio 6.</p>
                    </div>
                </div>
            </section>
            
            <section class="noticias">
                <h2>Noticias</h2>
                <div class="noticias-container">
                    <div class="noticia-card">
                    <img src="vista/imagenes/niños3.jpg" alt="Noticia 1">
                    <div class="overlay">
                        <h3>Título Noticia 1</h3>
                        <p>Descripción breve de la noticia o información destacada.</p>
                    </div>
                    </div>
                    <div class="noticia-card">
                    <img src="vista/imagenes/niños6.jpg" alt="Noticia 2">
                    <div class="overlay">
                        <h3>Título Noticia 2</h3>
                        <p>Descripción breve de la noticia o información destacada.</p>
                    </div>
                    </div>
                    <div class="noticia-card">
                    <img src="vista/imagenes/niños7.png" alt="Noticia 3">
                    <div class="overlay">
                        <h3>Título Noticia 3</h3>
                        <p>Descripción breve de la noticia o información destacada.</p>
                    </div>
                    </div>
                </div>
        </section>


        </main>
        <!-- <script src="vista/js/jquery_banner.js"></script> -->
        <script src="vista/js/jquery_Slider.js"></script>

        <!--=================================footer=================================-->

        <footer>

            <div class="contenedor_footer">
                <div class="footer_informacion">

                    <div class="columna1">
                        <div>
                            <img src="vista/imagenes/logo-1.png" class="logo_footer">
                        </div>

                    </div>

                    <div class="columna2">

                        <h1>Redes Sociales</h1>

                        <div class="fila">
                            <img src="vista/svg/facebook.svg" class="boton_social_footer">
                            <label>Siguenos en Facebook</label>
                        </div>
                        <div class="fila">
                            <img src="vista/svg/twitter.svg" class="boton_social_footer">
                            <label>Siguenos en Twitter</label>
                        </div>
                        <div class="fila">
                            <img src="vista/svg/instagram.svg" class="boton_social_footer">
                            <label>Siguenos en Linkedin</label>
                        </div>

                    </div>

                    <div class="columna3">

                        <h1>Información de Contacto</h1>

                        <div class="fila">
                            <img src="vista/svg/location.svg">
                            <label>Vereda El Encanto, Guamal</label>
                        </div>

                        <div class="fila">
                            <img src="vista/svg/phone.svg">
                            <label>+57-313-809-8754</label>
                        </div>

                        <div class="fila">
                            <img src="vista/svg/mail.svg">
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