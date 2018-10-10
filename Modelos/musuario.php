<?php
include("conexion2.php");
    class musuario{
        
        function musuario(){}
        
        function selcon($sql){
            $conBD = new conexion();
            $conBD->conectarBD();
            $conBD->ejecon($sql,2);
            $conBD->desconectarBD();
        }

        function selcot($sql){
            $conBD = new conexion();
            $conBD->conectarBD();
            $data = $conBD->ejecon($sql,1);
            $conBD->desconectarBD();
            return $data;
        }

        function insertar_user($tipo_doc, $num_doc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail, $user, $password, $rol){
            $sql = "INSERT INTO usuarios(tipo_doc, num_doc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail, user, password, rol) 
            VALUES ('$tipo_doc', '$num_doc', '$nom1', '$nom2', '$apellido1', '$apellido2', '$sexo', '$fec_nac', '$e_mail', '$user', '$password', '$rol');";
        $this->selcon($sql);    

        }   

        function listado_user(){
            $sql="SELECT * FROM usuarios;";
            $data = $this->selcot($sql);
            return $data;
        }

        function consulta_rol(){
            $sql="SELECT * FROM tipo_rol;";
            $data = $this->selcot($sql);
            return $data;
        }

        function consulta_medicos(){
            $sql="SELECT area, nom1, nom2, apellido1, apellido2 FROM medicos;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        
    }
?>