<?php
include("conexion2.php");
    class mmedico{
        
        function mmedico(){}
        
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

        function insertar_medico($numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail, $direc, $telefono, $estado, $area){
            $sql = "INSERT INTO medicos(numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail, direc, telefono, estado, area) VALUES 
            ('$numdoc', '$nom1', '$nom2', '$apellido1', '$apellido2', '$sexo', '$fec_nac', '$e_mail', '$direc', '$telefono', '$estado', '$area');";
        $this->selcon($sql);    

        }   

        function listado_medicos(){
            $sql="SELECT id, numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail FROM medicos;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        function consulta_areas(){
            $sql="SELECT area_nom FROM areas;";
            
            $data = $this->selcot($sql);
            return $data;
        }
    }
?>