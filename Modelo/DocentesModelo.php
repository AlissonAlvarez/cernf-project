<?php

class DocentesModelo {

    protected $coddocente;
    protected $docfechaingreso;
    protected $docvigencia;
    protected $doccodsueldo;
    protected $docidpersona;

    public function __construct($cod_doc, $fec_doc, $vig_doc, $cod_sue, $id_per) {
        $this->coddocente = $cod_doc;
        $this->docfechaingreso = $fec_doc;
        $this->docvigencia = $vig_doc;
        $this->doccodsueldo = $cod_sue;
        $this->docidpersona = $id_per;
    }

    public function obtenerCodigoDocente() {
        return $this->coddocente;
    }

    public function obtenerFechaIngresoDocente() {
        return $this->docfechaingreso;
    }

    public function obtenerVigenciaDocente() {
        return $this->docvigencia;
    }

    public function obtenerCodigoSueldo() {
        return $this->doccodsueldo;
    }

    public function obtenerIdentificacionPersona() {
        return $this->docidpersona;
    }

}
