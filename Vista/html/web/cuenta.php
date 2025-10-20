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
    <main class="main_cuenta">
        <a href="#" class="btn btn-primary back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up"></i>
        </a>

        <!--================= 1. Seccion Banner  =================-->
        <section id="cuenta" class="seccion_uno_intitucion">
            <img src="../vista/imagenes/niños4.jpg" class="imagen_intitucion" />
            <div class="contenido">
                <h1 class="titulo_banner">Cuenta</h1>
                <p>Inicia Sesión</p>
            </div>
        </section>

        <div class="contenedor_cuenta container position-relative">
    <h1 class="titulo text-center mb-5">Accede a la plataforma</h1>

    <div class="contenedor_formulario row justify-content-center position-relative" style="transition: transform 0.5s ease;">
        <!-- FORMULARIO INGRESAR -->
        <form class="formulario_ingresar col-12 col-md-6" id="formulario_ingresar" name="formulario_ingresar"
            action="Controlador.php" method="POST" style="transition: opacity 0.5s;">
            
            <div class="titulo_formulario mb-4">
                <h2 class="text-center">Iniciar Sesión</h2>
            </div>

            <div class="form-floating mb-3">
                <input type="hidden" id="accion" name="accion" value="iniciar_sesion">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                <label for="usuario">Usuario</label>
                <span class="mensaje_error"></span>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                <label for="contrasena">Contraseña</label>
                <span class="mensaje_error"></span>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="check" checked>
                <label class="form-check-label" for="check">Recordarme</label>
            </div>

            <div class="mb-3">
                <!-- Abre la modal -->
                <a href="#" class="btn text-success" data-bs-toggle="modal" data-bs-target="#modalValidar" id="boton_validar">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>

            <div class="mb-3">
                <input type="submit" id="login" name="boton_ingresar" class="btn btn-send w-100" value="Ingresar">
            </div>
        </form>
    </div>
</div>

<!-- MODAL VALIDAR -->
<div class="modal fade" id="modalValidar" tabindex="-1" aria-labelledby="modalValidarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4" style="border-radius: 1rem;">
            <div class="modal-header border-0">
                <h2 class="modal-title text-center w-100" id="modalValidarLabel">Recuperar Contraseña</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <form class="formulario_validar" id="formulario_validar" name="formulario_validar"
                    action="" method="" style="transition: opacity 0.5s;">
                    
                    <div class="form-floating mb-3">
                        <select class="form-select form-control" id="tipo_documento" name="tipo_documento" placeholder="Tipo de documento">
                            <option value="">Seleccionar</option>
                            <option value="">Cédula de Ciudadanía</option>
                            <option value="">Tarjeta de Identidad</option>
                            <option value="">Registro Civil</option>
                        </select>
                        <label for="tipo_documento">Tipo de documento</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="input_formulario" name="input_formulario" placeholder="Número de documento">
                        <label for="input_formulario">Número de documento</label>
                        <span class="mensaje_error"></span>
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-send w-100" value="Validar">
                    </div>

                    <div class="text-center mt-3">
                        <!-- Cierra la modal y vuelve al login -->
                        <a href="#" class="btn text-success" data-bs-dismiss="modal" id="boton_ingresar_modal">
                            ¿Ya tienes una cuenta?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




    </main>
    <script src="../vista/js/script_cuenta.js"></script>
    <script src="../vista/js/jquery_Slider.js"></script>

    <!--=================================footer=================================-->

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 d-flex flex-column gap-3 footer_informacion">
                    <div class="logo_f">
                        <img src="../vista/imagenes/logo.png" class="logo_footer">
                    </div>
                    <p>Institución educativa comprometida con la formación integral de niños y jóvenes, promoviendo valores, conocimiento y desarrollo en un entorno rural de calidad.</p>
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