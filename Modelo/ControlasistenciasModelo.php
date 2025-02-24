<?php

class ControlasistenciasModelo {

    protected $codcontrolasistencia;
    protected $cafechahora;
    protected $caestado;
    protected $canumerobimestre;
    protected $caobservacion;
    protected $cacodestudiante;
    protected $cacoddocente;

    public function __construct($cod_cas, $fec_cas, $est_cas, $bim_cas, $obs_cas, $cod_est, $cod_doc) {
        $this->codcontrolasistencia = $cod_cas;
        $this->cafechahora = $fec_cas;
        $this->caestado = $est_cas;
        $this->canumerobimestre = $bim_cas;
        $this->caobservacion = $obs_cas;
        $this->cacodestudiante = $cod_est;
        $this->cacoddocente = $cod_doc;
    }

    public function obtenerCodigoControlAsistencia() {
        return $this->codcontrolasistencia;
    }

    public function obtenerFechaControlAsistencia() {
        return $this->cafechahora;
    }

    public function obtenerEstadoControlAsistencia() {
        return $this->caestado;
    }

    public function obtenerBimestreControlAsistencia() {
        return $this->canumerobimestre;
    }

    public function obtenerObservacionControlAsistencia() {
        return $this->caobservacion;
    }

    public function obtenerCodigoEstudiante() {
        return $this->cacodestudiante;
    }

    public function obtenerCodigoDocente() {
        return $this->cacoddocente;
    }

}
