<?php

class TipoactividadesModelo {

    protected $codtipoactividad;
    protected $tipactnombre;
    protected $tipactdescripcion;

    public function __construct($cod_act, $nom_act, $des_act) {
        $this->codtipoactividad = $cod_act;
        $this->tipactnombre = $nom_act;
        $this->tipactdescripcion = $des_act;
    }

    public function obtenerCodigoTipoActividad() {
        return $this->codtipoactividad;
    }

    public function obtenerNombreTipoActividad() {
        return $this->tipactnombre;
    }

    public function obtenerDescripcionTipoActividad() {
        return $this->tipactdescripcion;
    }

}
