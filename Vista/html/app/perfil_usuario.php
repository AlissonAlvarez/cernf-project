<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar que el usuario esté logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: ../login.php"); // redirige si no está logueado
    exit();
}

?>

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

<body class="bg-light">

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

    <!-- Incluye tus estilos CSS antes de este HTML o en tu archivo CSS -->
<div class="container py-5">
    <div class="card profile-card">

        
        <div class="card-header-custom">
            <h4><i class="bi bi-person-badge me-2"></i>Perfil de Usuario</h4>
        </div>

        <!-- Contenido principal -->
        <div class="profile-content">

            <!-- Sidebar -->
            <div class="profile-sidebar">
                <div class="profile-image-container">
                    <img src="../vista/imagenes/logo_aplicacion.png" 
                         class="profile-image" 
                         alt="Usuario">
                    <div class="badge-verified">
                        <i class="bi bi-check-lg"></i>
                    </div>
                </div>

                <h5 class="profile-name"><?php echo $_SESSION['usuario']; ?></h5>
                <p class="profile-role"><?php echo $_SESSION['rol'] ?? 'Usuario'; ?></p>
                <p class="profile-company"><?php echo $_SESSION['email'] ?? 'correo@ejemplo.com'; ?></p>

                <ul class="list-group text-start mb-3 shadow-sm rounded-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Nombre:</strong> <span><?php echo $_SESSION['nombre'] ?? 'No registrado'; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Rol:</strong> <span><?php echo $_SESSION['rol'] ?? 'Usuario'; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Último acceso:</strong> <span><?php echo date('d/m/Y H:i:s'); ?></span>
                    </li>
                </ul>

                <div class="contact-buttons">
                    <button class="btn-contact"><i class="bi bi-telephone-fill"></i></button>
                    <button class="btn-contact"><i class="bi bi-chat-dots-fill"></i></button>
                    <button class="btn-contact"><i class="bi bi-envelope-fill"></i></button>
                </div>
            </div>

            <!-- Main Content -->
            <div class="profile-main">

                <!-- Información Personal -->
                <div class="info-section">
                    <h5 class="info-title">
                        <i class="bi bi-info-circle-fill"></i>
                        Información Personal
                    </h5>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-person-fill"></i></div>
                        <div class="info-content">
                            <div class="info-label">Nombre Completo</div>
                            <div class="info-value"><?php echo $_SESSION['usuario']; ?></div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-briefcase-fill"></i></div>
                        <div class="info-content">
                            <div class="info-label">Rol</div>
                            <div class="info-value"><?php echo $_SESSION['rol'] ?? 'Usuario'; ?></div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div class="info-content">
                            <div class="info-label">Correo</div>
                            <div class="info-value"><?php echo $_SESSION['email'] ?? 'correo@ejemplo.com'; ?></div>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="bi bi-clock-fill"></i></div>
                        <div class="info-content">
                            <div class="info-label">Último Acceso</div>
                            <div class="info-value"><?php echo date('d/m/Y H:i:s'); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="action-buttons">
                    <a href="Controlador.php?accion=aplicacion" class="btn btn-custom btn-back">
                        <i class="bi bi-arrow-left me-2"></i>Volver
                    </a>
                    <a href="Controlador.php?accion=cerrar_session" class="btn btn-custom btn-logout">
                        <i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>


</body>

</html>
