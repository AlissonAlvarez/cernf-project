<?php

class SalonesModelo {

    protected $codsalon;
    protected $salnombre;
    protected $salcodsede;

    public function __construct($cod_sal, $nom_sal, $cod_sed) {
        $this->codsalon = $cod_sal;
        $this->salnombre = $nom_sal;
        $this->salcodsede = $cod_sed;
    }

    public function obtenerCodigoSalon() {
        return $this->codsalon;
    }

    public function obtenerNombreSalon() {
        return $this->salnombre;
    }

    public function obtenerCodigoSede() {
        return $this->salcodsede;
    }

}
