<?php
    include("../modelos/mcita.php");
    $obj = new mcita();

    $paciente = isset($_POST["paciente"]) ? $_POST["paciente"]:NULL;
    $medico = isset($_POST["medico"]) ? $_POST["medico"]:NULL;
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]:NULL;
    $hora = isset($_POST["hora"]) ? $_POST["hora"]:NULL;
    $estado = isset($_POST["estado"]) ? $_POST["estado"]:NULL;
    $estado_pago = isset($_POST["estado_pago"]) ? $_POST["estado_pago"]:NULL;
    $costo = isset($_POST["costo"]) ? $_POST["costo"]:NULL;
    
    $datcitas = $obj->listado_citas();
    $inf_pacientes = $obj->consulta_pacientes();
    $inf_medicos = $obj->consulta_medicos();
    
    if($paciente && $medico && $fecha && $hora && $estado && $estado_pago && $costo){
        for($i=0;$i<count($inf_medicos);$i++){
            if($medico == ($inf_medicos[$i]["nom1"]." ".$inf_medicos[$i]["nom2"]." ".$inf_medicos[$i]["apellido1"]." ".$inf_medicos[$i]["apellido2"])){
               $usermedico = $inf_medicos[$i]["user"];
               $area = $inf_medicos[$i]["area"];
            } 
        } 
        $obj->insertar_cita($paciente, $area, $fecha, $hora, $estado, $estado_pago, $costo, $medico, $usermedico);
        ?>
        <script>
        alert("Cita registrada...");
        </script>
        <?php
        print "<script>window.location='../Vistas/vcita.php';</script>";
    }

    

?>