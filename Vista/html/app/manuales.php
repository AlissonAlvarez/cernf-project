<?php ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Centro Educativo Rural Nicolás de Federmán</title>
    <link rel="icon" href="../vista/imagenes/logo_icono.ico" type="image/ico" />
    <link rel="icon" href="../vista/imagenes/logo_icono.ico" type="image/ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="../vista/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../vista/css/estilos_app.css">
    <link rel="stylesheet" type="text/css" href="../vista/fuentes/Font-Awesome (675)/estilos_fuente_icono.css">

    <script src="../vista/js/jquery-3.6.0.min.js"></script>
    <script src="../vista/js/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!--=================================header=================================-->
    <header id="header" class="bg-primary text-white p-3 header">
        <div id="contenedor_aplicacion" class="container-fluid d-flex justify-content-between align-items-center">
            <div id="logo">
                <a href="Controlador.php?accion=aplicacion" class="text-black text-decoration-none fw-semibold fs-4">
                    BIENVENIDO AL CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN
                </a>
            </div>
            <div id="boton_abrir_menu">
                
                <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#contenedor_menu_aplicacion" aria-controls="contenedor_menu_aplicacion">
                    <i class="bi bi-list text-white fs-5"></i>
                </button>
            </div>
        </div>
    </header>

    <div id="contenedor_menu_aplicacion" class="offcanvas offcanvas-start bg-light" tabindex="-1"
        aria-labelledby="offcanvasMenuLabel">
        <div id="head" class="offcanvas-header">
            <strong>Hola</strong>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                id="boton_cerrar_menu"></button>
        </div>
        <div id="menu_aplicacion" class="offcanvas-body p-0">
            <ul id="opciones_menu_aplicacion" class="list-unstyled m-0 p-0">

                <?php if (session_status() === PHP_SESSION_NONE) {session_start();}?>
                <li class="text-center my-3 position-relative">
                    <img src="../vista/imagenes/logo_aplicacion.png" id="logo_aplicacion" class="img-fluid"
                        style="max-width: 100px;">

                    <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true): ?>
                    <span class="indicador-sesion" title="Sesión activa"></span>    

                    <p class="mt-2 fw-bold usuario-logueado"><?php echo $_SESSION['usuario']; ?></p>
                    <?php endif; ?>
                </li>
                <li id="submenu_informacion">
                    <a href="#" class="d-block px-3 py-2 text-dark text-decoration-none" data-bs-toggle="collapse"
                        data-bs-target="#opciones_informacion" aria-expanded="false">
                        Información <span class="float-end">&#9660;</span>
                    </a>
                    <ul id="opciones_informacion" class="collapse list-unstyled ps-3">
                        <li><a href="Controlador.php?accion=perfil_usuario" class="d-block px-3 py-2 text-dark text-decoration-none">Perfil</a></li>
                        <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Opciones</a></li>
                        <li><a href="Controlador.php?accion=cerrar_session"
                                class="d-block px-3 py-2 text-dark text-decoration-none">
                            Cerrar Sesión</a></li>
                    </ul>
                </li>

                <li id="submenu_gestioneducativa">
                    <a href="#" class="d-block px-3 py-2 text-dark text-decoration-none" data-bs-toggle="collapse"
                        data-bs-target="#opciones_gestioneducativa" aria-expanded="false">
                        Gestión Educativa <span class="float-end">&#9660;</span>
                    </a>
                    <ul id="opciones_gestioneducativa" class="collapse list-unstyled ps-3">
                        <li><a href="Controlador.php?accion=modulo_usuarios"
                                class="d-block px-3 py-2 text-dark text-decoration-none">Gestión de Usuarios</a></li>
                        <li><a href="Controlador.php?accion=modulo_docentes"
                                class="d-block px-3 py-2 text-dark text-decoration-none">Gestión de Docentes</a></li>

                        <li id="submenu_gestionacademica">
                            <a href="#" class="d-block px-3 py-2 text-dark text-decoration-none"
                                data-bs-toggle="collapse" data-bs-target="#opciones_gestionacademica"
                                aria-expanded="false">
                                Gestión Académica <span class="float-end">&#9660;</span>
                            </a>
                            <ul id="opciones_gestionacademica" class="collapse list-unstyled ps-3">
                                <li><a href="Controlador.php?accion=modulo_controlasistencias"
                                        class="d-block px-3 py-2 text-dark text-decoration-none">Control de
                                        Asistencia</a></li>
                                <li><a href="Controlador.php?accion=modulo_calificaciones"
                                        class="d-block px-3 py-2 text-dark text-decoration-none">Seguimiento
                                        Académico</a></li>
                                <li><a href="Controlador.php?accion=modulo_observador"
                                        class="d-block px-3 py-2 text-dark text-decoration-none">Seguimiento
                                        Disciplinario</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li id="submenu_herramientas">
                    <a href="#" class="d-block px-3 py-2 text-dark text-decoration-none" data-bs-toggle="collapse"
                        data-bs-target="#opciones_herramientas" aria-expanded="false">
                        Herramientas <span class="float-end">&#9660;</span>
                    </a>
                    <ul id="opciones_herramientas" class="collapse list-unstyled ps-3">
                        <li id="submenu_documentos">
                            <a href="#" class="d-block px-3 py-2 text-dark text-decoration-none"
                                data-bs-toggle="collapse" data-bs-target="#opciones_documentos" aria-expanded="false">
                                Documentos <span class="float-end">&#9660;</span>
                            </a>
                            <ul id="opciones_documentos" class="collapse list-unstyled ps-3">
                                <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Informe de
                                        Notas</a></li>
                                <li><a href="#"
                                        class="d-block px-3 py-2 text-dark text-decoration-none">Certificados</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Cronograma</a></li>
                        <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Directorio</a></li>
                    </ul>
                </li>

                <li><a href="Controlador.php?accion=modulos"
                        class="d-block px-3 py-2 text-dark text-decoration-none">Módulos</a></li>
                <li><a href="Controlador.php?accion=manuales"
                        class="d-block px-3 py-2 text-dark text-decoration-none">Manual de Usuario</a></li>

            </ul>
        </div>
    </div>

    <!--==================================main==================================-->
    <main class="main_manuales pt-5">
        <div class="contenedor_tarjetas">
            <div class="row g-4">

                <div class="col-lg-6 col-md-6">
                    <div class="card__father">
                        <a href="../vista/descargas/MANUAL_USUARIO.pdf"  target="_blank" class="card card-1">
                            <div class="card__front"
                                style="background-image: url(../vista/imagenes/manual_usuario.png);">
                                <div class="bg"></div>

                                <div class="card-icon">
                                    <i class="bi bi-person-gear"></i>
                                </div>

                                <div class="body__card_back">
                                    <h1 class="card-title">MANUAL DE USUARIO</h1>
                                </div>

                                <p class="card-description">
                                    Guía completa para el uso y navegación del sistema educativo.
                                    Incluye instrucciones paso a paso para todas las funcionalidades
                                    disponibles para usuarios finales.
                                </p>

                                <div class="card-number">1</div>
                            </div>
                            <div class="card__back">
                                <div class="body__card_back">
                                    <h1>MANUAL DE USUARIO</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card__father">
                        <a href="../vista/descargas/MANUAL_INSTALACIÓN_CONFIGURACIÓN.pdf"  target="_blank" class="card card-2">
                            <div class="card__front"
                                style="background-image: url(../vista/imagenes/manual_instalacion.png);">
                                <div class="bg"></div>

                                <div class="card-icon">
                                    <i class="bi bi-gear"></i>
                                </div>

                                <div class="body__card_back">
                                    <h1 class="card-title">MANUAL DE INSTALACIÓN & CONFIGURACIÓN</h1>
                                </div>

                                <p class="card-description">
                                    Documentación técnica detallada para la instalación del sistema,
                                    configuración de servidores, base de datos y parámetros
                                    de funcionamiento.
                                </p>

                                <div class="card-number">2</div>
                            </div>
                            <div class="card__back">
                                <div class="body__card_back">
                                    <h1>MANUAL DE INSTALACIÓN & CONFIGURACIÓN</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card__father">
                        <a href="../vista/descargas/PLAN_CAPACITACIÓN_USUARIOS.pdf"  target="_blank" class="card card-3">
                            <div class="card__front"
                                style="background-image: url(../vista/imagenes/manual_capacitacion.png);">
                                <div class="bg"></div>

                                <div class="card-icon">
                                    <i class="bi bi-mortarboard"></i>
                                </div>

                                <div class="body__card_back">
                                    <h1 class="card-title">PLAN DE CAPACITACIÓN DE USUARIOS</h1>
                                </div>

                                <p class="card-description">
                                    Programa estructurado de formación para docentes, administrativos
                                    y personal educativo en el uso efectivo de todas las herramientas
                                    del sistema.
                                </p>

                                <div class="card-number">3</div>
                            </div>
                            <div class="card__back">
                                <div class="body__card_back">
                                    <h1>PLAN DE CAPACITACIÓN DE USUARIOS</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card__father">
                        <a href="../vista/descargas/MANUAL_CONVIVENCIA.pdf"  target="_blank" class="card card-4">
                            <div class="card__front"
                                style="background-image: url(../vista/imagenes/manual_convivencia.png);">
                                <div class="bg"></div>

                                <div class="card-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <div class="body__card_back">
                                    <h1 class="card-title">MANUAL DE CONVIVENCIA</h1>
                                </div>

                                <p class="card-description">
                                    Normativas, reglamentos y políticas institucionales que rigen
                                    la convivencia escolar, derechos y deberes de toda la comunidad
                                    educativa.
                                </p>

                                <div class="card-number">4</div>
                            </div>
                            <div class="card__back">
                                <div class="body__card_back">
                                    <h1>MANUAL DE CONVIVENCIA</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script src="../vista/js/script_aplicacion.js"></script>

    <!--=================================footer=================================-->

    <footer>

    </footer>

</body>

</html>