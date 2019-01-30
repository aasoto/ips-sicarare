<?php 
	
	require_once "Modelos/encabezado.php";

	class perfilcontrolador
	{
		
		private $modelo;

	    public function __CONSTRUCT(){
			$this->modelo2 = new Encabezado;
	    }

	    public function Inicio(){
			$e = new Encabezado();
        	$e = $this->modelo2->Obtener($_SESSION['USER']);
	        require_once "Vistas/encabezado.php";
	        require_once "Vistas/perfil/index.php";
	        require_once "Vistas/pie.php";
	    }
	}






 ?>