<?php

class ObservadorModelo {

    protected $codobservador;
    protected $obsfecha;
    protected $obsnumerobimestre;
    protected $obsobservacion;
    protected $obscodtipofalta;
    protected $obscodestudiante;
    protected $obscoddocente;

    public function __construct($cod_obs, $fec_obs, $bim_obs, $obs_obs, $cod_tfa, $cod_est, $cod_doc) {
        $this->codobservador = $cod_obs;
        $this->obsfecha = $fec_obs;
        $this->obsnumerobimestre = $bim_obs;
        $this->obsobservacion = $obs_obs;
        $this->obscodtipofalta = $cod_tfa;
        $this->obscodestudiante = $cod_est;
        $this->obscoddocente = $cod_doc;
    }

    public function obtenerCodigoObservador() {
        return $this->codobservador;
    }

    public function obtenerFechaObservador() {
        return $this->obsfecha;
    }

    public function obtenerBimestreObservador() {
        return $this->obsnumerobimestre;
    }

    public function obtenerObservacionObservador() {
        return $this->obsobservacion;
    }

    public function obtenerCodigoTipofalta() {
        return $this->obscodtipofalta;
    }

    public function obtenerCodigoEstudiante() {
        return $this->obscodestudiante;
    }

    public function obtenerCodigoDocente() {
        return $this->obscoddocente;
    }

}
