<?php

class AcudientesModelo {

    protected $codacudiente;
    protected $acuidpersona;

    public function __construct($cod_acu, $id_per) {
        $this->codacudiente = $cod_acu;
        $this->acuidpersona = $id_per;
    }

    public function obtenerCodigoAcudiente() {
        return $this->codacudiente;
    }

    public function obtenerIdentificacionPersona() {
        return $this->acuidpersona;
    }

}