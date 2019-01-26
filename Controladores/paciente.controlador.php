<?php

require_once "Modelos/paciente.php";

class PacienteControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Paciente;
    }

    public function Inicio(){
        require_once "Vistas/encabezado.php";
        require_once "Vistas/paciente/index.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){
        $titulo = "Registrar";
        $p = new Paciente();
        if(isset($_GET['numdoc'])){
            $p=$this->modelo->Obtener($_GET['numdoc']);
            $titulo = "Modificar";
        }
        require_once "Vistas/encabezado.php";
        require_once "Vistas/paciente/agregar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $p = new Paciente();
        $p->setPac_id(intval($_POST['id']));
        $p->setPac_numdoc($_POST['numdoc']);
	    $p->setPac_nom1($_POST['nom1']);
	    $p->setPac_nom2($_POST['nom2']);
        $p->setPac_apellido1($_POST['apellido1']);
        $p->setPac_apellido2($_POST['apellido2']);
	    $p->setPac_sexo($_POST['sexo']);
        $p->setPac_fec_nac($_POST['fec_nac']);
        $p->setPac_e_mail($_POST['e_mail']);
        $p->setPac_tipo_doc($_POST['tipo_doc']);

        
        if ($p->getPac_id() > 0) { 
            $documento = $this->modelo->Verificar($p->getPac_numdoc());
            if ($documento == 'vacio') {
                $this->modelo->Actualizar($p);
                header("location:?c=paciente");
            } elseif ($documento == 'existe') {
                echo "<script>
                alert('El número de identificación al que desea cambiar ya está registrado.');
                window.location= '?c=paciente'
                </script>";
            }    
        } else{
            $documento = $this->modelo->Verificar($_POST['numdoc']);    
            if ($documento == 'vacio') {
                $this->modelo->Insertar($p);
                header("location:?c=paciente");
            } elseif ($documento == 'existe') {
                echo "<script>
                alert('El número de identificación ya está registrado.');
                window.location= '?c=paciente'
                </script>";
            } 
        }
    }

}