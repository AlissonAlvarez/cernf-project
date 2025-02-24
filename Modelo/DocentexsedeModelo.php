<?php

class DocentexsedeModelo {

    private $coddocentexsede;
    private $dxscoddocente;
    private $dxscodsede;

    public function __construct($cod_dxs, $cod_doc, $cod_sed) {
        $this->coddocentexsede = $cod_dxs;
        $this->dxscoddocente = $cod_doc;
        $this->dxscodsede = $cod_sed;
    }

    public function obtenerCodigoDocentexSede() {
        return $this->coddocentexsede;
    }

    public function obtenerCodigoDocente() {
        return $this->dxscoddocente;
    }

    public function obtenerCodigoSede() {
        return $this->dxscodsede;
    }

}
