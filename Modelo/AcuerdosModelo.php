<?php

class AcuerdosModelo {

    protected $codacuerdos;
    protected $acutipo;
    protected $acuobservacion;
    protected $acucodobservador;

    public function __construct($cod_acu, $tip_acu, $obs_acu, $cod_obs) {
        $this->codacuerdos = $cod_acu;
        $this->acutipo = $tip_acu;
        $this->acuobservacion = $obs_acu;
        $this->acucodobservador = $cod_obs;
    }

    public function obtenerCodigoAcuerdo() {
        return $this->codacuerdos;
    }

    public function obtenerTipoAcuerdo() {
        return $this->acutipo;
    }

    public function obtenerObservacionAcuerdo() {
        return $this->acuobservacion;
    }

    public function obtenerCodigoObservador() {
        return $this->acucodobservador;
    }

}
