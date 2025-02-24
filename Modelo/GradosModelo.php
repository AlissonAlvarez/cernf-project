<?php

class GradosModelo {

    protected $codgrado;
    protected $granombre;

    public function __construct($cod_gra, $nom_gra) {
        $this->codgrado = $cod_gra;
        $this->granombre = $nom_gra;
    }

    public function obtenerCodigoGrado() {
        return $this->codgrado;
    }

    public function obtenerNombreGrado() {
        return $this->granombre;
    }

}
