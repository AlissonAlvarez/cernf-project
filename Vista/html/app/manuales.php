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
                            <li><a href="#"><span class="icon-power-off"></span>Cerrar Sesión</a></li>
                        </ul>
                    </li>

                    <li class="submenu_gestioneducativa">
                        <a href="#"><span class="icon-institution"></span>Gestión Educativa<span
                                class="boton_submenu icon-chevron-down"></span></a>
                        <ul class="opciones_gestioneducativa">
                            <li><a href="#"><span class="icon-users"></span>Gestión de Usuarios</a></li>

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
        <main class="main_manuales">

            <div class="contenedor_tarjetas">

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(../vista/imagenes/manual_usuario.png);">
                            <div class="bg"></div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <a href="../vista/descargas/MANUAL_USUARIO.pdf">
                                    <h1>MANUAL DE USUARIO</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(../vista/imagenes/manual_instalacion.png);">
                            <div class="bg"></div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <a href="../vista/descargas/MANUAL_INSTALACIÓN_CONFIGURACIÓN.pdf">
                                    <h1>MANUAL DE INSTALACIÓN & CONFIGURACIÓN</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(../vista/imagenes/manual_capacitacion.png);">
                            <div class="bg"></div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <a href="../vista/descargas/PLAN_CAPACITACIÓN_USUARIOS.pdf">
                                    <h1>PLAN DE CAPACITACIÓN DE USUARIOS</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card__father">
                    <div class="card">
                        <div class="card__front" style="background-image: url(../vista/imagenes/manual_convivencia.png);">
                            <div class="bg"></div>
                        </div>
                        <div class="card__back">
                            <div class="body__card_back">
                                <a href="../vista/descargas/MANUAL_CONVIVENCIA.pdf">
                                    <h1>MANUAL DE CONVIVENCIA</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script src="../vista/js/script_aplicacion.js"></script>
        </main>

        <!--=================================footer=================================-->

        <footer>

        </footer>

    </body>

</html>