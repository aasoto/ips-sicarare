<?php

require_once "Modelos/usuario.php";
require_once "Modelos/encabezado.php";

class UsuarioControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Usuario;
        $this->modelo2 = new Encabezado;
    }

    public function Inicio(){
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
        require_once "Vistas/encabezado.php";
        require_once "Vistas/usuario/index.php";
        require_once "Vistas/pie.php";
    }

    Public function FormCrear(){
        $e = new Encabezado();
        $e = $this->modelo2->Obtener($_SESSION['USER']);
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

        $documento = $this->modelo->Verificar($_POST['num_doc'],$_POST['user']);    
        if ($documento == 'vacio') {
            $this->modelo->Insertar($u);
            header("location:?c=usuario&a=FormCrear");
        } elseif ($documento == 'existe') {
            echo "<script>
            alert('El número de identificación o nombre de usuario ya está registrado.');
            history.go(-1);
            </script>";
        } 

    }

    function enviarEmail($email, $nombre, $asunto, $cuerpo){
		
		require_once 'PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '587';
		
		$mail->Username = 'Johndoe@gmail.com';
		$mail->Password = 'xxxxxxxxxx';
		
		$mail->setFrom('Johndoe@gmail.com', 'Sicarare Medical Center');
		$mail->addAddress($email, $nombre);
		
		$mail->Subject = $asunto;
		$mail->Body    = $cuerpo;
		$mail->IsHTML(true);
		
		if($mail->send())
		return true;
		else
		return false;
	}

}

?>