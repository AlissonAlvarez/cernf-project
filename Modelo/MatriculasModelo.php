<?php

class MatriculasModelo {

    private $codmatricula;
    private $matnumero;
    private $matfecha;
    private $matanovigencia;
    private $matcodestudiante;
    private $matcodsede;
    private $matcodgrado;
    private $matcodcurso;

    public function __construct($cod_mat, $num_mat, $fec_mat, $vig_mat, $cod_est, $cod_sed, $cod_gra, $cod_cur) {
        $this->codmatricula = $cod_mat;
        $this->matnumero = $num_mat;
        $this->matfecha = $fec_mat;
        $this->matanovigencia = $vig_mat;
        $this->matcodestudiante = $cod_est;
        $this->matcodsede = $cod_sed;
        $this->matcodgrado = $cod_gra;
        $this->matcodcurso = $cod_cur;
    }

    public function obtenerCodigoMatricula() {
        return $this->codmatricula;
    }

    public function obtenerNumeroMatricula() {
        return $this->matnumero;
    }

    public function obtenerFechaMatricula() {
        return $this->matfecha;
    }

    public function obtenerVigenciaMatricula() {
        return $this->matanovigencia;
    }

    public function obtenerCodigoEstudiante() {
        return $this->matcodestudiante;
    }

    public function obtenerCodigoSede() {
        return $this->matcodsede;
    }

    public function obtenerCodigoGrado() {
        return $this->matcodgrado;
    }

    public function obtenerCodigoCurso() {
        return $this->matcodcurso;
    }

}
