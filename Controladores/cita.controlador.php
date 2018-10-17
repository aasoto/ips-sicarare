<?php

require_once "Modelos/cita.php";

class CitaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Cita;
    }

    public function Inicio(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/cita/index.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/cita/agregar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $c = new Cita();
        $c->setCit_paciente($_POST['paciente']);
	    $c->setCit_fecha($_POST['fecha']);
        $c->setCit_hora($_POST['hora']);
        $c->setCit_estado($_POST['estado']);
	    $c->setCit_estado_pago($_POST['estado_pago']);
        $c->setCit_costo($_POST['costo']);
        $c->setCit_medico($_POST['medico']);
        foreach ($this->modelo->ListarMedicos() as $m):
            if($_POST['medico'] == ($m->nom1." ".$m->nom2." ".$m->apellido1." ".$m->apellido2)){
                $c->setCit_area($m->area);
                $c->setCit_usermedico($m->user);
             } 
        endforeach;
        
        $this->modelo->Insertar($c);

        header("location:?c=cita");
    }

}