<?php

class CentroseducativosModelo {

    protected $codcentroeducativo;
    protected $cennit;
    protected $cennombre;
    protected $cendireccion;
    protected $centelefono;
    protected $cencorreo;

    public function __construct($cod_cen, $nit_cen, $nom_cen, $dir_cen, $tel_cen, $cor_cen) {
        $this->codcentroeducativo = $cod_cen;
        $this->cennit = $nit_cen;
        $this->cennombre = $nom_cen;
        $this->cendireccion = $dir_cen;
        $this->centelefono = $tel_cen;
        $this->cencorreo = $cor_cen;
    }

    public function obtenerCodigoCentroEducativo() {
        return $this->codcentroeducativo;
    }

    public function obtenerNitCentroEducativo() {
        return $this->cennit;
    }

    public function obtenerNombreCentroEducativo() {
        return $this->cennombre;
    }

    public function obtenerDireccionentroEducativo() {
        return $this->cendireccion;
    }

    public function obtenerTelefonoentroEducativo() {
        return $this->centelefono;
    }

    public function obtenerCorreoentroEducativo() {
        return $this->cencorreo;
    }

}
