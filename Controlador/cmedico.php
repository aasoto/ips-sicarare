<?php
    include("../modelos/mmedico.php");
    $obj = new mmedico();
    $numdoc = isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
    $nom1 = isset($_POST["nom1"]) ? $_POST["nom1"]:NULL;
    $nom2 = isset($_POST["nom2"]) ? $_POST["nom2"]:NULL;
    $apellido1 = isset($_POST["apellido1"]) ? $_POST["apellido1"]:NULL;
    $apellido2 = isset($_POST["apellido2"]) ? $_POST["apellido2"]:NULL;
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"]:NULL;
    $fec_nac = isset($_POST["fec_nac"]) ? $_POST["fec_nac"]:NULL;
    $e_mail = isset($_POST["e_mail"]) ? $_POST["e_mail"]:NULL;
    $direc = isset($_POST["direc"]) ? $_POST["direc"]:NULL;
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"]:NULL;
    $estado = isset($_POST["estado"]) ? $_POST["estado"]:NULL;
    $area = isset($_POST["area"]) ? $_POST["area"]:NULL;

    
    if($numdoc && $nom1 && $apellido1 && $apellido2 && $sexo && $fec_nac && $e_mail && $direc && $telefono && $estado && $area){
        $obj->insertar_medico($numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail, $direc, $telefono, $estado, $area);
    }

    $datper = $obj->listado_medicos();
    $inf_area = $obj->consulta_areas();
?>