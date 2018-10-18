<?php
session_start();
if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {

    require_once "Modelos/basededatos.php";

    if(!isset($_GET['c'])){
        require_once "Controladores/inicio.controlador.php";
        $controlador = new InicioControlador();
        call_user_func(array($controlador,"Inicio"));
    }else{
        $controlador = $_GET['c'];
        require_once "Controladores/$controlador.controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador = new $controlador;
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador,$accion)); 
    }
}else{
    header('location: ./');
}
?>