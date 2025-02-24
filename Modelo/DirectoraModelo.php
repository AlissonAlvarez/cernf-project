<?php

class DirectoraModelo {

    protected $coddirectora;
    protected $diridpersona;
    protected $dircodcentroeducativo;
    protected $dircodsueldo;

    public function __construct($cod_dir, $id_per, $cod_cen, $cod_sue) {
        $this->coddirectora = $cod_dir;
        $this->diridpersona = $id_per;
        $this->dircodcentroeducativo = $cod_cen;
        $this->dircodsueldo = $cod_sue;
    }

    public function obtenerCodigoDirectora() {
        return $this->coddirectora;
    }

    public function obtenerIdentificacionPersona() {
        return $this->diridpersona;
    }

    public function obtenerCodigoCentroEducativo() {
        return $this->dircodcentroeducativo;
    }

    public function obtenerCodigoSueldo() {
        return $this->dircodsueldo;
    }

}
