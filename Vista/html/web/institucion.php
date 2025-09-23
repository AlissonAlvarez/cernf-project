<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title><?php echo PROYECTO; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="icon" href="../vista/imagenes/logo2.png" type="image/ico" />

    <link rel="stylesheet" href="../vista/css/normalize.css" />
    <link rel="stylesheet" href="../vista/css/estilos_webcopy.css" />
    <link rel="stylesheet" href="../vista/css/font-awesome.css">

    <!-- <script src="../vista/js/jquery-3.6.0.min.js"></script> -->
    <script src="../vista/js/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


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
                        <div class="d-flex justify-content-lg-end justify-content-center align-items-center">
                            <a href="Controlador.php?accion=cuenta" class="btn boton">Cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <!--==================================main==================================-->
    <main class="main_institucion">

        <a href="#" class="btn btn-primary back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up"></i>
        </a>

        <!--================= 1. Seccion Banner  =================-->

        <section id="home" class="seccion_uno_intitucion">
            <img src="../vista/imagenes/niños5.jpg" class="imagen_intitucion" />
            <div class="contenido">
                <h1 class="titulo_banner">Institución</h1>
                <p>Conoce un poco de nosotros</p>
            </div>
        </section>

        <!--================= 2. Seccion Quienes Somos  =================-->

        <section id="blog" class="content-section py-5">
            <div class="container">
                <div class="section-heading text-center mb-4">
                    <h1 class="titulo">Quiénes Somos</h1>
                </div>

                <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="mision-tab" data-bs-toggle="tab" data-bs-target="#mision"
                            type="button" role="tab" aria-controls="mision" aria-selected="true">
                            MISIÓN
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision"
                            type="button" role="tab" aria-controls="vision" aria-selected="false">
                            VISIÓN
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="filosofia-tab" data-bs-toggle="tab" data-bs-target="#filosofia"
                            type="button" role="tab" aria-controls="filosofia" aria-selected="false">
                            FILOSOFÍA
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mision" role="tabpanel" aria-labelledby="mision-tab">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <img src="../vista/imagenes/mision.png" alt="Misión" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <h4>Conoce nuestra Misión</h4>
                                <p>
                                    Garantizar un servicio educativo de calidad, en todos los niveles y modalidades del
                                    sistema educativo,
                                    promoviendo la formación integral y desarrollo de la identidad y autoestima del
                                    educando, que facilite su
                                    integración social con hábitos de aprendizaje permanente acorde a los cambios
                                    científico tecnológicos, así
                                    como a las exigencias del mundo globalizado y gestionar recursos financieros, de
                                    personal, infraestructura
                                    y tecnologías educativas para la mejora permanente del servicio educativo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <img src="../vista/imagenes/vision.png" alt="Visión" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <h4>Conoce nuestra Visión</h4>
                                <p>
                                    Se proyecta para un periodo de mediano y largo plazo, concentrando sus recursos y
                                    esfuerzo en hacer que el
                                    año 2025 sea la continuidad estratégica del camino trazado en años anteriores,
                                    logrando consolidarnos como
                                    líderes en Gestión Educativa y convertirnos en una institución reconocida por la
                                    comunidad local, por su
                                    gestión eficiente y niveles académicos por encima del promedio nacional, con
                                    propuestas innovadoras y un
                                    equipo competente y motivado que forma estudiantes integrales en lo humano, lo
                                    académico y lo social.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="filosofia" role="tabpanel" aria-labelledby="filosofia-tab">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <img src="../vista/imagenes/filosofia.png" alt="Filosofía" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <h4>Conoce nuestra Filosofía</h4>
                                <p>
                                    Ejecutamos un programa educativo inclusivo “Escuela Nueva” dirigido a escuelas
                                    rurales multigrado, donde
                                    un solo docente guía a niños y niñas de varios grados, aplicando pedagogías activas
                                    y aprendizajes de
                                    vivencias para brindar educación de calidad en zonas rurales. Nuestra filosofía
                                    acoge principios de
                                    inclusión, innovación pedagógica y atención a las necesidades reales de la población
                                    rural de Colombia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= 3. Seccion Personas  =================-->
        <section class="seccion_persona">
            <h1 class="titulo">Nuestros Profesores</h1>
            <div class="container">
                <div class="team-grid">
                    <div class="persona_card highlighted">
                        <img src="../vista/imagenes/mujer-profesora.jpg" alt="" class="persona_foto">
                        <h4 class="persona_nombre">Inés Galindo Herrera</h4>
                        <p class="persona_cargo">Directora</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>

                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=400&fit=crop&crop=face"
                            alt="Andrea Soto" class="persona_foto">
                        <h4 class="persona_nombre">Andrea Soto</h4>
                        <p class="persona_cargo">Profesora</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
                        </div>
                    </div>

                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=400&fit=crop&crop=face"
                            alt="Brandon Camacho" class="persona_foto">
                        <h4 class="persona_nombre">Brandon Camacho</h4>
                        <p class="persona_cargo">Profesor</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>

                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=400&fit=crop&crop=face"
                            alt="Felisa Mayorga" class="persona_foto">
                        <h4 class="persona_nombre">Felisa Mayorga</h4>
                        <p class="persona_cargo">Profesora</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-stack-overflow"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-grid">
                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=400&fit=crop&crop=face"
                            alt="Hermisson Arias" class="persona_foto">
                        <h4 class="persona_nombre">Hermisson Arias</h4>
                        <p class="persona_cargo">Profesor</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>

                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=400&fit=crop&crop=face"
                            alt="Hilda Buendia" class="persona_foto">
                        <h4 class="persona_nombre">Hilda Buendia</h4>
                        <p class="persona_cargo">Profesora</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>

                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&h=400&fit=crop&crop=face"
                            alt="Iveth Mary Valencia" class="persona_foto">
                        <h4 class="persona_nombre">Iveth Mary Valencia</h4>
                        <p class="persona_cargo">Profesora</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                    <div class="persona_card">
                        <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=300&h=400&fit=crop&crop=face"
                            alt="Nancy Yolanda Pabón" class="persona_foto">
                        <h4 class="persona_nombre">Nancy Yolanda Pabón</h4>
                        <p class="persona_cargo">Profesor</p>
                        <div class="persona_social">
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <script src="../vista/js/jquery_slider.js"></script>

    <!--=================================footer=================================-->

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 d-flex flex-column gap-3 footer_informacion">
                    <div class="logo_f">
                        <img src="../vista/imagenes/logo.png" class="logo_footer">
                    </div>
                    <p>Leading business consulting firm helping companies start, grow, and thrive in competitive markets
                        worldwide.</p>
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