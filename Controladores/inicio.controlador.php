<?php


class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){

    }

    public function Inicio(){
        $bd = BasedeDatos::conectar();
        require_once "Vistas/encabezado.php";
        require_once "Vistas/inicio/principal.php";
        require_once "Vistas/pie.php";
    }




}