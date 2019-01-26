<?php

require_once "Modelos/usuario.php";

class UsuarioControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Usuario;
    }

    public function Inicio(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/usuario/index.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){

        require_once "Vistas/encabezado.php";
        require_once "Vistas/usuario/agregar.php";
        require_once "Vistas/pie.php";
    }

    public function Guardar(){
        $u = new Usuario();
        $u->setUsu_tipo_doc($_POST['tipo_doc']);
	    $u->setUsu_numdoc($_POST['num_doc']);
        $u->setUsu_nom1($_POST['nom1']);
        $u->setUsu_nom2($_POST['nom2']);
	    $u->setUsu_apellido1($_POST['apellido1']);
        $u->setUsu_apellido2($_POST['apellido2']);
        $u->setUsu_sexo($_POST['sexo']);
        $u->setUsu_fec_nac($_POST['fec_nac']);
        $u->setUsu_e_mail($_POST['e_mail']);
        $u->setUsu_user($_POST['user']);
        $u->setUsu_rol($_POST['rol']);
        $u->setUsu_password($_POST['password']);

        $documento = $this->modelo->Verificar($_POST['num_doc']);    
        if ($documento == 'vacio') {
            $this->modelo->Insertar($u);
            header("location:?c=usuario");
        } elseif ($documento == 'existe') {
            echo "<script>
            alert('El número de identificación ya está registrado.');
            window.location= '?c=usuario&a=FormCrear'
            </script>";
        } 

    }

}

?>