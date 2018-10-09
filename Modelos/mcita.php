<?php
include("conexion2.php");
    class mcita{
        
        function mcita(){}
        
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

        function insertar_cita($paciente, $area, $fecha, $hora, $estado, $estado_pago, $costo, $medico, $usermedico){
            $sql = "INSERT INTO citas(paciente, area, fecha, hora, estado, estado_pago, costo, medico, usermedico) 
            VALUES ('$paciente', '$area', '$fecha', '$hora', '$estado', '$estado_pago', '$costo', '$medico', '$usermedico');";
        $this->selcon($sql);    

        }   

        function listado_citas(){
            $sql="SELECT paciente, area, fecha, hora FROM citas;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        function consulta_pacientes(){
            $sql="SELECT numdoc, nom1, nom2, apellido1, apellido2 FROM pacientes;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        function consulta_medicos(){
            $sql="SELECT * FROM medicos;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        
    }
?>