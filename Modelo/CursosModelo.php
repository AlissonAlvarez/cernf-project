<?php

class CursosModelo {

    protected $codcurso;
    protected $curnombre;
    protected $curcodsede;
    protected $curcodsalon;
    protected $curcodgrado;

    public function __construct($cod_cur, $nom_cur, $cod_sed, $cod_sal, $cod_gra) {
        $this->codcurso = $cod_cur;
        $this->curnombre = $nom_cur;
        $this->curcodsede = $cod_sed;
        $this->curcodsalon = $cod_sal;
        $this->curcodgrado = $cod_gra;
    }

    public function obtenerCodigoCurso() {
        return $this->codcurso;
    }

    public function obtenerNombreCurso() {
        return $this->curnombre;
    }

    public function obtenerCodigoSede() {
        return $this->curcodsede;
    }

    public function obtenerCodigoSalon() {
        return $this->curcodsalon;
    }

    public function obtenerCodigoGrado() {
        return $this->curcodgrado;
    }

}
