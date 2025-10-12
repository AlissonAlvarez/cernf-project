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

    <script src="../vista/js/jquery-3.6.0.min.js"></script>
    <script src="../vista/js/jquery.validate.js"></script>
    <script src="../vista/js/jquery_slider.js"></script>
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
                        <div class="d-flex justify-content-lg-end justify-content-center    align-items-center">
                            <a href="Controlador.php?accion=cuenta" class="btn boton">Cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--==================================main==================================-->
    <main class="main_servicios">

        <a href="#" class="btn btn-primary back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up"></i>
        </a>

        <!--================= 1. Seccion Banner  =================-->
        <section id="servicios" class="seccion_uno_intitucion">
            <img src="../vista/imagenes/niños4.jpg" class="imagen_intitucion" />
            <div class="contenido">
                <h1 class="titulo_banner">Servicios</h1>
                <p>Conoce nuestros servicios</p>
            </div>
        </section>

        <!--================= 2. Seccion uno Servicios  =================-->
        <section class="blog-container seccion_servicios">
            <h1 class="titulo">Nuestro Servicios</h1>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="servicio_card">
                        <div class="servicio_imagen">
                            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=400&h=250&fit=crop&crop=top"
                                alt="UI/UX Design workspace">
                            <div class="servicio_tag">UI/UX Design</div>
                            <button class="servicio_boton dark" 
                                    data-bs-toggle="tooltip" 
                                    data-bs-placement="top" 
                                    title="Inscribirse" 
                                    onclick="location.href='Controlador.php?accion=inscripcion'">
                                <i class="bi bi-hand-index-thumb fs-3 icono_servicio"></i>
                            </button>
                        </div>
                        <div class="servicio_contenido">
                            <h3 class="servicio_titulo">Design Unraveled: Behind the Scenes of UI/UX Magic</h3>
                            <div class="card-meta">
                                <span class="author">Jenny Smith</span>
                                <span class="date">22 July 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="servicio_card">
                        <div class="servicio_imagen">
                            <img src="https://images.unsplash.com/photo-1586717799252-bd134ad00e26?w=400&h=250&fit=crop&crop=center"
                                alt="User Experience Design">
                            <div class="servicio_tag">User Experience</div>
                            <button class="servicio_boton dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Inscribirse" onclick="location.href='Controlador.php?accion=inscripcion'">
                                <i class="bi bi-hand-index-thumb fs-3 icono_servicio"></i>
                            </button>
                        </div>
                        <div class="servicio_contenido">
                            <h3 class="servicio_titulo">Beyond Aesthetics: Crafting Intuitive UX</h3>
                            <div class="card-meta">
                                <span class="author">Jenny Smith</span>
                                <span class="date">22 July 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="servicio_card">
                        <div class="servicio_imagen">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop&crop=center"
                                alt="Design workspace">
                            <div class="servicio_tag">Design</div>
                            <button class="servicio_boton dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Inscribirse" onclick="location.href='Controlador.php?accion=inscripcion'">
                                <i class="bi bi-hand-index-thumb fs-3 icono_servicio"></i>
                            </button>
                        </div>
                        <div class="servicio_contenido">
                            <h3 class="servicio_titulo">Pixels & Insights: Unveiling the Art of UI/UX</h3>
                            <div class="card-meta">
                                <span class="author">Jenny Smith</span>
                                <span class="date">22 July 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= 3. Seccion dos Servicios  =================-->

        <section class="blog-container seccion_servicios">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="servicio_card">
                        <div class="servicio_imagen">
                            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=400&h=250&fit=crop&crop=top"
                                alt="UI/UX Design workspace">
                            <div class="servicio_tag">UI/UX Design</div>
                            <button class="servicio_boton dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Inscribirse" onclick="location.href='Controlador.php?accion=inscripcion'">
                                <i class="bi bi-hand-index-thumb fs-3 icono_servicio"></i>
                            </button>
                        </div>
                        <div class="servicio_contenido">
                            <h3 class="servicio_titulo">Design Unraveled: Behind the Scenes of UI/UX Magic</h3>
                            <div class="card-meta">
                                <span class="author">Jenny Smith</span>
                                <span class="date">22 July 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="servicio_card">
                        <div class="servicio_imagen">
                            <img src="https://images.unsplash.com/photo-1586717799252-bd134ad00e26?w=400&h=250&fit=crop&crop=center"
                                alt="User Experience Design">
                            <div class="servicio_tag">User Experience</div>
                            <button class="servicio_boton dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Inscribirse" onclick="location.href='Controlador.php?accion=inscripcion'">
                                <i class="bi bi-hand-index-thumb fs-3 icono_servicio"></i>
                            </button>
                        </div>
                        <div class="servicio_contenido">
                            <h3 class="servicio_titulo">Beyond Aesthetics: Crafting Intuitive UX</h3>
                            <div class="card-meta">
                                <span class="author">Jenny Smith</span>
                                <span class="date">22 July 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="servicio_card">
                        <div class="servicio_imagen">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop&crop=center"
                                alt="Design workspace">
                            <div class="servicio_tag">Design</div>
                            <button class="servicio_boton dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Inscribirse" onclick="location.href='Controlador.php?accion=inscripcion'">
                                <i class="bi bi-hand-index-thumb fs-3 icono_servicio"></i>
                            </button>
                        </div>
                        <div class="servicio_contenido">
                            <h3 class="servicio_titulo">Pixels & Insights: Unveiling the Art of UI/UX</h3>
                            <div class="card-meta">
                                <span class="author">Jenny Smith</span>
                                <span class="date">22 July 2023</span>
                            </div>
                        </div>
                    </div>
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

    <script src="../vista/js/jquery_slider.js"></script>

</body>

</html>