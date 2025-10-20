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
    <link rel="stylesheet" type="text/css" href="../vista/css/estilos_crud.css">
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
                <a href="Controlador.php?accion=inicio" class="text-black text-decoration-none fw-semibold fs-4">
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

                <li class="text-center my-3">
                    <img src="../vista/imagenes/logo_aplicacion.png" id="logo_aplicacion" class="img-fluid"
                        style="max-width: 100px;">
                </li>

                <li id="submenu_informacion">
                    <a href="#" class="d-block px-3 py-2 text-dark text-decoration-none" data-bs-toggle="collapse"
                        data-bs-target="#opciones_informacion" aria-expanded="false">
                        Información <span class="float-end">&#9660;</span>
                    </a>
                    <ul id="opciones_informacion" class="collapse list-unstyled ps-3">
                        <li><a href="Controlador.php?accion=perfil_usuario" class="d-block px-3 py-2 text-dark text-decoration-none">Perfil</a></li>
                        <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Opciones</a></li>
                        <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Cerrar Sesión</a></li>
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
    <main class="main_crud bg-light  py-5">
        <div class="container px-3 px-md-5">
            <div class="card shadow-lg border-0 rounded-4">


                <div
                    class="card-header py-4 px-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <div>
                        <h2 class="color_icon fw-bold mb-1">
                            <i class="bi bi-clipboard-check me-2"></i> Crear Control Asistencia
                        </h2>
                        <p class="text-muted mb-0 small">Registra el control de asistencia de un estudiante</p>
                    </div>

                    <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                        <a href="Controlador.php?accion=modulo_controlasistencias"
                            class="btn btn-outline-secondary rounded-pill px-4">
                            <i class="bi bi-arrow-left me-1"></i> Volver
                        </a>
                    </div>
                </div>


                <div class="card-form text-center p-4 p-md-5">
                    <form action="Controlador.php" method="POST" class="text-start">
                        <input type="hidden" name="accion" value="insertar_controlasistencias">

                        <div class="mb-3">
                            <label for="codigo" class="form-label">Código de Control de Asistencia</label>
                            <input type="search" class="form-control" name="codigo" id="codigo" placeholder="Ej: CA101"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha & Hora de Asistencia</label>
                            <input type="datetime-local" class="form-control" name="fecha" id="fecha" required>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-select" required>
                                <option value="">Seleccionar</option>
                                <option value="Llegada Tarde">Llegada Tarde</option>
                                <option value="Falla">Falla</option>
                                <option value="Permiso">Permiso</option>
                                <option value="Retirado">Retirado</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bimestre" class="form-label">Número de Bimestre</label>
                            <select name="bimestre" id="bimestre" class="form-select" required>
                                <option value="">Seleccionar</option>
                                <option value="1">Bimestre 1</option>
                                <option value="2">Bimestre 2</option>
                                <option value="3">Bimestre 3</option>
                                <option value="4">Bimestre 4</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="observacion" class="form-label">Observación</label>
                            <textarea class="form-control" name="observacion" id="observacion" rows="4"
                                placeholder="Escribe alguna observación..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="estudiante" class="form-label">Código de Estudiante</label>
                            <input type="search" class="form-control" name="estudiante" id="estudiante"
                                placeholder="Ej: EST123" required>
                        </div>

                        <div class="mb-4">
                            <label for="docente" class="form-label">Código de Docente</label>
                            <input type="search" class="form-control" name="docente" id="docente"
                                placeholder="Ej: DOC456" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary border-0 btn-lg btn_modulos">
                                Guardar
                            </button>
                        </div>
                    </form>
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