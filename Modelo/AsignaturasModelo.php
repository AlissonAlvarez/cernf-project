<?php

class AsignaturasModelo {

    protected $codasignatura;
    protected $asinombre;
    protected $asicodgrado;

    public function __construct($cod_asi, $nom_asi, $cod_gra) {
        $this->codasignatura = $cod_asi;
        $this->asinombre = $nom_asi;
        $this->asicodgrado = $cod_gra;
    }

    public function obtenerCodigoAsignatura() {
        return $this->codasignatura;
    }

    public function obtenerNombreAsignatura() {
        return $this->asinombre;
    }

    public function obtenerCodigoGrado() {
        return $this->asicodgrado;
    }

}
