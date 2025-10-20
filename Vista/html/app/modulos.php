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

    <!-- Offcanvas Dashboard -->
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

    <!-- Modules Container -->
    <main class="main_modulos">
        <div class="container-fluid px-4 py-4">

            <!-- Header -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="fw-bold mb-1">Módulos del Sistema</h2>
                            <p class="text-muted mb-0">Gestión educativa integral</p>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="bi bi-funnel me-1"></i> Filtros
                            </button>
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and View Controls -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="search-container">
                        <i class="bi bi-search search-icon"></i>
                        <input id="input_buscar" type="text" placeholder="Buscar Módulo"
                            class="form-control search-input">
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-end align-items-center">
                    <div class="view-toggle">
                        <button class="view-btn active" id="grid-view">
                            <i class="bi bi-grid-3x3-gap fs-4"></i>
                        </button>
                        <button class="view-btn" id="list-view">
                            <i class="bi bi-list fs-4"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="contenedor_modulos_aplicacion">
                <div class="contenedor_modulos" id="contenedor_modulos">
                    <div class="row g-4" id="modules-grid">

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_actividades"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_actividades">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-pink imagen_modulo">
                                        <i class="bi bi-card-checklist"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Actividades</h5>
                                <div class="status-badge status-academico mb-3">Sistema Académico</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-gear me-1"></i>
                                    <small>Gestión educativa</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_acudientes"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_acudientes">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-teal imagen_modulo">
                                        <i class="bi bi-megaphone"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Acudientes</h5>
                                <div class="status-badge status-gestion mb-3">Gestión Familiar</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-people me-1"></i>
                                    <small>Control de tutores</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_acudientexestudiante"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_acudientexestudiante">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-blue imagen_modulo">
                                        <i class="bi bi-journal-bookmark"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Acudiente X Estudiante</h5>
                                <div class="status-badge status-gestion mb-3">Relaciones</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-diagram-3 me-1"></i>
                                    <small>Vínculos familiares</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_acuerdos"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_acuerdos">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-orange imagen_modulo">
                                        <i class="bi bi-pencil-square"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Acuerdos</h5>
                                <div class="status-badge status-admin mb-3">Administración</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-file-text me-1"></i>
                                    <small>Documentos oficiales</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_asignaturas"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_asignaturas">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-purple imagen_modulo">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Asignaturas</h5>
                                <div class="status-badge status-academico mb-3">Sistema Académico</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-book me-1"></i>
                                    <small>Materias del currículo</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_calificaciones"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_calificaciones">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-red imagen_modulo">
                                        <i class="bi bi-bar-chart-line"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Calificaciones</h5>
                                <div class="status-badge status-academico mb-3">Sistema Académico</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-award me-1"></i>
                                    <small>Evaluación estudiantil</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_centroseducativos"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_centroseducativos">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-cyan imagen_modulo">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Centro Educativo</h5>
                                <div class="status-badge status-admin mb-3">Administración</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-building me-1"></i>
                                    <small>Datos institucionales</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_controlasistencias"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_controlasistencias">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-violet imagen_modulo">
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Control de Asistencia</h5>
                                <div class="status-badge status-academico mb-3">Control Académico</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-calendar-check me-1"></i>
                                    <small>Registro de presencia</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_cursos"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_cursos">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-green imagen_modulo">
                                        <i class="bi bi-grid-3x3-gap"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Cursos</h5>
                                <div class="status-badge status-academico mb-3">Sistema Académico</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-collection me-1"></i>
                                    <small>Gestión de cursos</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_directora"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_directora">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-indigo imagen_modulo">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Directora</h5>
                                <div class="status-badge status-admin mb-3">Administración</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-person-badge me-1"></i>
                                    <small>Gestión directiva</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_docentes"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_docentes">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-yellow imagen_modulo">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Docentes</h5>
                                <div class="status-badge status-gestion mb-3">Personal</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-person-workspace me-1"></i>
                                    <small>Personal académico</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_docentexsede"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_docentexsede">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-dark imagen_modulo">
                                        <i class="bi bi-diagram-3"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Docente X Sede</h5>
                                <div class="status-badge status-gestion mb-3">Asignaciones</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-diagram-2 me-1"></i>
                                    <small>Distribución por campus</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_estudiantes"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_estudiantes">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-pink imagen_modulo">
                                        <i class="bi bi-person-lines-fill"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Estudiantes</h5>
                                <div class="status-badge status-academico mb-3">Registro Estudiantil</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-person me-1"></i>
                                    <small>Base estudiantil</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_grados"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_grados">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-teal imagen_modulo">
                                        <i class="bi bi-flag"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Grados</h5>
                                <div class="status-badge status-academico mb-3">Sistema Académico</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-ladder me-1"></i>
                                    <small>Niveles académicos</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_matriculas"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_matriculas">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-blue imagen_modulo">
                                        <i class="bi bi-clipboard-check"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Matrículas</h5>
                                <div class="status-badge status-admin mb-3">Procesos</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-card-checklist me-1"></i>
                                    <small>Inscripciones</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_observador"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_observador">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-orange imagen_modulo">
                                        <i class="bi bi-binoculars"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Observador</h5>
                                <div class="status-badge status-academico mb-3">Control Disciplinario</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-eye me-1"></i>
                                    <small>Seguimiento conductual</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_personas"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_personas">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-purple imagen_modulo">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Personas</h5>
                                <div class="status-badge status-sistema mb-3">Base de Datos</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-database me-1"></i>
                                    <small>Registro general</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_salones"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_salones">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-red imagen_modulo">
                                        <i class="bi bi-door-closed"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Salones</h5>
                                <div class="status-badge status-admin mb-3">Infraestructura</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-door-open me-1"></i>
                                    <small>Espacios físicos</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_sedes"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_sedes">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-cyan imagen_modulo">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Sedes</h5>
                                <div class="status-badge status-admin mb-3">Campus</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-geo me-1"></i>
                                    <small>Ubicaciones</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_sueldos"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_sueldos">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-violet imagen_modulo">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Sueldos</h5>
                                <div class="status-badge status-gestion mb-3">Nómina</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-cash me-1"></i>
                                    <small>Pagos del personal</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_tipoactividades"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_tipoactividades">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-green imagen_modulo">
                                        <i class="bi bi-puzzle"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Tipo de Actividades</h5>
                                <div class="status-badge status-academico mb-3">Categorías</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-tags me-1"></i>
                                    <small>Clasificación</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_tipofaltas"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_tipofaltas">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-indigo imagen_modulo">
                                        <i class="bi bi-exclamation-octagon"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Tipo de Faltas</h5>
                                <div class="status-badge status-academico mb-3">Sistema Disciplinario</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-exclamation-triangle me-1"></i>
                                    <small>Clasificación de faltas</small>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <a href="Controlador.php?accion=modulo_usuarios"
                                class="project-card modulo_aplicacion p-4 h-100" id="modulo_usuarios">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="project-icon icon-yellow imagen_modulo">
                                        <i class="bi bi-person-gear"></i>
                                    </div>
                                    <i class="bi bi-star text-muted"></i>
                                </div>
                                <h5 class="fw-bold mb-1 descripcion_modulo">Usuarios</h5>
                                <div class="status-badge status-sistema mb-3">Sistema</div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="bi bi-person-gear me-1"></i>
                                    <small>Gestión de accesos</small>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../vista/js/script_aplicacion.js"></script>
    <script src="../vista/js/script_modulos.js"></script>


    <!--=================================footer=================================-->

    <footer>

    </footer>

</body>

</html>