<?php

class EstudiantesModelo {

    protected $codestudiante;
    protected $estidpersona;

    public function __construct($cod_est, $id_per) {
        $this->codestudiantet = $cod_est;
        $this->estidpersona = $id_per;
    }

    public function obtenerCodigoEstudiante() {
        return $this->codestudiantet;
    }

    public function obtenerIdentificacionPersona() {
        return $this->estidpersona;
    }

}
