<?php

class CalificacionesModelo {

    protected $codcalificacion;
    protected $calfecha;
    protected $calvalor;
    protected $calcoddocente;
    protected $calcodactividad;
    protected $calcodestudiante;

    public function __construct($cod_cal, $fec_cal, $val_cal, $cod_doc, $cod_act, $cod_est) {
        $this->codcalificacion = $cod_cal;
        $this->calfecha = $fec_cal;
        $this->calvalor = $val_cal;
        $this->calcoddocente = $cod_doc;
        $this->calcodactividad = $cod_act;
        $this->calcodestudiante = $cod_est;
    }

    public function obtenerCodigoCalificacion() {
        return $this->codcalificacion;
    }

    public function obtenerFechaCalificacion() {
        return $this->calfecha;
    }

    public function obtenerValorCalificacion() {
        return $this->calvalor;
    }

    public function obtenerCodigoDocente() {
        return $this->calcoddocente;
    }

    public function obtenerCodigoActividad() {
        return $this->calcodactividad;
    }

    public function obtenerCodigoEstudiante() {
        return $this->calcodestudiante;
    }

}
