<?php
include("conexion2.php");
    class mper{
        
        function mper(){}
        
        function selcon($sql){
            $conBD = new conexion();
            $conBD->conectarBD();
            $conBD->ejecon($sql,2);
            $conBD->desconectarBD();
        }

        function selcom($sql){
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

        function selcod($sql){
            $conBD = new conexion();
            $conBD->conectarBD();
            $data = $conBD->ejecon($sql,1);
            $conBD->desconectarBD();
            return $data;
        }

        function insper($tipo_doc, $numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail){
            $sql = "INSERT INTO pacientes(tipo_doc, numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail) VALUES ('$tipo_doc', '$numdoc', '$nom1', '$nom2', '$apellido1', '$apellido2', '$sexo', '$fec_nac', '$e_mail');";
            $this->selcon($sql);    

        }  
        
        function updatepac($numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail){
            $sql = "UPDATE pacientes SET nom1='".$nom1."', nom2='".$nom2."', apellido1='".$apellido1."', apellido2='".$apellido2."', sexo='".$sexo."', fec_nac='".$fec_nac."', e_mail='".$e_mail."' WHERE numdoc='".$numdoc."' ";
            $this->selcom($sql); 
        }

        function selper(){
            $sql="SELECT numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail FROM pacientes;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        function selpac($numdocu){
            $sql="SELECT numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail FROM pacientes WHERE numdoc=$numdocu;";
            
            $data = $this->selcod($sql);
            return $data;
        }

    }
?>