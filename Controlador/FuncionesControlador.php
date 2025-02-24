<?php

require_once '../Modelo/FuncionesModelo.php';
require_once '../Modelo/ActividadesModelo.php';
require_once '../Modelo/AcudientesModelo.php';
require_once '../Modelo/AcudientexestudianteModelo.php';
require_once '../Modelo/AcuerdosModelo.php';
require_once '../Modelo/AsignaturasModelo.php';
require_once '../Modelo/CalificacionesModelo.php';
require_once '../Modelo/CentroseducativosModelo.php';
require_once '../Modelo/ControlasistenciasModelo.php';
require_once '../Modelo/CursosModelo.php';
require_once '../Modelo/DirectoraModelo.php';
require_once '../Modelo/DocentesModelo.php';
require_once '../Modelo/DocentexsedeModelo.php';
require_once '../Modelo/EstudiantesModelo.php';
require_once '../Modelo/GradosModelo.php';
require_once '../Modelo/MatriculasModelo.php';
require_once '../Modelo/ObservadorModelo.php';
require_once '../Modelo/PersonasModelo.php';
require_once '../Modelo/SalonesModelo.php';
require_once '../Modelo/SedesModelo.php';
require_once '../Modelo/SueldosModelo.php';
require_once '../Modelo/TipoactividadesModelo.php';
require_once '../Modelo/TipofaltasModelo.php';
require_once '../Modelo/UsuariosModelo.php';
require_once '../Vista/librerias/fpdf/fpdf.php';

class FuncionesControlador extends FuncionesModelo {

    public function obtener_vista_cuenta() {
        require_once '../Vista/html/web/cuenta.php';
    }

    public function obtener_vista_aplicacion() {
        require_once '../Vista/html/app/aplicacion.php';
    }

    //FUNCIONES DE INICIAR & CERRAR SESIÓN
    public function iniciar_sesion($Usunombre, $Usucontrasena) {
        $this->usunombre = $Usunombre;
        $this->usucontrasena = $Usucontrasena;
        $usuario = $this->consultar_usuario();
        if ($usuario == "sindatos") {
            echo '<script>
            alert ("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "Controlador.php?accion=cuenta";
        </script>';
        } else {
            $this->obtener_vista_aplicacion();
        }
    }

    public function cerrar_sesion() {
        session_start();
        session_unset();
        session_destroy();
        $this->obtener_vista_cuenta();
    }

    //FUNCIONES CRUD (TABLAS)
    public function obtener_actividades_c() {
        $actividades = new FuncionesModelo();
        $datos = $actividades->obtener_actividades_m();
        require_once '../Vista/html/app/crud/actividades/actividades.php';
    }

    public function obtener_acudientes_c() {
        $acudientes = new FuncionesModelo();
        $datos = $acudientes->obtener_acudientes_m();
        require_once '../Vista/html/app/crud/acudientes/acudientes.php';
    }

    public function obtener_acudientexestudiante_c() {
        $acudientexestudiante = new FuncionesModelo();
        $datos = $acudientexestudiante->obtener_acudientexestudiante_m();
        require_once '../Vista/html/app/crud/acudientexestudiante/acudientexestudiante.php';
    }

    public function obtener_acuerdos_c() {
        $acuerdos = new FuncionesModelo();
        $datos = $acuerdos->obtener_acuerdos_m();
        require_once '../Vista/html/app/crud/acuerdos/acuerdos.php';
    }

    public function obtener_asignaturas_c() {
        $asignaturas = new FuncionesModelo();
        $datos = $asignaturas->obtener_asignaturas_m();
        require_once '../Vista/html/app/crud/asignaturas/asignaturas.php';
    }

    public function obtener_calificaciones_c() {
        $calificaciones = new FuncionesModelo();
        $datos = $calificaciones->obtener_calificaciones_m();
        require_once '../Vista/html/app/crud/calificaciones/calificaciones.php';
    }

    public function obtener_centroseducativos_c() {
        $centroseducativos = new FuncionesModelo();
        $datos = $centroseducativos->obtener_centroseducativos_m();
        require_once '../Vista/html/app/crud/centroseducativos/centroseducativos.php';
    }

    public function obtener_controlasistencias_c() {
        $controlasistencias = new FuncionesModelo();
        $datos = $controlasistencias->obtener_controlasistencias_m();
        require_once '../Vista/html/app/crud/controlasistencias/controlasistencias.php';
    }

    public function obtener_cursos_c() {
        $cursos = new FuncionesModelo();
        $datos = $cursos->obtener_cursos_m();
        require_once '../Vista/html/app/crud/cursos/cursos.php';
    }

    public function obtener_directora_c() {
        $directora = new FuncionesModelo();
        $datos = $directora->obtener_directora_m();
        require_once '../Vista/html/app/crud/directora/directora.php';
    }

    public function obtener_docentes_c() {
        $docentes = new FuncionesModelo();
        $datos = $docentes->obtener_docentes_m();
        require_once '../Vista/html/app/crud/docentes/docentes.php';
    }

    public function obtener_docentexsede_c() {
        $docentexsede = new FuncionesModelo();
        $datos = $docentexsede->obtener_docentexsede_m();
        require_once '../Vista/html/app/crud/docentexsede/docentexsede.php';
    }

    public function obtener_estudiantes_c() {
        $estudiantes = new FuncionesModelo();
        $datos = $estudiantes->obtener_estudiantes_m();
        require_once '../Vista/html/app/crud/estudiantes/estudiantes.php';
    }

    public function obtener_grados_c() {
        $grados = new FuncionesModelo();
        $datos = $grados->obtener_grados_m();
        require_once '../Vista/html/app/crud/grados/grados.php';
    }

    public function obtener_matriculas_c() {
        $matriculas = new FuncionesModelo();
        $datos = $matriculas->obtener_matriculas_m();
        require_once '../Vista/html/app/crud/matriculas/matriculas.php';
    }

    public function obtener_observador_c() {
        $observador = new FuncionesModelo();
        $datos = $observador->obtener_observador_m();
        require_once '../Vista/html/app/crud/observador/observador.php';
    }

    public function obtener_personas_c() {
        $personas = new FuncionesModelo();
        $datos = $personas->obtener_personas_m();
        require_once '../Vista/html/app/crud/personas/personas.php';
    }

    public function obtener_salones_c() {
        $salones = new FuncionesModelo();
        $datos = $salones->obtener_salones_m();
        require_once '../Vista/html/app/crud/salones/salones.php';
    }

    public function obtener_sedes_c() {
        $sedes = new FuncionesModelo();
        $datos = $sedes->obtener_sedes_m();
        require_once '../Vista/html/app/crud/sedes/sedes.php';
    }

    public function obtener_sueldos_c() {
        $sueldos = new FuncionesModelo();
        $datos = $sueldos->obtener_sueldos_m();
        require_once '../Vista/html/app/crud/sueldos/sueldos.php';
    }

    public function obtener_tipoactividades_c() {
        $tipoactividades = new FuncionesModelo();
        $datos = $tipoactividades->obtener_tipoactividades_m();
        require_once '../Vista/html/app/crud/tipoactividades/tipoactividades.php';
    }

    public function obtener_tipofaltas_c() {
        $tipofaltas = new FuncionesModelo();
        $datos = $tipofaltas->obtener_tipofaltas_m();
        require_once '../Vista/html/app/crud/tipofaltas/tipofaltas.php';
    }

    public function obtener_usuarios_c() {
        $usuarios = new FuncionesModelo();
        $datos = $usuarios->obtener_usuarios_m();
        require_once '../Vista/html/app/crud/usuarios/usuarios.php';
    }

    //VISUALIZAR PLANTILLA (PDF)
    public function obtener_actividades_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_actividades_pdf_m();
        require_once '../Vista/html/app/crud/actividades/actividades_pdf.php';
    }

    public function obtener_acudientes_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_acudientes_pdf_m();
        require_once '../Vista/html/app/crud/acudientes/acudientes_pdf.php';
    }

    public function obtener_acudientexestudiante_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_acudientexestudiante_pdf_m();
        require_once '../Vista/html/app/crud/acudientexestudiante/acudientexestudiante_pdf.php';
    }

    public function obtener_acuerdos_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_acuerdos_pdf_m();
        require_once '../Vista/html/app/crud/acuerdos/acuerdos_pdf.php';
    }

    public function obtener_asignaturas_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_asignaturas_pdf_m();
        require_once '../Vista/html/app/crud/asignaturas/asignaturas_pdf.php';
    }

    public function obtener_calificaciones_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_calificaciones_pdf_m();
        require_once '../Vista/html/app/crud/calificaciones/calificaciones_pdf.php';
    }

    public function obtener_centroseducativos_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_centroseducativos_pdf_m();
        require_once '../Vista/html/app/crud/centroseducativos/centroseducativos_pdf.php';
    }

    public function obtener_controlasistencias_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_controlasistencias_pdf_m();
        require_once '../Vista/html/app/crud/controlasistencias/controlasistencias_pdf.php';
    }

    public function obtener_cursos_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_cursos_pdf_m();
        require_once '../Vista/html/app/crud/cursos/cursos_pdf.php';
    }

    public function obtener_directora_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_directora_pdf_m();
        require_once '../Vista/html/app/crud/directora/directora_pdf.php';
    }

    public function obtener_docentes_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_docentes_pdf_m();
        require_once '../Vista/html/app/crud/docentes/docentes_pdf.php';
    }

    public function obtener_docentexsede_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_docentexsede_pdf_m();
        require_once '../Vista/html/app/crud/docentexsede/docentexsede_pdf.php';
    }

    public function obtener_estudiantes_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_estudiantes_pdf_m();
        require_once '../Vista/html/app/crud/estudiantes/estudiantes_pdf.php';
    }

    public function obtener_grados_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_grados_pdf_m();
        require_once '../Vista/html/app/crud/grados/grados_pdf.php';
    }

    public function obtener_matriculas_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_matriculas_pdf_m();
        require_once '../Vista/html/app/crud/matriculas/matriculas_pdf.php';
    }

    public function obtener_observador_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_observador_pdf_m();
        require_once '../Vista/html/app/crud/observador/observador_pdf.php';
    }

    public function obtener_personas_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_personas_pdf_m();
        require_once '../Vista/html/app/crud/personas/personas_pdf.php';
    }

    public function obtener_salones_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_salones_pdf_m();
        require_once '../Vista/html/app/crud/salones/salones_pdf.php';
    }

    public function obtener_sedes_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_sedes_pdf_m();
        require_once '../Vista/html/app/crud/sedes/sedes_pdf.php';
    }

    public function obtener_sueldos_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_sueldos_pdf_m();
        require_once '../Vista/html/app/crud/sueldos/sueldos_pdf.php';
    }

    public function obtener_tipoactividades_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_tipoactividades_pdf_m();
        require_once '../Vista/html/app/crud/tipoactividades/tipoactividades_pdf.php';
    }

    public function obtener_tipofaltas_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_tipofaltas_pdf_m();
        require_once '../Vista/html/app/crud/tipofaltas/tipofaltas_pdf.php';
    }

    public function obtener_usuarios_pdf_c() {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->obtener_usuarios_pdf_m();
        require_once '../Vista/html/app/crud/usuarios/usuarios_pdf.php';
    }

    //VISUALIZAR VISTAS CRUD (CONSULTAR)
    public function actividades_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_actividades_id_m($id);
        require_once '../Vista/html/app/crud/actividades/actividades_consultar.php';
    }

    public function acudientes_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_acudientes_id_m($id);
        require_once '../Vista/html/app/crud/acudientes/acudientes_consultar.php';
    }

    public function acudientexestudiante_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_acudientexestudiante_id_m($id);
        require_once '../Vista/html/app/crud/acudientexestudiante/acudientexestudiante_consultar.php';
    }

    public function acuerdos_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_acuerdos_id_m($id);
        require_once '../Vista/html/app/crud/acuerdos/acuerdos_consultar.php';
    }

    public function asignaturas_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_asignaturas_id_m($id);
        require_once '../Vista/html/app/crud/asignaturas/asignaturas_consultar.php';
    }

    public function calificaciones_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_calificaciones_id_m($id);
        require_once '../Vista/html/app/crud/calificaciones/calificaciones_consultar.php';
    }

    public function centroseducativos_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_centroseducativos_id_m($id);
        require_once '../Vista/html/app/crud/centroseducativos/centroseducativos_consultar.php';
    }

    public function controlasistencias_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_controlasistencias_id_m($id);
        require_once '../Vista/html/app/crud/controlasistencias/controlasistencias_consultar.php';
    }

    public function cursos_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_cursos_id_m($id);
        require_once '../Vista/html/app/crud/cursos/cursos_consultar.php';
    }

    public function directora_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_directora_id_m($id);
        require_once '../Vista/html/app/crud/directora/directora_consultar.php';
    }

    public function docentes_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_docentes_id_m($id);
        require_once '../Vista/html/app/crud/docentes/docentes_consultar.php';
    }

    public function docentexsede_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_docentexsede_id_m($id);
        require_once '../Vista/html/app/crud/docentexsede/docentexsede_consultar.php';
    }

    public function estudiantes_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_estudiantes_id_m($id);
        require_once '../Vista/html/app/crud/estudiantes/estudiantes_consultar.php';
    }

    public function grados_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_grados_id_m($id);
        require_once '../Vista/html/app/crud/grados/grados_consultar.php';
    }

    public function matriculas_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_matriculas_id_m($id);
        require_once '../Vista/html/app/crud/matriculas/matriculas_consultar.php';
    }

    public function observador_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_observador_id_m($id);
        require_once '../Vista/html/app/crud/observador/observador_consultar.php';
    }

    public function personas_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_personas_id_m($id);
        require_once '../Vista/html/app/crud/personas/personas_consultar.php';
    }

    public function salones_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_salones_id_m($id);
        require_once '../Vista/html/app/crud/salones/salones_consultar.php';
    }

    public function sedes_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_sedes_id_m($id);
        require_once '../Vista/html/app/crud/sedes/sedes_consultar.php';
    }

    public function sueldos_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_sueldos_id_m($id);
        require_once '../Vista/html/app/crud/sueldos/sueldos_consultar.php';
    }

    public function tipoactividades_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_tipoactividades_id_m($id);
        require_once '../Vista/html/app/crud/tipoactividades/tipoactividades_consultar.php';
    }

    public function tipofaltas_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_tipofaltas_id_m($id);
        require_once '../Vista/html/app/crud/tipofaltas/tipofaltas_consultar.php';
    }

    public function usuarios_consultar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_usuarios_id_m($id);
        require_once '../Vista/html/app/crud/usuarios/usuarios_consultar.php';
    }

    //VISUALIZAR VISTAS CRUD (ACTUALIZAR)
    public function actividades_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_actividades_id_m($id);
        require_once '../Vista/html/app/crud/actividades/actividades_actualizar.php';
    }

    public function acudientes_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_acudientes_id_m($id);
        require_once '../Vista/html/app/crud/acudientes/acudientes_actualizar.php';
    }

    public function acudientexestudiante_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_acudientexestudiante_id_m($id);
        require_once '../Vista/html/app/crud/acudientexestudiante/acudientexestudiante_actualizar.php';
    }

    public function acuerdos_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_acuerdos_id_m($id);
        require_once '../Vista/html/app/crud/acuerdos/acuerdos_actualizar.php';
    }

    public function asignaturas_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_asignaturas_id_m($id);
        require_once '../Vista/html/app/crud/asignaturas/asignaturas_actualizar.php';
    }

    public function calificaciones_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_calificaciones_id_m($id);
        require_once '../Vista/html/app/crud/calificaciones/calificaciones_actualizar.php';
    }

    public function centroseducativos_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_centroseducativos_id_m($id);
        require_once '../Vista/html/app/crud/centroseducativos/centroseducativos_actualizar.php';
    }

    public function controlasistencias_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_controlasistencias_id_m($id);
        require_once '../Vista/html/app/crud/controlasistencias/controlasistencias_actualizar.php';
    }

    public function cursos_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_cursos_id_m($id);
        require_once '../Vista/html/app/crud/cursos/cursos_actualizar.php';
    }

    public function directora_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_directora_id_m($id);
        require_once '../Vista/html/app/crud/directora/directora_actualizar.php';
    }

    public function docentes_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_docentes_id_m($id);
        require_once '../Vista/html/app/crud/docentes/docentes_actualizar.php';
    }

    public function docentexsede_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_docentexsede_id_m($id);
        require_once '../Vista/html/app/crud/docentexsede/docentexsede_actualizar.php';
    }

    public function estudiantes_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_estudiantes_id_m($id);
        require_once '../Vista/html/app/crud/estudiantes/estudiantes_actualizar.php';
    }

    public function grados_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_grados_id_m($id);
        require_once '../Vista/html/app/crud/grados/grados_actualizar.php';
    }

    public function matriculas_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_matriculas_id_m($id);
        require_once '../Vista/html/app/crud/matriculas/matriculas_actualizar.php';
    }

    public function observador_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_observador_id_m($id);
        require_once '../Vista/html/app/crud/observador/observador_actualizar.php';
    }

    public function personas_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_personas_id_m($id);
        require_once '../Vista/html/app/crud/personas/personas_actualizar.php';
    }

    public function salones_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_salones_id_m($id);
        require_once '../Vista/html/app/crud/salones/salones_actualizar.php';
    }

    public function sedes_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_sedes_id_m($id);
        require_once '../Vista/html/app/crud/sedes/sedes_actualizar.php';
    }

    public function sueldos_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_sueldos_id_m($id);
        require_once '../Vista/html/app/crud/sueldos/sueldos_actualizar.php';
    }

    public function tipoactividades_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_tipoactividades_id_m($id);
        require_once '../Vista/html/app/crud/tipoactividades/tipoactividades_actualizar.php';
    }

    public function tipofaltas_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_tipofaltas_id_m($id);
        require_once '../Vista/html/app/crud/tipofaltas/tipofaltas_actualizar.php';
    }

    public function usuarios_actualizar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->consultar_usuarios_id_m($id);
        require_once '../Vista/html/app/crud/usuarios/usuarios_actualizar.php';
    }

    //VISUALIZAR VISTAS CRUD (ELIMINAR)
    public function actividades_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_actividades_id_m($id);
        require_once '../Vista/html/app/crud/actividades/actividades_eliminar.php';
    }

    public function acudientes_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_acudientes_id_m($id);
        require_once '../Vista/html/app/crud/acudientes/acudientes_eliminar.php';
    }

    public function acudientexestudiante_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_acudientexestudiante_id_m($id);
        require_once '../Vista/html/app/crud/acudientexestudiante/acudientexestudiante_eliminar.php';
    }

    public function acuerdos_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_acuerdos_id_m($id);
        require_once '../Vista/html/app/crud/acuerdos/acuerdos_eliminar.php';
    }

    public function asignaturas_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_asignaturas_id_m($id);
        require_once '../Vista/html/app/crud/asignaturas/asignaturas_eliminar.php';
    }

    public function calificaciones_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_calificaciones_id_m($id);
        require_once '../Vista/html/app/crud/calificaciones/calificaciones_eliminar.php';
    }

    public function centroseducativos_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_centroseducativos_id_m($id);
        require_once '../Vista/html/app/crud/centroseducativos/centroseducativos_eliminar.php';
    }

    public function controlasistencias_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_controlasistencias_id_m($id);
        require_once '../Vista/html/app/crud/controlasistencias/controlasistencias_eliminar.php';
    }

    public function cursos_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_cursos_id_m($id);
        require_once '../Vista/html/app/crud/cursos/cursos_eliminar.php';
    }

    public function directora_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_directora_id_m($id);
        require_once '../Vista/html/app/crud/directora/directora_eliminar.php';
    }

    public function docentes_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_docentes_id_m($id);
        require_once '../Vista/html/app/crud/docentes/docentes_eliminar.php';
    }

    public function docentexsede_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_docentexsede_id_m($id);
        require_once '../Vista/html/app/crud/docentexsede/docentexsede_eliminar.php';
    }

    public function estudiantes_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_estudiantes_id_m($id);
        require_once '../Vista/html/app/crud/estudiantes/estudiantes_eliminar.php';
    }

    public function grados_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_grados_id_m($id);
        require_once '../Vista/html/app/crud/grados/grados_eliminar.php';
    }

    public function matriculas_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_matriculas_id_m($id);
        require_once '../Vista/html/app/crud/matriculas/matriculas_eliminar.php';
    }

    public function observador_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_observador_id_m($id);
        require_once '../Vista/html/app/crud/observador/observador_eliminar.php';
    }

    public function personas_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_personas_id_m($id);
        require_once '../Vista/html/app/crud/personas/personas_eliminar.php';
    }

    public function salones_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_salones_id_m($id);
        require_once '../Vista/html/app/crud/salones/salones_eliminar.php';
    }

    public function sedes_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_sedes_id_m($id);
        require_once '../Vista/html/app/crud/sedes/sedes_eliminar.php';
    }

    public function sueldos_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_sueldos_id_m($id);
        require_once '../Vista/html/app/crud/sueldos/sueldos_eliminar.php';
    }

    public function tipoactividades_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_tipoactividades_id_m($id);
        require_once '../Vista/html/app/crud/tipoactividades/tipoactividades_eliminar.php';
    }

    public function tipofaltas_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_tipofaltas_id_m($id);
        require_once '../Vista/html/app/crud/tipofaltas/tipofaltas_eliminar.php';
    }

    public function usuarios_eliminar_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $datos = $funcion_m->eliminar_usuarios_id_m($id);
        require_once '../Vista/html/app/crud/usuarios/usuarios_eliminar.php';
    }

    //FUNCIONES CRUD (INSERTAR)
    public function insertar_actividades_c($cod_act, $fec_act, $bim_act, $cod_asi, $cod_tac) {
        $actividades_m = new ActividadesModelo(NULL, $fec_act, $bim_act, $cod_asi, $cod_tac);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_actividades_m($actividades_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_actividades";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=actividades_insertar";
        </script>';
        }
    }

    public function insertar_acudientes_c($cod_acu, $id_per) {
        $acudientes_m = new AcudientesModelo(NULL, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_acudientes_m($acudientes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=acudientes_insertar";
        </script>';
        }
    }

    public function insertar_acudientexestudiante_c($cod_axe, $cod_acu, $cod_est) {
        $acudientexestudiante_m = new AcudientexestudianteModelo($cod_axe, $cod_acu, $cod_est);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_acudientexestudiante_m($acudientexestudiante_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientexestudiante";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=acudientexestudiante_insertar";
        </script>';
        }
    }

    public function insertar_acuerdos_c($cod_acu, $tip_acu, $obs_acu, $cod_obs) {
        $acuerdos_m = new AcuerdosModelo($cod_acu, $tip_acu, $obs_acu, $cod_obs);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_acuerdos_m($acuerdos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acuerdos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=acuerdos_insertar";
        </script>';
        }
    }

    public function insertar_asignaturas_c($cod_asi, $nom_asi, $cod_gra) {
        $asignaturas_m = new AsignaturasModelo(NULL, $nom_asi, $cod_gra);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_asignaturas_m($asignaturas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_asignaturas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=asignaturas_insertar";
        </script>';
        }
    }

    public function insertar_calificaciones_c($cod_cal, $fec_cal, $val_cal, $cod_doc, $cod_act, $cod_est) {
        $calificaciones_m = new CalificacionesModelo($cod_cal, $fec_cal, $val_cal, $cod_doc, $cod_act, $cod_est);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_calificaciones_m($calificaciones_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_calificaciones";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=calificaciones_insertar";
        </script>';
        }
    }

    public function insertar_centroseducativos_c($cod_cen, $nit_cen, $nom_cen, $dir_cen, $tel_cen, $cor_cen) {
        $centroseducativos_m = new CentroseducativosModelo($cod_cen, $nit_cen, $nom_cen, $dir_cen, $tel_cen, $cor_cen);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_centroseducativos_m($centroseducativos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_centroseducativos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=centroseducativos_insertar";
        </script>';
        }
    }

    public function insertar_controlasistencias_c($cod_cas, $fec_cas, $est_cas, $bim_cas, $obs_cas, $cod_est, $cod_doc) {
        $controlasistencias_m = new ControlasistenciasModelo($cod_cas, $fec_cas, $est_cas, $bim_cas, $obs_cas, $cod_est, $cod_doc);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_controlasistencias_m($controlasistencias_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_controlasistencias";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=controlasistencias_insertar";
        </script>';
        }
    }

    public function insertar_cursos_c($cod_cur, $nom_cur, $cod_sed, $cod_sal, $cod_gra) {
        $cursos_m = new CursosModelo($cod_cur, $nom_cur, $cod_sed, $cod_sal, $cod_gra);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_cursos_m($cursos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_cursos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=cursos_insertar";
        </script>';
        }
    }

    public function insertar_directora_c($cod_dir, $id_per, $cod_cen, $cod_sue) {
        $directora_m = new DirectoraModelo(NULL, $id_per, $cod_cen, $cod_sue);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_directora_m($directora_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_directora";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=directora_insertar";
        </script>';
        }
    }

    public function insertar_docentes_c($cod_doc, $fec_doc, $vig_doc, $cod_sue, $id_per) {
        $docentes_m = new DocentesModelo(NULL, $fec_doc, $vig_doc, $cod_sue, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_docentes_m($docentes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=docentes_insertar";
        </script>';
        }
    }

    public function insertar_docentexsede_c($cod_dxs, $cod_doc, $cod_sed) {
        $docentexsede_m = new DocentexsedeModelo($cod_dxs, $cod_doc, $cod_sed);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_docentexsede_m($docentexsede_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentexsede";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=docentexsede_insertar";
        </script>';
        }
    }

    public function insertar_estudiantes_c($id_per) {
        $estudiantes_m = new EstudiantesModelo(NULL, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_estudiantes_m($estudiantes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_estudiantes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=estudiantes_insertar";
        </script>';
        }
    }

    public function insertar_grados_c($cod_gra, $nom_gra) {
        $grados_m = new GradosModelo($cod_gra, $nom_gra);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_grados_m($grados_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_grados";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=grados_insertar";
        </script>';
        }
    }

    public function insertar_matriculas_c($num_mat, $fec_mat, $vig_mat, $cod_est, $cod_sed, $cod_gra, $cod_cur) {
        $matriculas_m = new MatriculasModelo(NULL, $num_mat, $fec_mat, $vig_mat, $cod_est, $cod_sed, $cod_gra, $cod_cur);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_matriculas_m($matriculas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_matriculas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=matriculas_insertar";
        </script>';
        }
    }

    public function insertar_observador_c($cod_obs, $fec_obs, $bim_obs, $obs_obs, $cod_tfa, $cod_est, $cod_doc) {
        $observador_m = new ObservadorModelo($cod_obs, $fec_obs, $bim_obs, $obs_obs, $cod_tfa, $cod_est, $cod_doc);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_observador_m($observador_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_observador";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=observador_insertar";
        </script>';
        }
    }

    public function insertar_personas_c($id_per, $nom_per, $ape_per, $rol_per, $gen_per, $fec_per, $dir_per, $tel_per, $cor_per) {
        $personas_m = new PersonasModelo($id_per, $nom_per, $ape_per, $rol_per, $gen_per, $fec_per, $dir_per, $tel_per, $cor_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_personas_m($personas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_personas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=personas_insertar";
        </script>';
        }
    }

    public function insertar_salones_c($cod_sal, $nom_sal, $cod_sed) {
        $salones_m = new SalonesModelo(NULL, $cod_sal, $nom_sal, $cod_sed);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_salones_m($salones_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_salones";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=salones_insertar";
        </script>';
        }
    }

    public function insertar_sedes_c($cod_sed, $nom_sed, $dir_sed, $tel_sed, $cor_sed, $cod_cen) {
        $sedes_m = new SedesModelo(NULL, $nom_sed, $dir_sed, $tel_sed, $cor_sed, $cod_cen);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_sedes_m($sedes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sedes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=sedes_insertar";
        </script>';
        }
    }

    public function insertar_sueldos_c($cod_sue, $cat_sue, $val_sue) {
        $sueldos_m = new SueldosModelo(NULL, $cat_sue, $val_sue);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_sueldos_m($sueldos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sueldos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=sueldos_insertar";
        </script>';
        }
    }

    public function insertar_tipoactividades_c($cod_act, $nom_act, $des_act) {
        $tipoactividades_m = new TipoactividadesModelo(NULL, $nom_act, $des_act);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_tipoactividades_m($tipoactividades_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipoactividades";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=tipoactividades_insertar";
        </script>';
        }
    }

    public function insertar_tipofaltas_c($cod_tfa, $nom_tfa, $des_tfa) {
        $tipofaltas_m = new TipofaltasModelo(NULL, $nom_tfa, $des_tfa);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_tipofaltas_m($tipofaltas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipofaltas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=tipofaltas_insertar";
        </script>';
        }
    }

    public function insertar_usuarios_c($id_per, $nom_usu, $con_usu) {
        $usuarios_m = new UsuariosModelo(NULL, $nom_usu, $con_usu, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->insertar_usuarios_m($usuarios_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_usuarios";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron ingresados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=usuarios_insertar";
        </script>';
        }
    }

    //FUNCIONES CRUD (ACTUALIZAR)
    public function actualizar_actividades_id_c($cod_act, $fec_act, $bim_act, $cod_asi, $cod_tac) {
        $actividades_m = new ActividadesModelo(NULL, $fec_act, $bim_act, $cod_asi, $cod_tac);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_actividades_id_m($actividades_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_actividades";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=actividades_actualizar";
        </script>';
        }
    }

    public function actualizar_acudientes_id_c($cod_acu, $id_per) {
        $acudientes_m = new AcudientesModelo(NULL, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_acudientes_id_m($acudientes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=acudientes_actualizar";
        </script>';
        }
    }

    public function actualizar_acudientexestudiante_id_c($cod_axe, $cod_acu, $cod_est) {
        $acudientexestudiante_m = new AcudientexestudianteModelo($cod_axe, $cod_acu, $cod_est);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_acudientexestudiante_id_m($acudientexestudiante_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientexestudiante";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=acudientexestudiante_actualizar";
        </script>';
        }
    }

    public function actualizar_acuerdos_id_c($cod_acu, $tip_acu, $obs_acu, $cod_obs) {
        $acuerdos_m = new AcuerdosModelo($cod_acu, $tip_acu, $obs_acu, $cod_obs);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_acuerdos_id_m($acuerdos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acuerdos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=acuerdos_actualizar";
        </script>';
        }
    }

    public function actualizar_asignaturas_id_c($cod_asi, $nom_asi, $cod_gra) {
        $asignaturas_m = new AsignaturasModelo(NULL, $nom_asi, $cod_gra);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_asignaturas_id_m($asignaturas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_asignaturas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=asignaturas_actualizar";
        </script>';
        }
    }

    public function actualizar_calificaciones_id_c($cod_id_cal, $fec_id_cal, $val_id_cal, $cod_doc, $cod_act, $cod_est) {
        $calificaciones_m = new CalificacionesModelo($cod_id_cal, $fec_id_cal, $val_id_cal, $cod_doc, $cod_act, $cod_est);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_calificaciones_id_m($calificaciones_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_id_calificaciones";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=calificaciones_actualizar";
        </script>';
        }
    }

    public function actualizar_centroseducativos_id_c($cod_id_cen, $nit_id_cen, $nom_id_cen, $dir_id_cen, $tel_id_cen, $cor_id_cen) {
        $centroseducativos_m = new CentroseducativosModelo($cod_id_cen, $nit_id_cen, $nom_id_cen, $dir_id_cen, $tel_id_cen, $cor_id_cen);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_centroseducativos_id_m($centroseducativos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_id_centroseducativos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=centroseducativos_actualizar";
        </script>';
        }
    }

    public function actualizar_controlasistencias_id_c($cod_id_cas, $fec_id_cas, $est_id_cas, $bim_id_cas, $obs_id_cas, $cod_est, $cod_doc) {
        $controlasistencias_m = new ControlasistenciasModelo($cod_id_cas, $fec_id_cas, $est_id_cas, $bim_id_cas, $obs_id_cas, $cod_est, $cod_doc);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_controlasistencias_id_m($controlasistencias_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_controlasistencias";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=controlasistencias_actualizar";
        </script>';
        }
    }

    public function actualizar_cursos_id_c($cod_id_cur, $nom_id_cur, $cod_sed, $cod_sal, $cod_gra) {
        $cursos_m = new CursosModelo($cod_id_cur, $nom_id_cur, $cod_sed, $cod_sal, $cod_gra);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_cursos_id_m($cursos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_id_cursos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=cursos_actualizar";
        </script>';
        }
    }

    public function actualizar_directora_id_c($cod_dir, $id_per, $cod_id_cen, $cod_sue) {
        $directora_m = new DirectoraModelo(NULL, $id_per, $cod_id_cen, $cod_sue);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_directora_id_m($directora_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_directora";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=directora_actualizar";
        </script>';
        }
    }

    public function actualizar_docentes_id_c($cod_doc, $fec_doc, $vig_doc, $cod_sue, $id_per) {
        $docentes_m = new DocentesModelo(NULL, $fec_doc, $vig_doc, $cod_sue, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_docentes_id_m($docentes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=docentes_actualizar";
        </script>';
        }
    }

    public function actualizar_docentexsede_id_c($cod_dxs, $cod_doc, $cod_sed) {
        $docentexsede_m = new DocentexsedeModelo($cod_dxs, $cod_doc, $cod_sed);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_docentexsede_id_m($docentexsede_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentexsede";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=docentexsede_actualizar";
        </script>';
        }
    }

    public function actualizar_estudiantes_id_c($cod_est, $id_per) {
        $estudiantes_m = new EstudiantesModelo(NULL, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_estudiantes_id_m($estudiantes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_estudiantes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=estudiantes_actualizar";
        </script>';
        }
    }

    public function actualizar_grados_id_c($cod_gra, $nom_gra) {
        $grados_m = new GradosModelo($cod_gra, $nom_gra);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_grados_id_m($grados_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_grados";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=grados_actualizar";
        </script>';
        }
    }

    public function actualizar_matriculas_id_c($cod_mat, $num_mat, $fec_mat, $vig_mat, $cod_est, $cod_sed, $cod_gra, $cod_id_cur) {
        $matriculas_m = new MatriculasModelo(NULL, $num_mat, $fec_mat, $vig_mat, $cod_est, $cod_sed, $cod_gra, $cod_id_cur);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_matriculas_id_m($matriculas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_matriculas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=matriculas_actualizar";
        </script>';
        }
    }

    public function actualizar_observador_id_c($cod_obs, $fec_obs, $bim_obs, $obs_obs, $cod_tfa, $cod_est, $cod_doc) {
        $observador_m = new ObservadorModelo($cod_obs, $fec_obs, $bim_obs, $obs_obs, $cod_tfa, $cod_est, $cod_doc);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_observador_id_m($observador_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_observador";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=observador_actualizar";
        </script>';
        }
    }

    public function actualizar_personas_id_c($id_per, $nom_per, $ape_per, $rol_per, $gen_per, $fec_per, $dir_per, $tel_per, $cor_per) {
        $personas_m = new PersonasModelo($id_per, $nom_per, $ape_per, $rol_per, $gen_per, $fec_per, $dir_per, $tel_per, $cor_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_personas_id_m($personas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_personas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=personas_actualizar";
        </script>';
        }
    }

    public function actualizar_salones_id_c($cod_sal, $nom_sal, $cod_sed) {
        $salones_m = new SalonesModelo(NULL, $cod_sal, $nom_sal, $cod_sed);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_salones_id_m($salones_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_salones";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=salones_actualizar";
        </script>';
        }
    }

    public function actualizar_sedes_id_c($cod_sed, $nom_sed, $dir_sed, $tel_sed, $cor_sed, $cod_id_cen) {
        $sedes_m = new SedesModelo(NULL, $nom_sed, $dir_sed, $tel_sed, $cor_sed, $cod_id_cen);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_sedes_id_m($sedes_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sedes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=sedes_actualizar";
        </script>';
        }
    }

    public function actualizar_sueldos_id_c($cat_sue, $val_sue) {
        $sueldos_m = new SueldosModelo(NULL, $cat_sue, $val_sue);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_sueldos_id_m($sueldos_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sueldos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=sueldos_actualizar";
        </script>';
        }
    }

    public function actualizar_tipoactividades_id_c($cod_act, $nom_act, $des_act) {
        $tipoactividades_m = new TipoactividadesModelo(NULL, $nom_act, $des_act);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_tipoactividades_id_m($tipoactividades_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipoactividades";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=tipoactividades_actualizar";
        </script>';
        }
    }

    public function actualizar_tipofaltas_id_c($cod_tfa, $nom_tfa, $des_tfa) {
        $tipofaltas_m = new TipofaltasModelo(NULL, $nom_tfa, $des_tfa);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_tipofaltas_id_m($tipofaltas_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipofaltas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=tipofaltas_actualizar";
        </script>';
        }
    }

    public function actualizar_usuarios_id_c($id_per, $nom_usu, $con_usu) {
        $usuarios_m = new UsuariosModelo(NULL, $nom_usu, $con_usu, $id_per);
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->actualizar_usuarios_id_m($usuarios_m);
        if ($resultado > 0) {
            echo '<script>
            alert ("Los datos fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_usuarios";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron actualizados correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=usuarios_actualizar";
        </script>';
        }
    }

    //FUNCIONES CRUD (ELIMINAR)
    public function eliminar_actividades_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_actividades_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_actividades";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_actividades";
        </script>';
        }
    }

    public function eliminar_acudientes_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_acudientes_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientes";
        </script>';
        }
    }

    public function eliminar_acudientexestudiante_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_acudientexestudiante_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientexestudiante";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acudientexestudiante";
        </script>';
        }
    }

    public function eliminar_acuerdos_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_acuerdos_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acuerdos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_acuerdos";
        </script>';
        }
    }

    public function eliminar_asignaturas_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_asignaturas_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_asignaturas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_asignaturas";
        </script>';
        }
    }

    public function eliminar_calificaciones_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_id_calificaciones_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_calificaciones";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_calificaciones";
        </script>';
        }
    }

    public function eliminar_centroseducativos_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_id_centroseducativos_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_centroseducativos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_centroseducativos";
        </script>';
        }
    }

    public function eliminar_controlasistencias_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_controlasistencias_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_controlasistencias";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_controlasistencias";
        </script>';
        }
    }

    public function eliminar_cursos_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_id_cursos_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_cursos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_cursos";
        </script>';
        }
    }

    public function eliminar_directora_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_directora_id_m($directora_m);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_directora";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_directora";
        </script>';
        }
    }

    public function eliminar_docentes_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_docentes_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentes";
        </script>';
        }
    }

    public function eliminar_docentexsede_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_docentexsede_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentexsede";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_docentexsede";
        </script>';
        }
    }

    public function eliminar_estudiantes_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_estudiantes_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_estudiantes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_estudiantes";
        </script>';
        }
    }

    public function eliminar_grados_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_grados_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_grados";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_grados";
        </script>';
        }
    }

    public function eliminar_matriculas_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_matriculas_id_m($matriculas_m);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_matriculas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_matriculas";
        </script>';
        }
    }

    public function eliminar_observador_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_observador_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_observador";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_observador";
        </script>';
        }
    }

    public function eliminar_personas_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_personas_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_personas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_personas";
        </script>';
        }
    }

    public function eliminar_salones_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_salones_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_salones";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_salones";
        </script>';
        }
    }

    public function eliminar_sedes_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_sedes_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sedes";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sedes";
        </script>';
        }
    }

    public function eliminar_sueldos_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_sueldos_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sueldos";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_sueldos";
        </script>';
        }
    }

    public function eliminar_tipoactividades_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_tipoactividades_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipoactividades";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipoactividades";
        </script>';
        }
    }

    public function eliminar_tipofaltas_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_tipofaltas_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipofaltas";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_tipofaltas";
        </script>';
        }
    }

    public function eliminar_usuarios_id_c($id) {
        $funcion_m = new FuncionesModelo();
        $resultado = $funcion_m->eliminar_usuarios_id_m($id);
        if ($resultado) {
            echo '<script>
            alert ("Los datos fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_usuarios";
        </script>';
        } else {
            echo '<script>
            alert ("ERROR: Los datos NO fueron eliminados  correctamente a la Base de Datos");
            window.location = "Controlador.php?accion=modulo_usuarios";
        </script>';
        }
    }

}
?>