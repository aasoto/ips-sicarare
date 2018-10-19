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
        $titulo = "Registrar";
        $c = new Cita();
        if(isset($_GET['id'])){
            $c=$this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }
        require_once "Vistas/encabezado.php";
        require_once "Vistas/cita/agregar.php";
        require_once "Vistas/pie.php";
    }

    Public function FormConsultar(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/cita/consultar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $c = new Cita();
        $c->setCit_id(intval($_POST['id']));
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

        $c->getCit_id() > 0 ?
        $this->modelo->Actualizar($c) :
        $this->modelo->Insertar($c);

        header("location:?c=cita");
    }

    public function Consulta(){
        $usuario = $_SESSION['USER'];
        if (isset($_POST['buscar'])){
            $fecha_cita = isset($_POST["fecha2"]) ? $_POST["fecha2"]:NULL;
            $r = $this->modelo->ListarCitaMedico2($usuario, $fecha_cita);
        }else{
            $r = $this->modelo->ListarCitaMedico($usuario);
        }
        return $r;
    }
    

}

/*if (isset($_POST['buscar'])){
    $fecha_cita = isset($_POST["fecha2"]) ? $_POST["fecha2"]:NULL;
    $usuario = $_SESSION['USER'];
    $r = ListarCitaMedico2($fecha_cita, $usuario);
}else{
    $r = ListarCitaMedico($usuario);
}*/