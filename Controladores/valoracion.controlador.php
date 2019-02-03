<?php

require_once "Modelos/valoracion.php";
require_once "Modelos/encabezado.php";

class ValoracionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Valoracion;
        $this->modelo2 = new Encabezado;
    }

    public function Inicio(){
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
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
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/valoracion/agregar.php";
        require_once "Vistas/pie.php";
    }

    Public function FormListar(){
        $titulo = "Ver";
        $p = new Valoracion();
        if(isset($_GET['numdoc'])){
            $numdoc=$_GET['numdoc'];
            $nom1=$_GET['nom1'];
            $nom2=$_GET['nom2'];
            $apellido1=$_GET['apellido1'];
            $apellido2=$_GET['apellido2'];
            $titulo = "Ver";
            $nombre = $numdoc." - ".$nom1." ".$nom2." ".$apellido1." ".$apellido2;
        }
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/valoracion/listado.php";
        require_once "Vistas/pie.php";
    }

    Public function FormVer(){
        $titulo = "Ver";
        $p = new Valoracion();
        if(isset($_GET['idcita'])){
            $idcita=$_GET['idcita'];
            $p=$this->modelo->Obtener($idcita);
            $titulo = "Ver";
        }
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/valoracion/consultar.php";
        require_once "Vistas/pie.php";
    }


    public function Guardar(){
        $p = new Valoracion();
        $p->setVal_idcita($_POST['idcita']);
        $date = date("Y-m-d");
        $p->setVal_fec_hoy(date("Y-m-d"));
        $p->setVal_paciente($_POST['paciente']);
        $p->setVal_peso($_POST['peso']);
        $p->setVal_talla($_POST['talla']);
        $p->setVal_tipo_sang($_POST['tipo_sang']);
        $p->setVal_rh($_POST['rh']);
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
        $p->setVal_enfer($_POST['enfer']);

        $this->modelo->Insertar($p);

        header("location:?c=cita");
    }

}
