<?php

require_once '../Configuracion/configuracion_constantes.php';
require_once '../Configuracion/Conexion.php';
require_once 'FuncionesControlador.php';

class Controlador {

    public function verPagina($ruta) {
        require_once $ruta;
    }

}


//VISUALIZAR VISTAS (WEB)
if (isset($_GET["accion"]) && $_GET["accion"] == "inicio") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/web/inicio.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "institucion") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/web/institucion.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "servicios") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/web/servicios.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "contacto") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/web/contacto.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "cuenta") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/web/cuenta.php');
}

if (isset($_GET["accion"]) && $_GET["accion"] == "inscripcion") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/web/inscripcion.php');
}

//VISUALIZAR VISTAS (APP)
if (isset($_GET["accion"]) && $_GET["accion"] == "aplicacion") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/aplicacion.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulos") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/modulos.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "manuales") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/manuales.php');
}


//FUNCIONES DE INICIAR & CERRAR SESIÓN
if (isset($_POST["accion"]) && $_POST["accion"] == "iniciar_sesion") {
    $controlador = new FuncionesControlador();
    $controlador->iniciar_sesion($_POST["usuario"], $_POST["contrasena"]);
}
if (isset($_GET["accion"]) && $_GET["accion"] == "cerrar_session") {
    $controlador = new FuncionesControlador();
    $controlador->cerrar_sesion();
}


//FUNCIONES CRUD (TABLAS)
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_actividades") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_actividades_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_acudientes") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_acudientes_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_acudientexestudiante") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_acudientexestudiante_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_acuerdos") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_acuerdos_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_asignaturas") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_asignaturas_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_calificaciones") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_calificaciones_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_centroseducativos") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_centroseducativos_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_controlasistencias") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_controlasistencias_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_cursos") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_cursos_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_directora") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_directora_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_docentes") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_docentes_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_docentexsede") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_docentexsede_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_estudiantes") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_estudiantes_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_grados") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_grados_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_matriculas") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_matriculas_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_observador") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_observador_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_personas") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_personas_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_salones") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_salones_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_sedes") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_sedes_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_sueldos") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_sueldos_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_tipoactividades") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_tipoactividades_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_tipofaltas") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_tipofaltas_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "modulo_usuarios") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_usuarios_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "perfil_usuario") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_perfil_usuario_c();
}

//VISUALIZAR PLANTILLA (PDF)
if (isset($_GET["accion"]) && $_GET["accion"] == "actividades_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_actividades_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "acudientes_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_acudientes_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "acudientexestudiante_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_acudientexestudiante_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "acuerdos_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_acuerdos_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "asignaturas_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_asignaturas_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "calificaciones_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_calificaciones_pdf_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "centroseducativos_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_centroseducativos_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "controlasistencias_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_controlasistencias_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "cursos_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_cursos_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "directora_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_directora_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "docentes_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_docentes_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "docentexsede_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_docentexsede_pdf_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "estudiantes_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_estudiantes_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "grados_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_grados_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "matriculas_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_matriculas_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "observador_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_observador_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "personas_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_personas_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "salones_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_salones_pdf_c();
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sedes_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_sedes_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "sueldos_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_sueldos_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "tipoactividades_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_tipoactividades_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "tipofaltas_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_tipofaltas_pdf_c();
}

if (isset($_GET["accion"]) && $_GET["accion"] == "usuarios_pdf") {
    $controlador = new FuncionesControlador();
    $controlador->obtener_usuarios_pdf_c();
}


//VISUALIZAR VISTAS CRUD (INSERTAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "actividades_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/actividades/actividades_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acudientes_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/acudientes/acudientes_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acudientexestudiante_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/acudientexestudiante/acudientexestudiante_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acuerdos_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/acuerdos/acuerdos_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "asignaturas_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/asignaturas/asignaturas_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "calificaciones_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/calificaciones/calificaciones_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "centroseducativos_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/centroseducativos/centroseducativos_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "controlasistencias_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/controlasistencias/controlasistencias_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "cursos_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/cursos/cursos_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "directora_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/directora/directora_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "docentes_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/docentes/docentes_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "docentexsede_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/docentexsede/docentexsede_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "estudiantes_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/estudiantes/estudiantes_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "grados_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/grados/grados_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "matriculas_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/matriculas/matriculas_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "observador_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/observador/observador_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "personas_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/personas/personas_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "salones_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/salones/salones_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sedes_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/sedes/sedes_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sueldos_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/sueldos/sueldos_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "tipoactividades_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/tipoactividades/tipoactividades_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "tipofaltas_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/tipofaltas/tipofaltas_insertar.php');
}
if (isset($_GET["accion"]) && $_GET["accion"] == "usuarios_insertar") {
    $controlador = new Controlador();
    $controlador->verPagina('../Vista/html/app/crud/usuarios/usuarios_insertar.php');
}


//VISUALIZAR VISTAS CRUD (CONSULTAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "actividades_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->actividades_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acudientes_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->acudientes_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acudientexestudiante_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->acudientexestudiante_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acuerdos_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->acuerdos_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "asignaturas_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->asignaturas_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "calificaciones_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->calificaciones_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "centroseducativos_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->centroseducativos_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "controlasistencias_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->controlasistencias_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "cursos_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->cursos_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "directora_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->directora_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "docentes_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->docentes_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "docentexsede_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->docentexsede_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}if (isset($_GET["accion"]) && $_GET["accion"] == "estudiantes_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->estudiantes_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "grados_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->grados_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "matriculas_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->matriculas_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "observador_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->observador_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "personas_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->personas_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}if (isset($_GET["accion"]) && $_GET["accion"] == "salones_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->salones_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sedes_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->sedes_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sueldos_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->sueldos_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "tipoactividades_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->tipoactividades_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "tipofaltas_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->tipofaltas_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "usuarios_consultar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->usuarios_consultar_id_c($id);
    } else {
        echo 'ERROR AL CONSULTAR';
    }
}


//VISUALIZAR VISTAS CRUD (ACTUALIZAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "actividades_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->actividades_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acudientes_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->acudientes_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acudientexestudiante_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->acudientexestudiante_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "acuerdos_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->acuerdos_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "asignaturas_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->asignaturas_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "calificaciones_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->calificaciones_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "centroseducativos_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->centroseducativos_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "controlasistencias_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->controlasistencias_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "cursos_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->cursos_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "directora_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->directora_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "docentes_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->docentes_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "docentexsede_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->docentexsede_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}if (isset($_GET["accion"]) && $_GET["accion"] == "estudiantes_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->estudiantes_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "grados_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->grados_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "matriculas_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->matriculas_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "observador_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->observador_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "personas_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->personas_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}if (isset($_GET["accion"]) && $_GET["accion"] == "salones_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->salones_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sedes_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->sedes_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "sueldos_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->sueldos_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "tipoactividades_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->tipoactividades_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "tipofaltas_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->tipofaltas_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}
if (isset($_GET["accion"]) && $_GET["accion"] == "usuarios_actualizar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $_GET['id'];
        $controlador = new FuncionesControlador();
        $controlador->usuarios_actualizar_id_c($id);
    } else {
        echo 'ERROR AL ACTUALIZAR';
    }
}


//VISUALIZAR VISTAS CRUD (ELIMINAR)
if (isset($_GET["accion"]) && $_GET["accion"] == "actividades_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/actividades/actividades_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_actividades' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->eliminar_actividades_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "acudientes_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/acudientes/acudientes_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_acudientes' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->acudientes_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "acudientexestudiante_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/acudientexestudiante/acudientexestudiante_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_acudientexestudiante' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->acudientexestudiante_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "acuerdos_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/acuerdos/acuerdos_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_acuerdos' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->acuerdos_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "asignaturas_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/asignaturas/asignaturas_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_asignaturas' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->asignaturas_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "calificaciones_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/calificaciones/calificaciones_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_calificaciones' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->calificaciones_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "centroseducativos_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/centroseducativos/centroseducativos_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_centroseducativos' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->centroseducativos_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "controlasistencias_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/controlasistencias/controlasistencias_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_controlasistencias' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->controlasistencias_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "cursos_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/cursos/cursos_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_cursos' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->cursos_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "directora_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/directora/directora_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_directora' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->directora_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "docentes_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/docentes/docentes_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_docentes' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->docentes_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "docentexsede_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/docentexsede/docentexsede_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_docentexsede' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->docentexsede_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "estudiantes_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/estudiantes/estudiantes_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_estudiantes' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->estudiantes_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "grados_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/grados/grados_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_grados' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->grados_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "matriculas_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/matriculas/matriculas_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_matriculas' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->matriculas_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "observador_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/observador/observador_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_observador' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->observador_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "personas_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/personas/personas_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_personas' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->personas_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "salones_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/salones/salones_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_salones' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->salones_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "sedes_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/sedes/sedes_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_sedes' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->sedes_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "sueldos_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/sueldos/sueldos_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_sueldos' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->sueldos_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "tipoactividades_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/tipoactividades/tipoactividades_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_tipoactividades' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->tipoactividades_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "tipofaltas_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/tipofaltas/tipofaltas_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_tipofaltas' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->tipofaltas_eliminar_id_c($_POST['id']);
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] == "usuarios_eliminar") {
    if (isset($_GET['id']) && $_GET['id'] != '') {
        include '../Vista/html/app/crud/usuarios/usuarios_eliminar.php';
    } else {
        echo 'ERROR: ID no válido';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar_usuarios' && isset($_POST['id'])) {
        $controlador = new FuncionesControlador();
        $controlador->usuarios_eliminar_id_c($_POST['id']);
    }
}

//FUNCIONES CRUD (INSERTAR)
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_actividades") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_actividades_c($_POST['codigo'], $_POST['fecha'], $_POST['bimestre'], $_POST['asignatura'], $_POST['tipoactividad']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_acudientes") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_acudientes_c($_POST['codigo'], $_POST['identificacion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_acudientexestudiante") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_acudientexestudiante_c($_POST['codigo'], $_POST['acudiente'], $_POST['estudiante']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_acuerdos") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_acuerdos_c($_POST['codigo'], $_POST['tipo'], $_POST['observacion'], $_POST['observador']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_asignaturas") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_asignaturas_c($_POST['codigo'], $_POST['nombre'], $_POST['grado']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_calificaciones") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_calificaciones_c($_POST['codigo'], $_POST['fecha'], $_POST['valor'], $_POST['docente'], $_POST['actividad'], $_POST['estudiante']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_centroseducativos") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_centroseducativos_c($_POST['codigo'], $_POST['nit'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_controlasistencias") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_controlasistencias_c($_POST['codigo'], $_POST['fecha'], $_POST['estado'], $_POST['bimestre'], $_POST['observacion'], $_POST['estudiante'], $_POST['docente']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_cursos") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_cursos_c($_POST['codigo'], $_POST['nombre'], $_POST['sede'], $_POST['salon']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_directora") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_directora_c($_POST['codigo'], $_POST['identificacion'], $_POST['centroeducativo'], $_POST['sueldo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_docentes") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_docentes_c($_POST['codigo'], $_POST['fechaingreso'], $_POST['vigencia'], $_POST['sueldo'], $_POST['identificacion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_docentexsede") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_docentexsede_c($_POST['codigo'], $_POST['docente'], $_POST['sede']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_estudiantes") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_estudiantes_c($_POST['identificacion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_grados") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_grados_c($_POST['codigo'], $_POST['nombre']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_matriculas") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_matriculas_c($_POST['numero'], $_POST['fecha'], $_POST['vigencia'], $_POST['estudiante'], $_POST['sede'], $_POST['grado'], $_POST['curso']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_observador") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_observador_c($_POST['codigo'], $_POST['fecha'], $_POST['bimestre'], $_POST['observacion'], $_POST['tipofalta'], $_POST['estudiante'], $_POST['docente']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_personas") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_personas_c($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['rol'], $_POST['genero'], $_POST['fechanacimiento'], $_POST['direccion'], $_POST['telefono'], $_POST['correo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_salones") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_salones_c($_POST['codigo'], $_POST['nombre'], $_POST['sede']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_sedes") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_sedes_c($_POST['codigo'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['centroeducativo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_sueldos") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_sueldos_c($_POST['codigo'], $_POST['categoria'], $_POST['valor']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_tipoactividades") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_tipoactividades_c($_POST['codigo'], $_POST['nombre'], $_POST['descripcion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_tipofaltas") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_tipofaltas_c($_POST['codigo'], $_POST['nombre'], $_POST['descripcion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "insertar_usuarios") {
    $controlador = new FuncionesControlador();
    $controlador->insertar_usuarios_c($_POST['identificacion'], $_POST['nombre'], $_POST['contrasena']);
}


//FUNCIONES CRUD (ACTUALIZAR)
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_actividades") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_actividades_id_c($_POST['codigo'], $_POST['fecha'], $_POST['bimestre'], $_POST['asignatura'], $_POST['tipoactividad']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_acudientes") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_acudientes_id_c($_POST['codigo'], $_POST['identificacion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_acudientexestudiante") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_acudientexestudiante_id_c($_POST['codigo'], $_POST['acudiente'], $_POST['estudiante']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_acuerdos") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_acuerdos_id_c($_POST['codigo'], $_POST['tipo'], $_POST['observacion'], $_POST['observador']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_asignaturas") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_asignaturas_id_c($_POST['codigo'], $_POST['nombre'], $_POST['grado']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_calificaciones") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_calificaciones_id_c($_POST['codigo'], $_POST['fecha'], $_POST['valor'], $_POST['docente'], $_POST['actividad'], $_POST['estudiante']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_centroseducativos") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_centroseducativos_id_c($_POST['codigo'], $_POST['nit'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_controlasistencias") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_controlasistencias_id_c($_POST['codigo'], $_POST['fecha'], $_POST['estado'], $_POST['bimestre'], $_POST['observacion'], $_POST['estudiante'], $_POST['docente']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_cursos") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_cursos_id_c($_POST['codigo'], $_POST['nombre'], $_POST['sede'], $_POST['salon']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_directora") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_directora_id_c($_POST['codigo'], $_POST['identificacion'], $_POST['centroeducativo'], $_POST['sueldo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_docentes") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_docentes_id_c($_POST['codigo'], $_POST['fechaingreso'], $_POST['vigencia'], $_POST['sueldo'], $_POST['identificacion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_docentexsede") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_docentexsede_id_c($_POST['codigo'], $_POST['docente'], $_POST['sede']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_estudiantes") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_estudiantes_id_c($_POST['codigo'], $_POST['identificacion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_grados") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_grados_id_c($_POST['codigo'], $_POST['nombre']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_matriculas") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_matriculas_id_c($_POST['codigo'], $_POST['numero'], $_POST['fecha'], $_POST['vigencia'], $_POST['estudiante'], $_POST['sede'], $_POST['grado'], $_POST['curso']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_observador") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_observador_id_c($_POST['codigo'], $_POST['fecha'], $_POST['bimestre'], $_POST['observacion'], $_POST['tipofalta'], $_POST['estudiante'], $_POST['docente']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_personas") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_personas_id_c($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['rol'], $_POST['genero'], $_POST['fechanacimiento'], $_POST['direccion'], $_POST['telefono'], $_POST['correo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_salones") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_salones_id_c($_POST['codigo'], $_POST['nombre'], $_POST['sede']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_sedes") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_sedes_id_c($_POST['codigo'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['centroeducativo']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_sueldos") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_sueldos_id_c($_POST['categoria'], $_POST['valor']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_tipoactividades") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_tipoactividades_id_c($_POST['codigo'], $_POST['nombre'], $_POST['descripcion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_tipofaltas") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_tipofaltas_id_c($_POST['codigo'], $_POST['nombre'], $_POST['descripcion']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "actualizar_usuarios") {
    $controlador = new FuncionesControlador();
    $controlador->actualizar_usuarios_id_c($_POST['identificacion'], $_POST['nombre'], $_POST['contrasena']);
}


//FUNCIONES CRUD (ELIMINAR)
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_actividades") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_actividades_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_acudientes") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_acudientes_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_acudientexestudiante") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_acudientexestudiante_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_acuerdos") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_acuerdos_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_asignaturas") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_asignaturas_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_calificaciones") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_calificaciones_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_centroseducativos") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_centroseducativos_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_controlasistencias") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_controlasistencias_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_cursos") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_cursos_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_directora") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_directora_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_docentes") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_docentes_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_docentexsede") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_docentexsede_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_estudiantes") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_estudiantes_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_grados") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_grados_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_matriculas") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_matriculas_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_observador") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_observador_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_personas") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_personas_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_salones") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_salones_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_sedes") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_sedes_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_sueldos") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_sueldos_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_tipoactividades") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_tipoactividades_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_tipofaltas") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_tipofaltas_id_c($_POST['id']);
}
if (isset($_POST["accion"]) && $_POST["accion"] == "eliminar_usuarios") {
    $controlador = new FuncionesControlador();
    $controlador->eliminar_usuarios_id_c($_POST['id']);
}
?>