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

        function selcot($sql){
            $conBD = new conexion();
            $conBD->conectarBD();
            $data = $conBD->ejecon($sql,1);
            $conBD->desconectarBD();
            return $data;
        }

        function insper($numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail){
            $sql = "INSERT INTO pacientes(numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail) VALUES ('$numdoc', '$nom1', '$nom2', '$apellido1', '$apellido2', '$sexo', '$fec_nac', '$e_mail');";
            $this->selcon($sql);    

        }  
        
        public function updateper($numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail){
            $sql = "UPDATE pacientes SET nom1='".$nom1."', nom2='".$nom2."', apellido1='".$apellido1."', apellido2='".$apellido2."', sexo='".$sexo."', fec_nac='".$fec_nac."', e_mail='".$e_mail."' where numdoc=$this->numdoc";
            $this->selcon($sql); 
        }

        function selper(){
            $sql="SELECT numdoc, nom1, nom2, apellido1, apellido2, sexo, fec_nac, e_mail FROM pacientes;";
            
            $data = $this->selcot($sql);
            return $data;
        }
    }
?>