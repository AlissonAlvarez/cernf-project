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
        <link rel="stylesheet" type="text/css" href="../vista/css/estilos_app.css">
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
                            <li><a href="#"><span class="icon-sitemap"></span>Gestión de Docentes</a></li>

                            <li class="submenu_gestionacademica">
                                <a href="#"><span class="icon-graduation-cap"></span>Gestión Académica<span
                                        class="boton_submenu icon-chevron-down"></span></a>
                                <ul class="opciones_gestionacademica">
                                    <li><a href="#"><span class="icon-clock-o"></span>Control de Asistencia</a></li>
                                    <li><a href="#"><span class="icon-calculator"></span>Seguimiento Académico</a></li>
                                    <li><a href="#"><span class="icon-legal"></span>Seguimiento Disciplinario</a></li>
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
        <main class="main_modulos">
            <div class="contenedor_modulos_aplicacion">
                <div class="icono">
                    <div class="lista">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="grid">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="boton">
                    <input id="input_buscar" type="text" placeholder="Buscar Módulo" class="form-control"><br><br>


                    <div class="contenedor_modulos" id="contenedor_modulos">

                        <a href="Controlador.php?accion=modulo_actividades" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-list-alt"></i></div>
                            <div class="descripcion_modulo">Actividades</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_acudientes" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-bullhorn"></i></div>
                            <div class="descripcion_modulo">Acudientes</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_acudientexestudiante" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-address-book"></i></div>
                            <div class="descripcion_modulo">Acudiente X Estudiante</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_acuerdos" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-edit"></i></div>
                            <div class="descripcion_modulo">Acuerdos</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_asignaturas" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-folder"></i></div>
                            <div class="descripcion_modulo">Asignaturas</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_calificaciones" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-calculator"></i></div>
                            <div class="descripcion_modulo">Calificaciones</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_centroseducativos" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-institution"></i></div>
                            <div class="descripcion_modulo">Centro Educativo</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_controlasistencias" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-clock-o"></i></div>
                            <div class="descripcion_modulo">Control de Asistencia</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_cursos" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-cubes"></i></div>
                            <div class="descripcion_modulo">Cursos</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_directora" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-shield"></i></div>
                            <div class="descripcion_modulo">Directora</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_docentes" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-black-tie"></i></div>
                            <div class="descripcion_modulo">Docentes</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_docentexsede" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-sitemap"></i></div>
                            <div class="descripcion_modulo">Docente X Sede</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_estudiantes" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-graduation-cap"></i></div>
                            <div class="descripcion_modulo">Estudiantes</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_grados" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-flag"></i></div>
                            <div class="descripcion_modulo">Grados</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_matriculas" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-clipboard"></i></div>
                            <div class="descripcion_modulo">Matrículas</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_observador" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-legal"></i></div>
                            <div class="descripcion_modulo">Observador</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_personas" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-odnoklassniki"></i></div>
                            <div class="descripcion_modulo">Personas</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_salones" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-map-signs"></i></div>
                            <div class="descripcion_modulo">Salones</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_sedes" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-map"></i></div>
                            <div class="descripcion_modulo">Sedes</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_sueldos" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-money"></i></div>
                            <div class="descripcion_modulo">Sueldos</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_tipoactividades" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-puzzle-piece"></i></div>
                            <div class="descripcion_modulo">Tipo de Actividades</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_tipofaltas" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-balance-scale"></i></div>
                            <div class="descripcion_modulo">Tipo de Faltas</div>
                        </a>

                        <a href="Controlador.php?accion=modulo_usuarios" class="modulo_aplicacion">
                            <div class="imagen_modulo"><i class="icon-users"></i></div>
                            <div class="descripcion_modulo">Usuarios</div>
                        </a>
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