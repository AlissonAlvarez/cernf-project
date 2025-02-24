<?php

class AcudientexestudianteModelo {

    protected $codacuest;
    protected $axecodacudiente;
    protected $axecodestudiante;

    public function __construct($cod_axe, $cod_acu, $cod_est) {
        $this->codacuest = $cod_axe;
        $this->axecodacudiente = $cod_acu;
        $this->axecodestudiante = $cod_est;
    }

    public function obtenerCodigoAcudientexestudiante() {
        return $this->codacuest;
    }

    public function obtenerCodigoAcudiente() {
        return $this->axecodacudiente;
    }

    public function obtenerCodigoEstudiante() {
        return $this->axecodestudiante;
    }

}
