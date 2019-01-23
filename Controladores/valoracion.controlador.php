<?php

require_once "Modelos/valoracion.php";

class ValoracionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Valoracion;
    }

    public function Inicio(){
        require_once "Vistas/encabezado.php";
        require_once "Vistas/valoracion/agregar.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){
        $titulo = "Ver";
        $p = new Valoracion();
        if(isset($_GET['numdoc'])){
            $p=$_GET['numdoc'];
            $q=$_GET['idcita'];
            $titulo = "Registrar";
        }
        require_once "Vistas/encabezado.php";
        require_once "Vistas/valoracion/agregar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $p = new Valoracion();
        $p->setVal_idcita($_POST['idcita']);
        $date = time();
        $p->setVal_fec_hoy(date_format($date, 'Y-m-d H:i:s'));
        $p->setVal_paciente($_POST['paciente']);
        $p->setVal_peso($_POST['peso']);
        $p->setVal_talla($_POST['talla']);
	    $p->setVal_f_cardiaca($_POST['f_cardiaca']);
	    $p->setVal_f_respiratoria($_POST['f_respiratoria']);
        $p->setVal_p_arterial($_POST['p_arterial']);
        $p->setVal_temp($_POST['temp']);
	    $p->setVal_saturacion02($_POST['saturacion02']);
        $p->setVal_r_an_fis($_POST['r_an_fis']);
        $p->setVal_r_exa_diag($_POST['r_exa_diag']);
        $p->setVal_diagnostico($_POST['diagnostico']);
        $p->setVal_compli($_POST['compli']);
        $p->setVal_trat_aplic($_POST['trat_aplic']);

        $this->modelo->Insertar($p);

        header("location:?c=cita");
    }

}