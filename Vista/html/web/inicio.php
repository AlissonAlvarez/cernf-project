<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- <ttle><?php echo PROYECTO; ?></title> -->
    <link rel="icon" href="../vista/imagenes/logo_icono.ico" type="image/ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../vista/css/normalize.css" />
    <link rel="stylesheet" href="../vista/css/estilos_webcopy.css" />
    <link rel="stylesheet" href="../vista/css/font-awesome.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../vista/js/jquery-3.6.0.min.js"></script>
    <script src="../vista/js/jquery.validate.js"></script>
    <script src="../vista/js/jquery_slider.js"></script>
</head>

<body>

    <!--=================================header=================================-->
    <header class="fixed-top">

        <div class="barra_nav border-bottom">
            <div class="container d-flex justify-content-start py-1 gap-3">
                <a href="#"><i class="bi bi-facebook fs-5"></i></a>
                <a href="#"><i class="bi bi-linkedin fs-5"></i></a>
                <a href="#"><i class="bi bi-instagram fs-5"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a href="Controlador.php?accion=inicio">
                    <img src="../vista/imagenes/Logo.png" class="logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end menu-nav" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body d-flex flex-column flex-lg-row">
                        <ul class="navbar-nav mx-auto d-flex gap-3">
                            <li class="nav-item"><a class="nav-link" href="Controlador.php?accion=inicio">Inicio</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="Controlador.php?accion=institucion">Institución</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="Controlador.php?accion=servicios">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="Controlador.php?accion=contacto">Contacto</a>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-lg-end justify-content-center    align-items-center">
                            <a href="Controlador.php?accion=cuenta" class="btn boton">Cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--==================================main==================================-->
    <main class="main_inicio">
        <a href="#" class="btn btn-primary back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up"></i>
        </a>
        <!--================= 1. Seccion Banner  =================-->
        <section id="home" class="seccion_uno">
            <video autoplay muted loop>
                <source src="../vista/videos/niñas.mp4" type="video/mp4" />
            </video>

            <div class="contenedor_encabezado">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="texto_encabezado p-5 mt-5">
                            <h3 class="mb-3" style="opacity: 0.8;">
                                Bienvenido a nuestro
                            </h3>
                            <h1>Centro Educativo Rural Nicolás de Federmán</h1>
                            <p>Fortalece tu futuro con educación de calidad y aprendizaje para toda la vida.</p>
                            <a class="nav-link" href="Controlador.php?accion=contacto">
                                <button class="boton">Contacto</button>
                            </a>

                            <div class="seccion_uno_stats mt-4">
                                <div class="stat-item">
                                    <span class="stat-number">25+</span>
                                    <span class="stat-label">Docentes expertos</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">350+</span>
                                    <span class="stat-label">Estudiantes</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">11+</span>
                                    <span class="stat-label">Sedes Rurales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= 2. Seccion Información  =================-->
        <section class="seccion_dos">
            <h1 class="titulo">Información</h1>
            <div class="container">
                <!-- Primer bloque -->
                <div class="row align-items-center pb-5">
                    <div class="col-lg-6">
                        <img src="../vista/imagenes/nina.png" alt="" class="imagen_uno">
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-4">
                            <p class="section-subtitle">Forjando un futuro</p>
                            <h2 class="section-title text-start">de posibilidades</h2>
                            <p class="mb-4">
                                En el Centro Educativo Rural Nicolás de Federmán, creemos en el poder de la
                                educación para transformar vidas. Aquí, en el corazón de los llanos, cada niño tiene la
                                oportunidad de descubrir su potencial, desarrollar sus talentos
                                y construir un futuro lleno de posibilidades.
                            </p>
                            <p class="mb-4">
                                Con valores de esfuerzo, creatividad y comunidad, guiamos a nuestros estudiantes en un
                                camino de
                                aprendizaje que les permitirá alcanzar sus sueños y aportar al desarrollo
                                de su región.
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="Controlador.php?accion=institucion" class="btn boton">Saber más</a>
                        </div>
                    </div>
                </div>

                <!-- Segundo bloque (contenido único y original) -->
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="ps-lg-4">
                            <p class="section-subtitle">Educando con propósito</p>
                            <h2 class="section-title text-start">En armonía con la naturaleza</h2>
                            <p class="mb-4">
                                Nuestro colegio no solo enseña conocimientos, sino también el respeto por la tierra que
                                nos rodea.
                                En cada clase, en cada proyecto y en cada jornada, fomentamos el amor por el entorno
                                rural y el trabajo en equipo,
                                formando jóvenes conscientes de su papel en el cuidado del planeta.
                            </p>
                            <p class="mb-4">
                                A través de huertas escolares, actividades ecológicas y experiencias de aprendizaje
                                vivencial,
                                los estudiantes del Centro Educativo Rural Nicolás de Federmán aprenden que el
                                conocimiento florece mejor
                                cuando se cultiva con valores, compromiso y esperanza.
                            </p>
                            <a href="Controlador.php?accion=institucion" class="btn boton">Saber más</a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        <img src="../vista/imagenes/niños7.png" alt="" class="imagen_uno">
                    </div>
                </div>
            </div>
        </section>

        <!--================= 3. Seccion Slider =================-->
        <section class="slider">
            <div id="sliderBootstrap" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#sliderBootstrap" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#sliderBootstrap" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#sliderBootstrap" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../vista/imagenes/slider-1.png" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../vista/imagenes/slider-2.png" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../vista/imagenes/slider-3.png" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#sliderBootstrap"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sliderBootstrap"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>

        <!--================= 4 Seccion Accesos =================-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="titulo">Enlaces de Interés</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="seccion_acceso text-center">
                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-chat-dots fs-1 text-white"></i>
                            </div>
                            <h4>Comunidad Educativa</h4>
                            <p>Espacio de comunicación e interacción entre estudiantes, docentes y padres de familia.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="seccion_acceso_uno text-center">
                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-bar-chart fs-1 text-success"></i>
                            </div>
                            <h4>Desempeño Académico</h4>
                            <p>Consulta de calificaciones, seguimiento académico y apoyo para el fortalecimiento del
                                aprendizaje.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="seccion_acceso_uno text-center">
                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-building-gear fs-1 text-success"></i>
                            </div>
                            <h4>Gestión Institucional</h4>
                            <p>Procesos administrativos y de gestión que garantizan el buen funcionamiento del colegio.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="seccion_acceso_uno text-center">
                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-graph-up-arrow fs-1 text-success"></i>
                            </div>
                            <h4>Proyectos Pedagógicos</h4>
                            <p>Iniciativas educativas que fomentan el desarrollo integral y la participación activa de
                                los estudiantes.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="seccion_acceso_uno text-center">
                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-bar-chart-line fs-1 text-success"></i>
                            </div>
                            <h4>Evaluación Institucional</h4>
                            <p>Monitoreo y análisis del rendimiento académico e institucional para la mejora continua.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="seccion_acceso_uno text-center">
                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-people fs-1 text-success"></i>
                            </div>
                            <h4>Participación y Convivencia</h4>
                            <p>Fomento de valores, trabajo en equipo y convivencia escolar para una comunidad educativa
                                armónica.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= 5. Seccion Anuncio =================-->
        <section class="seccion-anuncio text-white py-5">
            <div class="container-fluid seccion-anuncio">
                <p class="text-center fs-5 mb-0">
                    En el <strong>Centro Educativo Rural Nicolás de Federmán</strong> nos preocupamos por el
                    <strong>desarrollo integral</strong> de cada estudiante. Ofrecemos
                    <strong>clases de computación</strong> para adquirir habilidades digitales,
                    <strong>talleres de teatro</strong> que fomentan la creatividad, y programas que refuerzan
                    <strong>valores</strong> como respeto, solidaridad y responsabilidad. Nuestro enfoque personalizado
                    asegura
                    que cada niño reciba la atención necesaria para crecer académica, emocional y socialmente,
                    preparándolos para
                    enfrentar los retos del futuro con entusiasmo y seguridad.
                </p>
            </div>
        </section>

        <!--================= 6 Seccion Noticias =================-->
        <section id="blog" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="titulo">Noticias Recientes</h2>
                </div>
                <div class="row">
                    <!-- Noticia 1 -->
                    <div class="col-lg-4 mb-4">
                        <div class="noticia_card">
                            <img src="../vista/imagenes/niños3.jpg" alt="Noticia 1" class="noticia_img">
                            <div class="p-3">
                                <span class="text-muted small">15 de marzo de 2024</span>
                                <h5 class="mt-2">Jornada de Lectura en el Aula</h5>
                                <p class="text-muted">
                                    Los estudiantes participaron en una jornada de lectura en la que compartieron
                                    cuentos, reflexiones y fomentaron el amor por la lectura.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Noticia 2 -->
                    <div class="col-lg-4 mb-4">
                        <div class="noticia_card">
                            <img src="../vista/imagenes/niños6.jpg" alt="Noticia 2" class="noticia_img">
                            <div class="p-3">
                                <span class="text-muted small">10 de marzo de 2024</span>
                                <h5 class="mt-2">Proyecto de Huerta Escolar</h5>
                                <p class="text-muted">
                                    Con la participación de toda la comunidad educativa, se dio inicio al proyecto de
                                    huerta escolar para promover la sostenibilidad y el aprendizaje ambiental.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Noticia 3 -->
                    <div class="col-lg-4 mb-4">
                        <div class="noticia_card">
                            <img src="../vista/imagenes/niños7.png" alt="Noticia 3" class="noticia_img">
                            <div class="p-3">
                                <span class="text-muted small">5 de marzo de 2024</span>
                                <h5 class="mt-2">Día de la Convivencia Escolar</h5>
                                <p class="text-muted">
                                    Una jornada llena de actividades lúdicas, deportivas y reflexivas para fortalecer
                                    los valores de respeto y trabajo en equipo entre nuestros estudiantes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn boton">Ver más noticias</a>
                </div>
            </div>
        </section>
    </main>

    <!--=================================footer=================================-->

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 d-flex flex-column gap-3 footer_informacion">
                    <div class="logo_f">
                        <img src="../vista/imagenes/logo.png" class="logo_footer">
                    </div>
                    <p>Institución educativa comprometida con la formación integral de niños y jóvenes, promoviendo
                        valores, conocimiento y desarrollo en un entorno rural de calidad.</p>
                    <div class="d-flex gap-3">
                        <a href="#"><i class="bi bi-facebook fs-5 footer_informacion"></i></a>
                        <a href="#"><i class="bi bi-linkedin fs-5 footer_informacion"></i></a>
                        <a href="#"><i class="bi bi-instagram fs-5 footer_informacion"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4 footer_informacion">
                    <h5>Navega rapido</h5>
                    <ul class="list-unstyled">
                        <li class="nav-item"><a class="nav-link" href="Controlador.php?accion=inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="Controlador.php?accion=institucion">Institución</a></li>
                        <li class="nav-item"><a class="nav-link" href="Controlador.php?accion=servicios">Servicios</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Controlador.php?accion=contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4 footer_informacion">
                    <h5>Servicios</h5>
                    <ul class="list-unstyled">
                        <li><a class="nav-link" href="#">Oficina</a></li>
                        <li><a class="nav-link" href="#">Biblioteca</a></li>
                        <li><a class="nav-link" href="#">Transporte</a></li>
                        <li><a class="nav-link" href="#">Bioseguridad</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4 footer_informacion">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a class="nav-link" href="#">Políticas de privacidad</a></li>
                        <li><a class="nav-link" href="#">Terminos y condiciones</a></li>
                        <li><a class="nav-link" href="#">Preguntas frecuentas</a></li>
                        <li><a class="nav-link" href="#">Soporte</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4 footer_informacion">
                    <h5>Contacto</h5>
                    <p><i class="bi bi-telephone me-2"></i>+57-313-809-8754</p>
                    <p><i class="bi bi-envelope me-2"></i>cernf@gmail.com</p>
                    <p><i class="bi bi-geo-alt me-2"></i>Vereda El Encanto, Guamal</p>
                </div>
            </div>
            <hr class="my-4 footer_informacion">
            <div class="row align-items-center footer_informacion">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Todos los Derechos Reservados.</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>