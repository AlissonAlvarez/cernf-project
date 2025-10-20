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
    <main class="main_crud bg-light  py-5">
        <div class="container-fluid px-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                
                <div
                    class="card-header bg-white border-0 py-4 px-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                    <div>
                        <h2 class="color_icon fw-bold mb-1">
                            <i class="bi bi-building-fill me-2 color_icon"></i> Lista de Salones
                        </h2>
                        <p class="text-muted mb-0 small">Administra todos los salones registrados en el sistema</p>
                    </div>

                    <!-- Botones de acción -->
                    <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
                        <a href="Controlador.php?accion=modulos"
                            class="btn btn-outline-secondary rounded-pill px-4 btn_modulos">
                            <i class="bi bi-grid-3x3-gap-fill me-1"></i> Módulos
                        </a>
                        <a href="Controlador.php?accion=salones_insertar"
                            class="btn btn-primary rounded-pill px-4 btn_app">
                            <i class="bi bi-plus-circle me-1"></i> Nuevo Salón
                        </a>
                        <a href="Controlador.php?accion=salones_pdf"
                            class="btn btn-danger rounded-pill px-4 btn_exportar">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Exportar PDF
                        </a>
                    </div>
                </div>

                <!-- Buscador -->
                <div class="px-4 pb-3">
                    <form action="buscar_usuario.php" method="get" class="w-100 w-md-50 ms-auto">
                        <div class="input-group shadow-sm rounded-pill overflow-hidden">
                            <input type="text" name="busqueda" id="busqueda"
                                class="form-control shadow-sm border-0 ps-4" placeholder="Buscar">
                            <button class="btn px-4 btn_modulos" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Tabla -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover mb-0">
                            <thead class="table-light text-secondary text-uppercase small">
                                <tr>
                                    <th scope="col" class="ps-4">Código</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Sede</th>
                                    <th scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="border-top">
                                <?php
              $p = [];
              $paginar = '';
              $pag = isset($_GET['pagina']) && $_GET['pagina'] != '' ? $_GET['pagina'] : 0;

              while ($d = $datos->fetch_object()) {
                  $data = '
                  <tr>
                      <td class="ps-4 fw-semibold text-dark">' . $d->codsalon . '</td>
                      <td class="text-capitalize">' . $d->salnombre . '</td>
                      <td class="text-capitalize">' . $d->sednombre . '</td>
                      <td class="text-center">
                          <div class="d-flex justify-content-center gap-2">
                              <a href="Controlador.php?accion=salones_consultar&id=' . $d->codsalon . '" class="btn btn-outline-primary action-btn rounded-3" title="Ver">
                                  <i class="bi bi-eye"></i>
                              </a>
                              <a href="Controlador.php?accion=salones_actualizar&id=' . $d->codsalon . '" class="btn btn-outline-success action-btn rounded-3" title="Editar">
                                  <i class="bi bi-pencil"></i>
                              </a>
                              <a href="Controlador.php?accion=salones_eliminar&id=' . $d->codsalon . '" class="btn btn-outline-danger action-btn rounded-3" title="Eliminar">
                                  <i class="bi bi-trash"></i>
                              </a>
                          </div>
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
                <div class="card-footer bg-white py-4">
                    <nav aria-label="Navegación de páginas">
                        <ul class="pagination justify-content-center mb-0 gap-2">
                            <?php
            $totalPaginas = ceil(count($p) / 10);
            $paginaActual = isset($_GET['pagina']) ? intval($_GET['pagina']) / 10 + 1 : 1;

            // Página anterior
            $anterior = max(1, $paginaActual - 1);
            $anteriorLink = ($paginaActual > 1) ? 'Controlador.php?accion=modulo_salones&pagina=' . (($anterior - 1) * 10) : '#';
            $disabledPrev = ($paginaActual == 1) ? 'disabled' : '';

            echo '<li class="page-item ' . $disabledPrev . '">
                    <a class="page-link pagination-link" href="' . $anteriorLink . '" aria-label="Anterior">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                  </li>';

            // Números de páginas
            for ($j = 1; $j <= $totalPaginas; $j++) {
                $c = ($j - 1) * 10;
                $activeClass = ($paginaActual == $j) ? 'active' : '';
                echo '<li class="page-item ' . $activeClass . '">
                        <a class="page-link pagination-link" href="Controlador.php?accion=modulo_salones&pagina=' . $c . '">' . $j . '</a>
                      </li>';
            }

            // Página siguiente
            $siguiente = min($totalPaginas, $paginaActual + 1);
            $siguienteLink = ($paginaActual < $totalPaginas) ? 'Controlador.php?accion=modulo_salones&pagina=' . (($siguiente - 1) * 10) : '#';
            $disabledNext = ($paginaActual == $totalPaginas) ? 'disabled' : '';

            echo '<li class="page-item ' . $disabledNext . '">
                    <a class="page-link pagination-link" href="' . $siguienteLink . '" aria-label="Siguiente">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                  </li>';
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