<?php

require_once "Modelos/inicio.php";
require_once "Modelos/encabezado.php";

class InicioControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Inicio;
        $this->modelo2 = new Encabezado;
    }

    public function Inicio(){
        $bd = BasedeDatos::conectar();
        $i = new Inicio();
        $i = $this->modelo->Contarcita();
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/inicio/principal.php";
        require_once "Vistas/pie.php";
    }

}