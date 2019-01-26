<?php

require_once "Modelos/medico.php";

class MedicoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Medico;
    }

    public function Inicio(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/medico/index.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/medico/agregar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $m = new Medico();
        $m->setMed_tipo_doc($_POST['tipo_doc']);
	    $m->setMed_numdoc($_POST['numdoc']);
        $m->setMed_nom1($_POST['nom1']);
        $m->setMed_nom2($_POST['nom2']);
	    $m->setMed_apellido1($_POST['apellido1']);
        $m->setMed_apellido2($_POST['apellido2']);
        $m->setMed_sexo($_POST['sexo']);
        $m->setMed_fec_nac($_POST['fec_nac']);
        $m->setMed_direc($_POST['direc']);
        $m->setMed_e_mail($_POST['e_mail']);
        $m->setMed_telefono($_POST['telefono']);
        $m->setMed_estado($_POST['estado']);
        $m->setMed_user($_POST['user']);
        $m->setMed_password($_POST['password']);
        $m->setMed_area($_POST['area']);

        
        $documento = $this->modelo->Verificar($_POST['numdoc']);    
        if ($documento == 'vacio') {
            $this->modelo->Insertar($m);
            header("location:?c=medico");
        } elseif ($documento == 'existe') {
            echo "<script>
            alert('El número de identificación ya está registrado.');
            window.location= '?c=medico&a=FormCrear'
            </script>";
        } 

    }

}