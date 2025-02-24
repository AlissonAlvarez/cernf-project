<?php

class TipofaltasModelo {

    protected $codtipofalta;
    protected $tipfalnombre;
    protected $tipfaldescripcion;

    public function __construct($cod_tfa, $nom_tfa, $des_tfa) {
        $this->codtipofalta = $cod_tfa;
        $this->tipfalnombre = $nom_tfa;
        $this->tipfaldescripcion = $des_tfa;
    }

    public function obtenerCodigoTipoFalta() {
        return $this->codtipofalta;
    }

    public function obtenerNombreTipoFalta() {
        return $this->tipfalnombre;
    }

    public function obtenerDescripcionTipoFalta() {
        return $this->tipfaldescripcion;
    }

}
