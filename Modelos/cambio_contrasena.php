<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class cambio_contrasena{
    private $conexion;
    function __construct() {
        require_once  ('conexion2.php');
        $this->conexion = new conexion();
        $this->conexion->conectarBD();
    }
    
    function listar_usuario($usuario){
        $sql="SELECT * FROM usuarios where usuario = '$usuario?;";
        $data = $this->selcot($sql);
        return $data;
    }
    
    function selcot($sql){
        $conBD = new conexion();
        $conBD->conectarBD();
        $data = $conBD->ejecon($sql,1);
        $conBD->desconectarBD();
        return $data;
    }
    
    function buscar_uuario($usuario, $contrasena){
        $sql = "SELECT * FROM USUARIOS WHERE user = '$usuario' AND password = '$contrasena'";
        $resultado = $this->selcot($sql);
        return $resultado;
            
    }
        
    function  cambiar_contrasena($contrasena, $id){
        $sql = "UPDATE USUARIOS SET CONTRASENA = '$contrasena' WHERE ID = '$id'";
        $resultado = $this->selcot($sql);
        return $resultado;
    }
        
        
    }
    
?>





