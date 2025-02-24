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

        <link rel="stylesheet" type="text/css" href="../vista/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../vista/css/estilos_crud.css">
        <link rel="stylesheet" type="text/css" href="../vista/fuentes/Font-Awesome (675)/estilos_fuente_icono.css">

        <script src="../vista/js/jquery-3.6.0.min.js"></script>
        <script src="../vista/js/jquery.validate.js"></script>

    </head>

    <body>

        <!--=================================header=================================-->
        <header class="header">
            <div class="contenedor_aplicacion">
                <div class="row">
                    <div class="logo">
                        <a href="Controlador.php?accion=inicio">BIENVENIDO AL CENTRO EDUCATIVO RURAL NICOLÁS DE FEDERMÁN</a>
                    </div>
                    <div class="boton_abrir_menu">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

        <div class="contenedor_menu_aplicacion">
            <nav class="menu_aplicacion">
                <div class="head">
                    <strong>Hola</strong>
                    <div class="boton_cerrar_menu">&times;</div>
                </div>
                <ul class="opciones_menu_aplicacion">

                    <li><img src="../vista/imagenes/logo_aplicacion.png" class="logo_aplicacion"></li>

                    <li class="submenu_informacion">
                        <a href="#"><span class="icon-user-circle"></span>Información<span
                                class="boton_submenu icon-chevron-down"></span></a>
                        <ul class="opciones_informacion">
                            <li><a href="#"><span class="icon-id-card"></span>Perfil</a></li>
                            <li><a href="#"><span class="icon-cog"></span>Opciones</a></li>
                            <li><a href="Controlador.php?accion=cerrar_session"><span class="icon-power-off"></span>Cerrar Sesión</a></li>
                        </ul>
                    </li>

                    <li class="submenu_gestioneducativa">
                        <a href="#"><span class="icon-institution"></span>Gestión Educativa<span
                                class="boton_submenu icon-chevron-down"></span></a>
                        <ul class="opciones_gestioneducativa">
                            <li><a href="Controlador.php?accion=modulo_usuarios"><span class="icon-users"></span>Gestión de Usuarios</a></li>

                            <li><a href="Controlador.php?accion=modulo_docentes"><span class="icon-sitemap"></span>Gestión de Docentes</a></li>

                            <li class="submenu_gestionacademica">
                                <a href="#"><span class="icon-graduation-cap"></span>Gestión Académica<span
                                        class="boton_submenu icon-chevron-down"></span></a>
                                <ul class="opciones_gestionacademica">
                                    <li><a href="Controlador.php?accion=modulo_controlasistencias"><span class="icon-clock-o"></span>Control de Asistencia</a></li>
                                    <li><a href="Controlador.php?accion=modulo_calificaciones"><span class="icon-calculator"></span>Seguimiento Académico</a></li>
                                    <li><a href="Controlador.php?accion=modulo_observador"><span class="icon-legal"></span>Seguimiento Disciplinario</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu_herramientas">
                        <a href="#"><span class="icon-suitcase"></span>Herramientas<span
                                class="boton_submenu icon-chevron-down"></span></a>
                        <ul class="opciones_herramientas">

                            <li class="submenu_documentos">
                                <a href="#"><span class="icon-file-text-o"></span>Documentos<span
                                        class="boton_submenu icon-chevron-down"></span></a>
                                <ul class="opciones_documentos">
                                    <li><a href="#"><span class="icon-pencil-square-o"></span>Informe de Notas</a></li>
                                    <li><a href="#"><span class="icon-certificate"></span>Certificados</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="icon-calendar"></span>Cronograma</a></li>
                            <li><a href="#"><span class="icon-address-book"></span>Directorio</a></li>
                        </ul>
                    </li>

                    <li><a href="Controlador.php?accion=modulos"><span class="icon-th"></span>Módulos</a></li>
                    <li><a href="#"><span class="icon-book"></span>Manual de Usuario</a></li>		
                </ul>
            </nav>
        </div>

        <!--==================================main==================================-->
        <main class="main_crud">
            <div class="contenedor_tabla" id="contenedor_crud">
                <h1>Lista de Tipo de Faltas</h1>

                <div class="header_tabla">

                    <div class="botones_tabla">
                        <form action="buscar_usuario.php" method="get">
                            <a href="Controlador.php?accion=modulos" class="btn_tabla"><span class="icon-th"></span>Módulos</a>
                            <a href="Controlador.php?accion=tipofaltas_insertar" class="btn_tabla"><span class="icon-plus-square"></span>Agregar</a>
                            <a href="Controlador.php?accion=tipofaltas_pdf" class="btn_tabla"><span class="icon-file-pdf-o"></span>Exportar</a>
                        </form>
                    </div>

                    <div class="buscador_tabla">
                        <form action="buscar_usuario.php" method="get" class="form_search">
                            <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
                            <input type="submit" value="Buscar" class="btn_search">
                        </form>
                    </div>

                </div>

                <table>
                    <thead> 
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
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
                                <td> ' . $d->codtipofalta . '</td>
                                <td>' . $d->tipfalnombre . '</td>
                                <td>' . $d->tipfaldescripcion . '</td>
                                <td>
                                    <a href="Controlador.php?accion=tipofaltas_consultar&id=' . $d->codtipofalta . '" class="btn_crud"><span class="icon-eye"></span></a>
                                    <a href="Controlador.php?accion=tipofaltas_actualizar&id=' . $d->codtipofalta . '" class="btn_crud"><span class="icon-edit"></span></a>
                                    <a href="Controlador.php?accion=tipofaltas_eliminar&id=' . $d->codtipofalta . '" class="btn_crud"><span class="icon-trash-o"></span></a>
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
                <div class="paginador">
                    <ul>
                        <?php
                        $intervalo = count($p) / 10;

                        for ($j = 1; $j <= $intervalo + 1; $j++) {
                            $c = ($j - 1) * 10;
                            $paginar .= '<li><a href="Controlador.php?accion=modulo_tipofaltas&pagina=' . $c . '">' . $j . '</a></li>';
                        }
                        ?>
                        <?php
                        echo $paginar;
                        ?>
                    </ul>

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