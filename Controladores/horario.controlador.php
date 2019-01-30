<?php

require_once "Modelos/horario.php";
require_once "Modelos/encabezado.php";

class HorarioControlador{

private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Horario;
        $this->modelo2 = new Encabezado;
    }

    public function Inicio(){
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/horario/index.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){
        $titulo = "Registrar";
        $h = new Horario();
        if(isset($_GET['id'])){
            $h=$this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/horario/agregar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $h = new Horario();
        $h->setHor_id(intval($_POST['id']));
        $h->setHor_area($_POST['area']);
        $h->setHor_horaini($_POST['horaini']);
        $h->setHor_horafin($_POST['horafin']);

        $h->getHor_id() > 0 ?
        $this->modelo->Actualizar($h) :
        $this->modelo->Insertar($h);

        header("location:?c=horario");
    }

}