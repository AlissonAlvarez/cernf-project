<?php

class SedesModelo {

    protected $codsede;
    protected $sednombre;
    protected $seddireccion;
    protected $sedtelefono;
    protected $sedcorreo;
    protected $sedcodcentroeducativo;

    public function __construct($cod_sed, $nom_sed, $dir_sed, $tel_sed, $cor_sed, $cod_cen) {
        $this->codsede = $cod_sed;
        $this->sednombre = $nom_sed;
        $this->seddireccion = $dir_sed;
        $this->sedtelefono = $tel_sed;
        $this->sedcorreo = $cor_sed;
        $this->sedcodcentroeducativo = $cod_cen;
    }

    public function obtenerCodigoSede() {
        return $this->codsede;
    }

    public function obtenerNombreSede() {
        return $this->sednombre;
    }

    public function obtenerDireccionSede() {
        return $this->seddireccion;
    }

    public function obtenerTelefonoSede() {
        return $this->sedtelefono;
    }

    public function obtenerCorreoSede() {
        return $this->sedcorreo;
    }

    public function obtenerCodigoCentroEducativo() {
        return $this->sedcodcentroeducativo;
    }

}
