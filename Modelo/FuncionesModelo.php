<?php

require_once '../Configuracion/Conexion.php';
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

class FuncionesModelo extends Conexion {

//FUNCIONES DE INICIAR & CERRAR SESIÓN
    protected function consultar_usuario() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM usuarios WHERE usunombre = '$_REQUEST[usuario]' and usucontrasena = '$_REQUEST[contrasena]'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        foreach ($resultado as $usuario) {
            
        }
        if (empty($usuario)) {
            $usuario = "sindatos";
        }
        return $usuario;
    }

//FUNCIONES CRUD (TABLAS)
    public function obtener_actividades_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codactividad,actfecha,actnumerobimestre,asinombre,tipactnombre,tipactdescripcion FROM actividades,asignaturas,tipoactividades WHERE actcodasignatura=codasignatura AND actcodtipoactividades=codtipoactividad";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_acudientes_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codacudiente, idpersona,pernombre,perapellido,perdireccion,pertelefono,percorreo FROM acudientes, personas WHERE acuidpersona=idpersona";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_acudientexestudiante_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM acudientexestudiante";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_acuerdos_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM acuerdos";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_asignaturas_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codasignatura,asinombre,granombre FROM asignaturas,grados WHERE asicodgrado=codgrado";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_calificaciones_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codcalificacion,estidpersona,pernombre,perapellido,calfecha,calvalor,asinombre,tipactnombre,tipactdescripcion FROM personas,calificaciones,actividades,tipoactividades,estudiantes,asignaturas where estidpersona=idpersona AND calcodactividad=codactividad AND calcodestudiante=codestudiante AND actcodtipoactividades=codtipoactividad AND actcodasignatura=codasignatura";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_centroseducativos_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM centroseducativos";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_controlasistencias_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codcontrolasistencia,idpersona,pernombre,perapellido,caestado,cafechahora,canumerobimestre,caobservacion FROM controlasistencias,personas,estudiantes WHERE estidpersona=idpersona and cacodestudiante=codestudiante";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_cursos_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codcurso,curnombre,sednombre,salnombre,curcodgrado FROM cursos,sedes,salones WHERE curcodsede=codsede AND curcodsalon=codsalon";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_directora_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT coddirectora,diridpersona,pernombre,perapellido,cennombre,dircodsueldo FROM directora,personas,centroseducativos WHERE diridpersona=idpersona AND dircodcentroeducativo=dircodcentroeducativo";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_docentes_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT coddocente,docidpersona,pernombre,perapellido,docfechaingreso,docvigencia,suecategoria,suevalor FROM personas,docentes,sueldos WHERE doccodsueldo=codsueldo AND docidpersona=idpersona";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_docentexsede_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM docentexsede";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_estudiantes_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codestudiante,estidpersona,pernombre,perapellido,pergenero,perfechanacimiento FROM estudiantes,personas WHERE estidpersona=idpersona";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_grados_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM grados";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_matriculas_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codmatricula,estidpersona,pernombre,perapellido,matnumero,matfecha,matanovigencia,sednombre,granombre, curnombre FROM matriculas,personas,estudiantes,sedes,grados,cursos WHERE estidpersona=idpersona AND matcodestudiante=codestudiante AND matcodsede=codsede AND matcodgrado=codgrado AND matcodcurso=codcurso";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_observador_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codobservador,idpersona,pernombre,perapellido,obsfecha,obsnumerobimestre,obsobservacion,tipfalnombre,tipfaldescripcion FROM observador,tipofaltas,estudiantes,personas where estidpersona=idpersona AND obscodestudiante=codestudiante AND obscodtipofalta=codtipofalta";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_personas_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM personas";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_salones_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT codsalon,salnombre,sednombre FROM salones,sedes WHERE salcodsede=codsede";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_sedes_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM sedes";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_sueldos_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM sueldos";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_tipoactividades_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM tipoactividades";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_tipofaltas_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM tipofaltas";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_usuarios_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM usuarios";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    //VISUALIZAR PLANTILLA (PDF)
    public function obtener_actividades_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codactividad,actfecha,actnumerobimestre,asinombre,tipactnombre,tipactdescripcion FROM actividades,asignaturas,tipoactividades WHERE actcodasignatura=codasignatura AND actcodtipoactividades=codtipoactividad";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_acudientes_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codacudiente, idpersona,pernombre,perapellido,perdireccion,pertelefono,percorreo FROM acudientes, personas WHERE acuidpersona=idpersona";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_acudientexestudiante_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM acudientexestudiante";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_acuerdos_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM acuerdos";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_asignaturas_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codasignatura,asinombre,granombre FROM asignaturas,grados WHERE asicodgrado=codgrado";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_calificaciones_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codcalificacion,estidpersona,pernombre,perapellido,calfecha,calvalor,asinombre,tipactnombre,tipactdescripcion FROM personas,calificaciones,actividades,tipoactividades,estudiantes,asignaturas where estidpersona=idpersona AND calcodactividad=codactividad AND calcodestudiante=codestudiante AND actcodtipoactividades=codtipoactividad AND actcodasignatura=codasignatura";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_centroseducativos_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM centroseducativos";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_controlasistencias_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT idpersona,pernombre,perapellido,caestado,cafechahora,canumerobimestre,caobservacion FROM controlasistencias,personas,estudiantes WHERE estidpersona=idpersona and cacodestudiante=codestudiante";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_cursos_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codcurso,curnombre,sednombre,salnombre,curcodgrado FROM cursos,sedes,salones WHERE curcodsede=codsede AND curcodsalon=codsalon";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_directora_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT coddirectora,diridpersona,pernombre,perapellido,cennombre,dircodsueldo FROM directora,personas,centroseducativos WHERE diridpersona=idpersona AND dircodcentroeducativo=dircodcentroeducativo";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_docentes_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT coddocente,docidpersona,pernombre,perapellido,docfechaingreso,docvigencia,suecategoria,suevalor FROM personas,docentes,sueldos WHERE doccodsueldo=codsueldo AND docidpersona=idpersona";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_docentexsede_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM docentexsede";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_estudiantes_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codestudiante,estidpersona,pernombre,perapellido,pergenero,perfechanacimiento FROM estudiantes,personas WHERE estidpersona=idpersona";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_grados_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM grados";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_matriculas_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codmatricula,estidpersona,pernombre,perapellido,matnumero,matfecha,matanovigencia,sednombre,granombre, curnombre FROM matriculas,personas,estudiantes,sedes,grados,cursos WHERE estidpersona=idpersona AND matcodestudiante=codestudiante AND matcodsede=codsede AND matcodgrado=codgrado AND matcodcurso=codcurso";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_observador_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codobservador,idpersona,pernombre,perapellido,obsfecha,obsnumerobimestre,obsobservacion,tipfalnombre,tipfaldescripcion FROM observador,tipofaltas,estudiantes,personas where estidpersona=idpersona AND obscodestudiante=codestudiante AND obscodtipofalta=codtipofalta";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_personas_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM personas";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_salones_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT codsalon,salnombre,sednombre FROM salones,sedes WHERE salcodsede=codsede";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_sedes_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM sedes";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_sueldos_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM sueldos";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_tipoactividades_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM tipoactividades";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_tipofaltas_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM tipofaltas";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function obtener_usuarios_pdf_m() {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $pdf = new FPDF();
        $sql = "SELECT * FROM usuarios";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    //FUNCIONES CRUD (INSERTAR)
    public function insertar_actividades_m(ActividadesModelo $actividades_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $actividades_m->obtenerCodigoActividad();
        $fecha = $actividades_m->obtenerFechaActividad();
        $bimestre = $actividades_m->obtenerBimestreActividad();
        $asignatura = $actividades_m->obtenerCodigoAsignatura();
        $tipoactividad = $actividades_m->obtenerCodigoTipoActividad();
        $sql = "INSERT INTO actividades(codactividad,actfecha,actnumerobimestre,actcodasignatura,actcodtipoactividades) VALUES ('" . $codigo . "','" . $fecha . "','" . $bimestre . "','" . $asignatura . "','" . $tipoactividad . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_acudientes_m(AcudientesModelo $acudientes_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $acudientes_m->obtenerCodigoAcudiente();
        $identificacion = $acudientes_m->obtenerIdentificacionPersona();
        $sql = "INSERT INTO acudientes(codacuadiente,acuidpersona) VALUES ('" . $codigo . "','" . $identificacion . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_acudientexestudiante_m(AcudientexestudianteModelo $acudientexestudiante_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $acudientexestudiante_m->obtenerCodigoAcudientexestudiante();
        $acudiante = $acudientexestudiante_m->obtenerCodigoAcudiente();
        $estudiante = $acudientexestudiante_m->obtenerCodigoEstudiante();
        $sql = "INSERT INTO acudientexestudiante(codacuest,axecodacudiente,axecodestudiante) VALUES ('" . $codigo . "','" . $acudiante . "','" . $estudiante . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_acuerdos_m(AcuerdosModelo $acuerdos_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $acuerdos_m->obtenerCodigoAcuerdo();
        $tipo = $acuerdos_m->obtenerTipoAcuerdo();
        $observacion = $acuerdos_m->obtenerObservacionAcuerdo();
        $observador = $acuerdos_m->obtenerCodigoObservador();
        $sql = "INSERT INTO acuerdos(codacuerdos,acutipo,acuobservacion,acucodobservador) VALUES ('" . $codigo . "','" . $tipo . "','" . $observacion . "','" . $observador . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_asignaturas_m(AsignaturasModelo $asignaturas_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $asignaturas_m->obtenerCodigoAsignatura();
        $nombre = $asignaturas_m->obtenerNombreAsignatura();
        $grado = $asignaturas_m->obtenerCodigoGrado();
        $sql = "INSERT INTO asignaturas(codasignatura,asinombre,asicodgrado) VALUES ('" . $codigo . "','" . $nombre . "','" . $grado . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_calificaciones_m(CalificacionesModelo $calificaciones_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $calificaciones_m->obtenerCodigoCalificacion();
        $fecha = $calificaciones_m->obtenerFechaCalificacion();
        $valor = $calificaciones_m->obtenerValorCalificacion();
        $docente = $calificaciones_m->obtenerCodigoDocente();
        $actividad = $calificaciones_m->obtenerCodigoActividad();
        $estudiante = $calificaciones_m->obtenerCodigoEstudiante();
        $sql = "INSERT INTO calificaciones(codcalificacion,calfecha,calvalor,calcoddocente,calcodactividad,calcodestudiante) VALUES ('" . $codigo . "','" . $fecha . "','" . $valor . "','" . $docente . "','" . $actividad . "','" . $estudiante . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_centroseducativos_m(CentroseducativosModelo $centroseducativos_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $centroseducativos_m->obtenerCodigoCentroEducativo();
        $nit = $centroseducativos_m->obtenerNitCentroEducativo();
        $nombre = $centroseducativos_m->obtenerNombreCentroEducativo();
        $direccion = $centroseducativos_m->obtenerDireccionentroEducativo();
        $telefono = $centroseducativos_m->obtenerTelefonoentroEducativo();
        $correo = $centroseducativos_m->obtenerCorreoentroEducativo();
        $sql = "INSERT INTO centroseducativos(codcentroeducativo,cennit,cennombre,cendireccion,centelefono,cencorreo) VALUES ('" . $codigo . "','" . $nit . "','" . $nombre . "','" . $direccion . "','" . $telefono . "','" . $correo . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_controlasistencias_m(ControlasistenciasModelo $controlasistencias_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $controlasistencias_m->obtenerCodigoControlAsistencia();
        $fecha = $controlasistencias_m->obtenerFechaControlAsistencia();
        $estado = $controlasistencias_m->obtenerEstadoControlAsistencia();
        $bimestre = $controlasistencias_m->obtenerBimestreControlAsistencia();
        $observacion = $controlasistencias_m->obtenerObservacionControlAsistencia();
        $estudiante = $controlasistencias_m->obtenerCodigoEstudiante();
        $docente = $controlasistencias_m->obtenerCodigoDocente();
        $sql = "INSERT INTO controlasistencias(codcontrolasistencia,cafechahora,caestado,canumerobimestre,caobservacion,cacodestudiante,cacoddocente) VALUES ('" . $codigo . "','" . $fecha . "','" . $estado . "','" . $bimestre . "','" . $observacion . "','" . $estudiante . "','" . $docente . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_cursos_m(CursosModelo $cursos_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $cursos_m->obtenerCodigoCurso();
        $nombre = $cursos_m->obtenerNombreCurso();
        $sede = $cursos_m->obtenerCodigoSede();
        $salon = $cursos_m->obtenerCodigoSalon();
        $grado = $cursos_m->obtenerCodigoGrado();
        $sql = "INSERT INTO cursos(codcurso,curnombre,curcodsede,curcodsalon,curcodgrado) VALUES ('" . $codigo . "','" . $nombre . "','" . $sede . "','" . $salon . "','" . $grado . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_directora_m(DirectoraModelo $directora_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $directora_m->obtenerCodigoDirectora();
        $identificacion = $directora_m->obtenerIdentificacionPersona();
        $centroeducativo = $directora_m->obtenerCodigoCentroEducativo();
        $sueldo = $directora_m->obtenerCodigoSueldo();
        $sql = "INSERT INTO directora(coddirectora,diridpersona,dircodcentroeducativo,dircodsueldo) VALUES ('" . $codigo . "','" . $identificacion . "','" . $centroeducativo . "','" . $sueldo . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_docentes_m(DocentesModelo $docentes_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $docentes_m->obtenerCodigoDocente();
        $fechaingreso = $docentes_m->obtenerFechaIngresoDocente();
        $vigencia = $docentes_m->obtenerVigenciaDocente();
        $sueldo = $docentes_m->obtenerCodigoSueldo();
        $identificacion = $docentes_m->obtenerIdentificacionPersona();
        $sql = "INSERT INTO docentes(coddocente,docfechaingreso,docvigencia,doccodsueldo, docidpersona) VALUES ('" . $codigo . "','" . $fechaingreso . "','" . $vigencia . "','" . $sueldo . "','" . $identificacion . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_docentexsede_m(DocentexsedeModelo $docentexsede_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $docentexsede_m->obtenerCodigoDocentexSede();
        $docente = $docentexsede_m->obtenerCodigoDocente();
        $sede = $docentexsede_m->obtenerCodigoSede();
        $sql = "INSERT INTO docentexsede(coddocentexsede,dxscoddocente,dxscodsede) VALUES ('" . $codigo . "','" . $docente . "','" . $sede . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_estudiantes_m(EstudiantesModelo $estudiantes_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $estudiantes_m->obtenerCodigoEstudiante();
        $identificacion = $estudiantes_m->obtenerIdentificacionPersona();
        $sql = "INSERT INTO estudiantes(codestudiante,estidpersona) VALUES ('" . $codigo . "','" . $identificacion . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_grados_m(GradosModelo $grados_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $grados_m->obtenerCodigoGrado();
        $nombre = $grados_m->obtenerNombreGrado();
        $sql = "INSERT INTO grados(codgrados,granombre) VALUES ('" . $codigo . "','" . $nombre . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_matriculas_m(MatriculasModelo $matriculas_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $numero = $matriculas_m->obtenerNumeroMatricula();
        $fecha = $matriculas_m->obtenerFechaMatricula();
        $vigencia = $matriculas_m->obtenerVigenciaMatricula();
        $estudiante = $matriculas_m->obtenerCodigoEstudiante();
        $sede = $matriculas_m->obtenerCodigoSede();
        $grado = $matriculas_m->obtenerCodigoGrado();
        $curso = $matriculas_m->obtenerCodigoCurso();
        $sql = "INSERT INTO matriculas(matnumero,matfecha,matanovigencia,matcodestudiante,matcodsede,matcodgrado,matcodcurso) VALUES ('" . $numero . "','" . $fecha . "','" . $vigencia . "','" . $estudiante . "','" . $sede . "','" . $grado . "','" . $curso . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_observador_m(ObservadorModelo $observador_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $observador_m->obtenerCodigoObservador();
        $fecha = $observador_m->obtenerFechaObservador();
        $bimestre = $observador_m->obtenerBimestreObservador();
        $observacion = $observador_m->obtenerObservacionObservador();
        $tipofalta = $observador_m->obtenerCodigoTipofalta();
        $estudiante = $observador_m->obtenerCodigoEstudiante();
        $docente = $observador_m->obtenerCodigoDocente();
        $sql = "INSERT INTO observador (codobservador,obsfecha,obsnumerobimestre,obsobservacion,obscodtipofalta,obscodestudiante,obscoddocente) VALUES ('" . $codigo . "','" . $fecha . "','" . $bimestre . "','" . $observacion . "','" . $tipofalta . "','" . $estudiante . ",'" . $docente . ")";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_personas_m(PersonasModelo $personas_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $identificacion = $personas_m->obtenerIdentificacionPersona();
        $nombre = $personas_m->obtenerNombrePersona();
        $apellido = $personas_m->obtenerApellidoPersona();
        $rol = $personas_m->obtenerRolPersona();
        $genero = $personas_m->obtenerGeneroPersona();
        $nacimiento = $personas_m->obtenerFechaNacimientoPersona();
        $direccion = $personas_m->obtenerDireccionPersona();
        $telefono = $personas_m->obtenerTelefonoPersona();
        $correo = $personas_m->obtenerCorreoPersona();
        $sql = "INSERT INTO personas(idpersona,pernombre,perapellido,perrol,pergenero,perfechanacimiento,perdireccion,pertelefono,percorreo) values ('" . $identificacion . "','" . $nombre . "','" . $apellido . "','" . $rol . "','" . $genero . "','" . $nacimiento . "','" . $direccion . "','" . $telefono . "','" . $correo . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_salones_m(SalonesModelo $salones_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $salones_m->obtenerCodigoSalon();
        $nombre = $salones_m->obtenerNombreSalon();
        $sede = $salones_m->obtenerCodigoSede();
        $sql = "INSERT INTO salones(codsalon,salnombre, salcodsede) VALUES ('" . $codigo . "','" . $nombre . "','" . $sede . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_sedes_m(SedesModelo $sedes_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $sedes_m->obtenerCodigoSede();
        $nombre = $sedes_m->obtenerNombreSede();
        $direccion = $sedes_m->obtenerDireccionSede();
        $telefono = $sedes_m->obtenerTelefonoSede();
        $correo = $sedes_m->obtenerCorreoSede();
        $centroeducativo = $sedes_m->obtenerCodigoCentroEducativo();
        $sql = "INSERT INTO sedes(codssede,sednombre,seddireccion,sedtelefono,sedcorreo,sedcodcentroeducativo) VALUES ('" . $codigo . "','" . $nombre . "','" . $direccion . "','" . $telefono . "','" . $correo . "','" . $centroeducativo . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_sueldos_m(SueldosModelo $sueldos_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $sueldos_m->obtenerCodigoSueldo();
        $categoria = $sueldos_m->obtenerCategoriaSueldo();
        $valor = $sueldos_m->obtenerValorSueldo();
        $sql = "INSERT INTO sueldos(codsueldo,suecategoria,suevalor) VALUES ('" . $codigo . "','" . $categoria . "','" . $valor . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_tipoactividades_m(TipoactividadesModelo $tipoactividades_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $tipoactividades_m->obtenerCodigoTipoActividad();
        $nombre = $tipoactividades_m->obtenerNombreTipoActividad();
        $descripcion = $tipoactividades_m->obtenerDescripcionTipoActividad();
        $sql = "INSERT INTO tipoactividades(codtipoactividad,tipactnombre,tipactdescripcion) VALUES ('" . $codigo . "','" . $nombre . "','" . $descripcion . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_tipofaltas_m(TipofaltasModelo $tipofaltas_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $tipofaltas_m->obtenerCodigoTipoFalta();
        $nombre = $tipofaltas_m->obtenerNombreTipoFalta();
        $descripcion = $tipofaltas_m->obtenerDescripcionTipoFalta();
        $sql = "INSERT INTO tipofaltas(codtipofalta,tipfalnombre,tipfaldescripcion) VALUES ('" . $codigo . "','" . $nombre . "','" . $descripcion . "')";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function insertar_usuarios_m(UsuariosModelo $usuarios_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $usuarios_m->obtenerCodigoUsuario();
        $nombre = $usuarios_m->obtenerNombreUsuario();
        $contrasena = $usuarios_m->obtenerContrasenaUsuario();
        $identificacion = $usuarios_m->obtenerIdentificacionPersona();
        if (isset($_POST['guardar'])) {
            $pass_fuerte = password_hash($contrasena, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios(codusuario,usunombre,usucontrasena,usuidpersona) VALUES ('" . $codigo . "','" . $nombre . "','" . $pass_fuerte . "','" . $identificacion . "')";
            if ($conexion->consultar_informacion($sql)) {
                echo "<script>alert('Usuario registrado:'$nombre');window.location = 'Controlador.php?accion=modulo_usuarios'<script>";
            } else {
            }
        }
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    //FUNCIONES CRUD (CONSULTAR)
    public function consultar_actividades_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM actividades WHERE codactividad = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $actividades_m = new ActividadesModelo($r->codactividad, $r->actfecha, $r->actnumerobimestre, $r->actcodasignatura, $r->actcodtipoactividades);
        return $actividades_m;
    }

    public function consultar_acudientes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM acudientes WHERE codacudiente = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $acudientes_m = new AcudientesModelo($r->codacudiente, $r->acuidpersona);
        return $acudientes_m;
    }

    public function consultar_acudientexestudiante_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM acudientexestudiante WHERE codacuest = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $acudientexestudiante_m = new AcudientexestudianteModelo($r->codacuest, $r->axecodacudiente, $r->axecodestudiante);
        return $acudientexestudiante_m;
    }

    public function consultar_acuerdos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM acuerdos WHERE codacuerdos = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $acuerdos_m = new AcuerdosModelo($r->codacuerdos, $r->acutipo, $r->acuobservacion, $r->acucodobservador);
        return $acuerdos_m;
    }

    public function consultar_asignaturas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM asignaturas WHERE codasignatura = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $asignaturas_m = new AsignaturasModelo($r->codasignatura, $r->asinombre, $r->asicodgrado);
        return $asignaturas_m;
    }

    public function consultar_calificaciones_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM calificaciones WHERE codcalificacion = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $calificaciones_m = new CalificacionesModelo($r->codcalificacion, $r->calfecha, $r->calvalor, $r->calcoddocente, $r->calcodactividad, $r->calcodestudiante);
        return $calificaciones_m;
    }

    public function consultar_centroseducativos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM centroseducativos WHERE codcentroeducativo = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $centroseducativos_m = new CentroseducativosModelo($r->codcentroeducativo, $r->cennit, $r->cennombre, $r->cendireccion, $r->centelefono, $r->cencorreo);
        return $centroseducativos_m;
    }

    public function consultar_controlasistencias_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM controlasistencias WHERE codcontrolasistencia = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $controlasistencias_m = new ControlasistenciasModelo($r->codcontrolasistencia, $r->cafechahora, $r->caestado, $r->canumerobimestre, $r->caobservacion, $r->cacodestudiante, $r->cacoddocente);
        return $controlasistencias_m;
    }

    public function consultar_cursos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM cursos WHERE codcurso = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $cursos_m = new CursosModelo($r->codcurso, $r->curnombre, $r->curcodsede, $r->curcodsalon, $r->curcodgrado);
        return $cursos_m;
    }

    public function consultar_directora_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM directora WHERE coddirectora = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $directora_m = new DirectoraModelo($r->coddirectora, $r->diridpersona, $r->dircodcentroeducativo, $r->dircodsueldo);
        return $directora_m;
    }

    public function consultar_docentes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM docentes WHERE coddocente = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $docentes_m = new docentesModelo($r->coddocente, $r->docfechaingreso, $r->docvigencia, $r->doccodsueldo, $r->docidpersona);
        return $docentes_m;
    }

    public function consultar_docentexsede_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM docentexsede WHERE coddocentexsede = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $docentexsede_m = new DocentexsedeModelo($r->coddocentexsede, $r->dxscoddocente, $r->dxscodsede);
        return $docentexsede_m;
    }

    public function consultar_estudiantes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM estudiantes WHERE codestudiante = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $estudiantes_m = new EstudiantesModelo($r->codestudiante, $r->estidpersona);
        return $estudiantes_m;
    }

    public function consultar_grados_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM grados WHERE codgrado = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $grados_m = new GradosModelo($r->codgrado, $r->granombre);
        return $grados_m;
    }

    public function consultar_matriculas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM matriculas WHERE codmatricula = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $matriculas_m = new MatriculasModelo($r->codmatricula, $r->matnumero, $r->matfecha, $r->matanovigencia, $r->matcodestudiante, $r->matcodsede, $r->matcodgrado, $r->matcodcurso);
        return $matriculas_m;
    }

    public function consultar_observador_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM observador WHERE codobservador = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $observador_m = new ObservadorModelo($r->codobservador, $r->obsfecha, $r->obsnumerobimestre, $r->obsobservacion, $r->obscodtipofalta, $r->obscodestudiante, $r->obscoddocente);
        return $observador_m;
    }

    public function consultar_personas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM personas WHERE idpersona = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $persona = new PersonasModelo($r->idpersona, $r->pernombre, $r->perapellido, $r->perrol, $r->pergenero, $r->perfechanacimiento, $r->perdireccion, $r->pertelefono, $r->percorreo);
        return $persona;
    }

    public function consultar_salones_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM salones WHERE codsalon = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $salones_m = new SalonesModelo($r->codsalon, $r->salnombre, $r->salcodsede);
        return $salones_m;
    }

    public function consultar_sedes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM sedes WHERE codsede = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $sedes_m = new SedesModelo($r->codsede, $r->sednombre, $r->seddireccion, $r->sedtelefono, $r->sedcorreo, $r->sedcodcentroeducativo);
        return $sedes_m;
    }

    public function consultar_sueldos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM sueldos WHERE codsueldo = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $sueldos_m = new SueldosModelo($r->codsueldo, $r->suecategoria, $r->suevalor);
        return $sueldos_m;
    }

    public function consultar_tipoactividades_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM tipoactividades WHERE codtipoactividad = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $tipoactividades_m = new TipoactividadesModelo($r->codtipoactividad, $r->tipactnombre, $r->tipactdescripcion);
        return $tipoactividades_m;
    }

    public function consultar_tipofaltas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM tipofaltas WHERE codtipofalta = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $tipofaltas_m = new TipofaltasModelo($r->codtipofalta, $r->tipfalnombre, $r->tipfaldescripcion);
        return $tipofaltas_m;
    }

    public function consultar_usuarios_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "SELECT * FROM usuarios WHERE codusuario = '" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        $r = $resultado->fetch_object();
        $usuarios_m = new UsuariosModelo($r->codusuario, $r->usunombre, $r->usucontrasena, $r->usuidpersona);
        return $usuarios_m;
    }

    //FUNCIONES CRUD (ACTUALIZAR)
    public function actualizar_actividades_id_m(ActividadesModelo $actividades_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $actividades_id_m->obtenerCodigoActividad();
        $fecha = $actividades_id_m->obtenerFechaActividad();
        $bimestre = $actividades_id_m->obtenerBimestreActividad();
        $asignatura = $actividades_id_m->obtenerCodigoAsignatura();
        $tipoactividad = $actividades_id_m->obtenerCodigoTipoActividad();
        $sql = "UPDATE actividades SET actfecha='" . $fecha . "',actnumerobimestre='" . $bimestre . "',actcodasignatura='" . $asignatura . "',actcodtipoactividades='" . $tipoactividad . "'WHERE codactividad='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_acudientes_id_m(AcudientesModelo $acudientes_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $acudientes_id_m->obtenerCodigoAcudiente();
        $identificacion = $acudientes_id_m->obtenerIdentificacionPersona();
        $sql = "UPDATE acudientes SET acuidpersona='" . $identificacion . "'WHERE codacuadiente='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_acudientexestudiante_id_m(AcudientexestudianteModelo $acudientexestudiante_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $acudientexestudiante_id_m->obtenerCodigoAcudientexestudiante();
        $acudiante = $acudientexestudiante_id_m->obtenerCodigoAcudiente();
        $estudiante = $acudientexestudiante_id_m->obtenerCodigoEstudiante();
        $sql = "UPDATE acudientexestudiante SET axecodacudiente='" . $acudiante . "',axecodestudiante='" . $estudiante . "'WHERE codacuest='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_acuerdos_id_m(AcuerdosModelo $acuerdos_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $acuerdos_id_m->obtenerCodigoAcuerdo();
        $tipo = $acuerdos_id_m->obtenerTipoAcuerdo();
        $observacion = $acuerdos_id_m->obtenerObservacionAcuerdo();
        $observador = $acuerdos_id_m->obtenerCodigoObservador();
        $sql = "UPDATE acuerdos SET acutipo='" . $tipo . "',acuobservacion='" . $observacion . "',acucodobservador='" . $observador . "'WHERE codacuerdos='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_asignaturas_id_m(AsignaturasModelo $asignaturas_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $asignaturas_id_m->obtenerCodigoAsignatura();
        $nombre = $asignaturas_id_m->obtenerNombreAsignatura();
        $grado = $asignaturas_id_m->obtenerCodigoGrado();
        $sql = "UPDATE asignaturas SET asinombre='" . $nombre . "',asicodgrado='" . $grado . "'WHERE codasignatura='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_calificaciones_id_m(CalificacionesModelo $calificaciones_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $calificaciones_id_m->obtenerCodigoCalificacion();
        $fecha = $calificaciones_id_m->obtenerFechaCalificacion();
        $valor = $calificaciones_id_m->obtenerdocValorCalificacion();
        $docente = $calificaciones_id_m->obtenerCodigoDocente();
        $actividad = $calificaciones_id_m->obtenerCodigoActividad();
        $estudiante = $calificaciones_id_m->obtenerCodigoEstudiante();
        $sql = "UPDATE calificaciones SET calfecha='" . $fecha . "',calvalor='" . $valor . "',calcoddocente='" . $docente . "',calcodactividad='" . $actividad . "',calcodestudiante='" . $estudiante . "'WHERE codcalificacion='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_centroseducativos_id_m(CentroseducativosModelo $centroseducativos_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $centroseducativos_id_m->obtenerCodigoCentroEducativo();
        $nit = $centroseducativos_id_m->obtenerNitCentroEducativo();
        $nombre = $centroseducativos_id_m->obtenerNombreCentroEducativo();
        $direccion = $centroseducativos_id_m->obtenerDireccionentroEducativo();
        $telefono = $centroseducativos_id_m->obtenerTelefonoentroEducativo();
        $correo = $centroseducativos_id_m->obtenerCorreoentroEducativo();
        $sql = "UPDATE centroseducativo SET cennit='" . $nit . "',cennombre='" . $nombre . "',cendireccion='" . $direccion . "',centelefono='" . $telefono . "',cencorreo='" . $correo . "'WHERE codcentroeducativo='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_controlasistencias_id_m(ControlasistenciasModelo $controlasistencias_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $controlasistencias_id_m->obtenerCodigoControlAsistencia();
        $fecha = $controlasistencias_id_m->obtenerFechaControlAsistencia();
        $estado = $controlasistencias_id_m->obtenerEstadoControlAsistencia();
        $bimestre = $controlasistencias_id_m->obtenerBimestreControlAsistencia();
        $observacion = $controlasistencias_id_m->obtenerObservacionControlAsistencia();
        $estudiante = $controlasistencias_id_m->obtenerCodigoEstudiante();
        $docente = $controlasistencias_id_m->obtenerCodigoDocente();
        $sql = "UPDATE controlasistencias SET cafechahora='" . $fecha . "',caestado='" . $estado . "',canumerobimestre='" . $bimestre . "',caobservacion='" . $observacion . "',cacodestudiante='" . $estudiante . "',cacoddocente ='" . $docente . "'WHERE codcontrolasistencia='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_cursos_id_m(CursosModelo $cursos_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $cursos_id_m->obtenerCodigoCurso();
        $nombre = $cursos_id_m->obtenerNombreCurso();
        $sede = $cursos_id_m->obtenerCodigoSede();
        $salon = $cursos_id_m->obtenerCodigoSalon();
        $grado = $cursos_id_m->obtenerCodigoGrado();
        $sql = "UPDATE cursos SET curnombre='" . $nombre . "',curcodsede='" . $sede . "',curcodsalon='" . $salon . "',curcodgrado='" . $grado . "'WHERE idpersona='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_directora_id_m(DirectoraModelo $directora_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $directora_id_m->obtenerCodigoDirectora();
        $identificacion = $directora_id_m->obtenerIdentificacionPersona();
        $centroeducativo = $directora_id_m->obtenerCodigoCentroEducativo();
        $sueldo = $directora_id_m->obtenerCodigoSueldo();
        $sql = "UPDATE directora SET diridpersona='" . $identificacion . "',dircodcentroeducativo='" . $centroeducativo . "',dircodsueldo='" . $sueldo . "'WHERE coddirectora='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_docentes_id_m(DocentesModelo $docentes_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $docentes_id_m->obtenerCodigoDocente();
        $fechaingreso = $docentes_id_m->obtenerFechaIngresoDocente();
        $vigencia = $docentes_id_m->obtenerVigenciaDocente();
        $sueldo = $docentes_id_m->obtenerCodigoSueldo();
        $identificacion = $docentes_id_m->obtenerIdentificacionPersona();
        $sql = "UPDATE docentes SET docfechaingreso='" . $fechaingreso . "',docvigencia='" . $vigencia . "',doccodsueldo='" . $sueldo . "',docidpersona='" . $identificacion . "'WHERE coddocente='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_docentexsede_id_m(DocentexsedeModelo $docentexsede_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $docentexsede_id_m->obtenerCodigoDocentexSede();
        $docente = $docentexsede_id_m->obtenerCodigoDocente();
        $sede = $docentexsede_id_m->obtenerCodigoSede();
        $sql = "UPDATE docentexsede SET(coddocentexsede,dxscoddocente,dxscodsede,='" . $docente . "',='" . $sede . "'WHERE coddocentexsede='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_estudiantes_id_m(EstudiantesModelo $estudiantes_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $estudiantes_id_m->obtenerCodigoEstudiante();
        $identificacion = $estudiantes_id_m->obtenerIdentificacionPersona();
        $sql = "UPDATE estudiantes SET estidpersona='" . $identificacion . "'WHERE codestudiante='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_grados_id_m(GradosModelo $grados_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $grados_id_m->obtenerCodigoGrado();
        $nombre = $grados_id_m->obtenerNombreGrado();
        $sql = "UPDATE grados SET granombre='" . $nombre . "'WHERE codgrado='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_id_matriculas_id_m(MatriculasModelo $matriculas_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $matriculas_id_m->obtenerCodigoMatricula();
        $numero = $matriculas_id_m->obtenerNumeroMatricula();
        $fecha = $matriculas_id_m->obtenerFechaMatricula();
        $vigencia = $matriculas_id_m->obtenerVigenciaMatrcicula();
        $estudiante = $matriculas_id_m->obtenerCodigoEstudiante();
        $sede = $matriculas_id_m->obtenerCodigoSede();
        $grado = $matriculas_id_m->obtenerCodigoGrado();
        $curso = $matriculas_id_m->obtenerCodigoCurso();
        $sql = "UPDATE grados SET matnumero='" . $numero . "',matfecha='" . $fecha . "',matanovigencia='" . $vigencia . "',matcodestudiante='" . $estudiante . "',matcodsede='" . $sede . "', matcodgrado='" . $grado . "',matcodcurso='" . $curso . "'WHERE codmatricula='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_observador_id_m(ObservadorModelo $observador_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $observador_id_m->obtenerCodigoObservador();
        $fecha = $observador_id_m->obtenerFechaObservador();
        $bimestre = $observador_id_m->obtenerBimestreObservador();
        $observacion = $observador_id_m->obtenerObservacionObservador();
        $tipofalta = $observador_id_m->obtenerCodigoTipofalta();
        $estudiante = $observador_id_m->obtenerCodigoEstudiante();
        $docente = $observador_id_m->obtenerCodigoDocente();
        $sql = "UPDATE observador SET obsfecha='" . $fecha . "',obsnumerobimestre='" . $bimestre . "',obsobservacion='" . $observacion . "',obscodtipofalta='" . $tipofalta . "',obscodestudiante='" . $estudiante . ",obscoddocente='" . $docente . "WHERE codobservador='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_personas_id_m(PersonasModelo $personas_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $identificacion = $personas_m->obtenerIdentificacionPersona();
        $nombre = $personas_m->obtenerNombrePersona();
        $apellido = $personas_m->obtenerApellidoPersona();
        $rol = $personas_m->obtenerRolPersona();
        $genero = $personas_m->obtenerGeneroPersona();
        $nacimiento = $personas_m->obtenerFechaNacimientoPersona();
        $direccion = $personas_m->obtenerDireccionPersona();
        $telefono = $personas_m->obtenerTelefonoPersona();
        $correo = $personas_m->obtenerCorreoPersona();
        $sql = "UPDATE personas SET pernombre='" . $nombre . "',perapellido='" . $apellido . "',perrol='" . $rol . "',pergenero='" . $genero . "',perfechanacimiento='" . $nacimiento . "',perdireccion='" . $direccion . "',pertelefono='" . $telefono . "',percorreo='" . $correo . "' WHERE idpersona='" . $identificacion . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_salones_id_m(SalonesModelo $salones_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $salones_id_m->obtenerCodigoSalon();
        $nombre = $salones_id_m->obtenerNombreSalon();
        $sede = $salones_id_m->obtenerCodigoSede();
        $sql = "UPDATE salones SET salnombre='" . $nombre . "',salcodsede='" . $sede . "' WHERE codsalon='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_sedes_id_m(SedesModelo $sedes_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $sedes_id_m->obtenerCodigoSede();
        $nombre = $sedes_id_m->obtenerNombreSede();
        $direccion = $sedes_id_m->obtenerDireccionSede();
        $telefono = $sedes_id_m->obtenerTelefonoSede();
        $correo = $sedes_id_m->obtenerCorreoSede();
        $centroeducativo = $sedes_id_m->obtenerCodigoCentroEducativo();
        $sql = "UPDATE sedes SET sednombre='" . $nombre . "',seddireccion='" . $direccion . "',sedtelefono='" . $telefono . "',sedcorreo,='" . $correo . "',sedcodcentroeducativo='" . $centroeducativo . "'WHERE codssede='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_sueldos_id_m(SueldosModelo $sueldos_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $sueldos_id_m->obtenerCodigoSueldo();
        $categoria = $sueldos_id_m->obtenerCategoriaSueldo();
        $valor = $sueldos_id_m->obtenerValorSueldo();
        $sql = "UPDATE sueldos SET suecategoria='" . $categoria . "',suevalor='" . $valor . "'WHERE codsueldo='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_tipoactividades_id_m(TipoactividadesModelo $tipoactividades_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $tipoactividades_id_m->obtenerCodigoTipoActividad();
        $nombre = $tipoactividades_id_m->obtenerNombreTipoActividad();
        $descripcion = $tipoactividades_id_m->obtenerDescripcionTipoActividad();
        $sql = "UPDATE tipoactividades SET tipactnombre='" . $nombre . "',tipactdescripcion='" . $descripcion . "'WHERE codtipoactividad='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_tipofaltas_id_m(TipofaltasModelo $tipofaltas_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $tipofaltas_id_m->obtenerCodigoTipoFalta();
        $nombre = $tipofaltas_id_m->obtenerNombreTipoFalta();
        $descripcion = $tipofaltas_id_m->obtenerDescripcionTipoFalta();
        $sql = "UPDATE tipofaltas  SET tipfalnombre='" . $nombre . "',tipfaldescripcio='" . $descripcion . "'WHERE codtipofalta='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    public function actualizar_usuarios_id_m(UsuariosModelo $usuarios_id_m) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $codigo = $usuarios_id_m->obtenerCodigoUsuario();
        $nombre = $usuarios_id_m->obtenerNombreUsuario();
        $contrasena = $usuarios_id_m->obtenerContrasenaUsuario();
        $identificacion = $usuarios_id_m->obtenerIdentificacionPersona();
        $sql = "UPDATE usuarios SET usunombre='" . $nombre . "',usucontrasena='" . $contrasena . "',usuidpersona='" . $identificacion . "'WHERE codusuario='" . $codigo . "'";
        $conexion->consultar_informacion($sql);
        $filasbd = $conexion->obtener_filas();
        $conexion->cerrar_conexion();
        return $filasbd;
    }

    //FUNCIONES CRUD (ELIMINAR)

    public function eliminar_actividades_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM actividades WHERE codactividad='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_acudientes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM acudientes WHERE codacudiente='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_acudientexestudiante_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM acudientexestudiante WHERE codacuest='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_acuerdos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM acuerdos WHERE codacuerdos='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_asignaturas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM asignaturas WHERE codasignatura='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_calificaciones_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM calificaciones WHERE codcalificacion='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_centroseducativos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM centroseducativos WHERE codcentroeducativo='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_controlasistencias_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM controlasistencias WHERE codcontrolasistencia='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_cursos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM cursos WHERE codcurso='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_directora_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM directora WHERE coddirectora='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_docentes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM docentes WHERE coddocente='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_docentexsede_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM docentexsede WHERE coddocentexsede='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_estudiantes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM estudiantes WHERE codestudiante='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_grados_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM grados WHERE codgrado='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_matriculas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM matriculas WHERE codmatricula='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_observador_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM observador WHERE codobservador='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_personas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM personas WHERE idpersona='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_salones_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM salones WHERE codsalon='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_sedes_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM sedes WHERE codsede='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_sueldos_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM sueldos WHERE codsueldo='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_tipoactividades_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM tipoactividades WHERE codtipoactividad='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_tipofaltas_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM tipofaltas WHERE codtipofalta='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

    public function eliminar_usuarios_id_m($id) {
        $conexion = new Conexion();
        $conexion->abrir_conexion();
        $sql = "DELETE FROM usuarios WHERE codusuario='" . $id . "'";
        $conexion->consultar_informacion($sql);
        $resultado = $conexion->obtener_resultados();
        $conexion->cerrar_conexion();
        return $resultado;
    }

}

?>
