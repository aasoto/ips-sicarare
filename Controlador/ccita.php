<?php
    include("../modelos/mcita.php");
    $obj = new mcita();

    $paciente = isset($_POST["paciente"]) ? $_POST["paciente"]:NULL;
    $area = isset($_POST["area"]) ? $_POST["area"]:NULL;
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"]:NULL;
    $hora = isset($_POST["hora"]) ? $_POST["hora"]:NULL;
    $estado = isset($_POST["estado"]) ? $_POST["estado"]:NULL;
    $estado_pago = isset($_POST["estado_pago"]) ? $_POST["estado_pago"]:NULL;
    $costo = isset($_POST["costo"]) ? $_POST["costo"]:NULL;

    if($paciente && $area && $fecha && $hora && $estado && $estado_pago && $costo){
        $obj->insertar_cita($paciente, $area, $fecha, $hora, $estado, $estado_pago, $costo);
        print "<script>window.location='../Vistas/vcita.php';</script>";
    }

    $datcitas = $obj->listado_citas();
    $inf_pacientes = $obj->consulta_pacientes();
    $inf_medicos = $obj->consulta_medicos();

?>