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
                        <li><a href="#" class="d-block px-3 py-2 text-dark text-decoration-none">Perfil</a></li>
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
    <main class="main_crud">
        <div class="container mt-4">
            <div class="card card-shadow">
                <!-- Header -->
                <div class="card-header tabla_app border-0 py-3">
                    <h1 class="mb-3  text-dark h4">Lista de Usuarios</h1>

                    <!-- Botones de acción y búsqueda -->
                    <div class="row align-items-center w-100">
                        <div class="col-md-6">
                            <div class="btn-group gap-3" role="group">
                                <a href="Controlador.php?accion=modulos" class="btn btn_app  rounded-2">
                                    <i class="bi bi-grid-3x3-gap-fill"></i> Módulos
                                </a>
                                <a href="Controlador.php?accion=usuarios_insertar" class="btn btn_app rounded-2">
                                    <i class="bi bi-plus-circle-fill"></i> Agregar
                                </a>
                                <a href="Controlador.php?accion=usuarios_pdf" class="btn btn_app  rounded-2">
                                    <i class="bi bi-file-earmark-pdf-fill"></i> Exportar
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="buscar_usuario.php" method="get" class="form_search w-75 ">
                                <div class="input-group">
                                    <input type="text" name="busqueda" id="busqueda" class="form-control w-75"
                                        placeholder="Buscar..." aria-label="Buscar">
                                    <button class="btn" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tabla -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-yellow table-striped mb-0">
                            <thead>
                                <tr class="bg-yellow">
                                    <th scope="col" class="fw-bold text-dark">Código</th>
                                    <th scope="col" class="fw-bold text-dark">Nombre</th>
                                    <th scope="col" class="fw-bold text-dark">Contraseña</th>
                                    <th scope="col" class="fw-bold text-dark">Identificación</th>
                                    <th scope="col" class="fw-bold text-dark">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $p = [];
                                $paginar = '';
                                if (isset($_GET['pagina']) && $_GET['pagina'] != '') {
                                    $pag = $_GET['pagina'];
                                } else {
                                    $pag = 0;
                                }

                                while ($d = $datos->fetch_object()) {
                                    $data = '
                                    <tr>
                                        <td> ' . $d->codusuario . '</td>
                                        <td>' . $d->usunombre . '</td>
                                        <td>' . $d->usucontrasena . '</td>
                                        <td>' . $d->usuidpersona . '</td>
                                        <td>
                                            <a href="Controlador.php?accion=usuarios_consultar&id=' . $d->codusuario . '" class="btn btn-outline-primary btn-action" title="Ver">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="Controlador.php?accion=usuarios_actualizar&id=' . $d->codusuario . '" class="btn btn-outline-success btn-action" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="Controlador.php?accion=usuarios_eliminar&id=' . $d->codusuario . '" class="btn btn-outline-danger btn-action" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>';
                                    array_push($p, $data);
                                }

                                for ($i = $pag; $i < count($p); $i++) {
                                    if ($i < 10 + $pag) {
                                        echo $p[$i];
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Paginación -->
                <div class="card-footer bg-white border-0">
                    <nav aria-label="Navegación de páginas">
                        <ul class="pagination justify-content-end mb-0">
                            <?php
                            $intervalo = count($p) / 10;
                            
                            for ($j = 1; $j <= $intervalo + 1; $j++) {
                                $c = ($j - 1) * 10;
                                $activeClass = '';
                                if (isset($_GET['pagina']) && $_GET['pagina'] == $c) {
                                    $activeClass = 'active';
                                } elseif (!isset($_GET['pagina']) && $j == 1) {
                                    $activeClass = 'active';
                                }
                                
                                $paginar .= '<li class="page-item ' . $activeClass . '">
                                                <a class="page-link" href="Controlador.php?accion=modulo_usuarios&pagina=' . $c . '">' . $j . '</a>
                                            </li>';
                            }
                            
                            echo $paginar;
                        ?>
                        </ul>
                    </nav>
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