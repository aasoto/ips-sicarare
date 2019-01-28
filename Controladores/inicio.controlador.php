<?php

require_once "Modelos/inicio.php";

class InicioControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Inicio;
    }

    public function Inicio(){
        $bd = BasedeDatos::conectar();
        $i = new Inicio();
        $i = $this->modelo->Contarcita();
        require_once "Vistas/encabezado.php";
        require_once "Vistas/inicio/principal.php";
        require_once "Vistas/pie.php";
    }

}