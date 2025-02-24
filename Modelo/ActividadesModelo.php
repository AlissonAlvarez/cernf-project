<?php

class ActividadesModelo {

    protected $codactividad;
    protected $actfecha;
    protected $actnumerobimestre;
    protected $actcodasignatura;
    protected $actcodtipoactividades;

    public function __construct($cod_act, $fec_act, $bim_act, $cod_asi, $cod_tac) {
        $this->codactividad = $cod_act;
        $this->actfecha = $fec_act;
        $this->actnumerobimestre = $bim_act;
        $this->actcodasignatura = $cod_asi;
        $this->actcodtipoactividades = $cod_tac;
    }

    public function obtenerCodigoActividad() {
        return $this->codactividad;
    }

    public function obtenerFechaActividad() {
        return $this->actfecha;
    }

    public function obtenerBimestreActividad() {
        return $this->actnumerobimestre;
    }

    public function obtenerCodigoAsignatura() {
        return $this->actcodasignatura;
    }

    public function obtenerCodigoTipoActividad() {
        return $this->actcodtipoactividades;
    }

}
