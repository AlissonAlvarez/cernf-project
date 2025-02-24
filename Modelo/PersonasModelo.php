<?php

class PersonasModelo {

    protected $idpersona;
    protected $pernombre;
    protected $perapellido;
    protected $perrol;
    protected $pergenero;
    protected $perfechanacimiento;
    protected $perdireccion;
    protected $pertelefono;
    protected $percorreo;

    public function __construct($id_per, $nom_per, $ape_per, $rol_per, $gen_per, $fec_per, $dir_per, $tel_per, $cor_per) {
        $this->idpersona = $id_per;
        $this->pernombre = $nom_per;
        $this->perapellido = $ape_per;
        $this->perrol = $rol_per;
        $this->pergenero = $gen_per;
        $this->perfechanacimiento = $fec_per;
        $this->perdireccion = $dir_per;
        $this->pertelefono = $tel_per;
        $this->percorreo = $cor_per;
    }

    public function obtenerIdentificacionPersona() {
        return $this->idpersona;
    }

    public function obtenerNombrePersona() {
        return $this->pernombre;
    }

    public function obtenerApellidoPersona() {
        return $this->perapellido;
    }

    public function obtenerRolPersona() {
        return $this->perrol;
    }

    public function obtenerGeneroPersona() {
        return $this->pergenero;
    }

    public function obtenerFechaNacimientoPersona() {
        return $this->perfechanacimiento;
    }

    public function obtenerDireccionPersona() {
        return $this->perdireccion;
    }

    public function obtenerTelefonoPersona() {
        return $this->pertelefono;
    }

    public function obtenerCorreoPersona() {
        return $this->percorreo;
    }

}

?>