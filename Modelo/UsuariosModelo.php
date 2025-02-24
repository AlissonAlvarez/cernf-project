<?php

class UsuariosModelo {

    protected $codusuario;
    protected $usunombre;
    protected $usucontrasena;
    protected $usuidpersona;

    public function __construct($cod_usu, $nom_usu, $con_usu, $id_per) {
        $this->codusuario = $cod_usu;
        $this->usunombre = $nom_usu;
        $this->usucontrasena = $con_usu;
        $this->usuidpersona = $id_per;
    }

    public function obtenerCodigoUsuario() {
        return $this->codusuario;
    }

    public function obtenerNombreUsuario() {
        return $this->usunombre;
    }

    public function obtenerContrasenaUsuario() {
        return $this->usucontrasena;
    }

    public function obtenerIdentificacionPersona() {
        return $this->usuidpersona;
    }

}
