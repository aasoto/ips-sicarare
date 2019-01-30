<?php

require_once "Modelos/encabezado.php";

class EncabezadoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Encabezado;
    }

}