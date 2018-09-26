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

        function insertar_cita($paciente, $area, $fecha, $hora, $estado, $estado_pago, $costo){
            $sql = "INSERT INTO citas(paciente, area, fecha, hora, estado, estado_pago, costo) 
            VALUES ('$paciente', '$area', '$fecha', '$hora', '$estado', '$estado_pago', '$costo');";
        echo $sql;
        $this->selcon($sql);    

        }   

        function listado_citas(){
            $sql="SELECT paciente, area, fecha, hora, estado, estado_pago, costo FROM citas;";
            
            $data = $this->selcot($sql);
            return $data;
        }

        function consulta_pacientes(){
            $sql="SELECT numdoc, nom1, nom2, apellido1, apellido2 FROM pacientes;";
            
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