<?php

class SueldosModelo {

    protected $codsueldo;
    protected $suecategoria;
    protected $suevalor;

    public function __construct($cod_sue, $cat_sue, $val_sue) {
        $this->codsueldo = $cod_sue;
        $this->suecategoria = $cat_sue;
        $this->suevalor = $val_sue;
    }

    public function obtenerCodigoSueldo() {
        return $this->codsueldo;
    }

    public function obtenerCategoriaSueldo() {
        return $this->suecategoria;
    }

    public function obtenerValorSueldo() {
        return $this->suevalor;
    }

}
