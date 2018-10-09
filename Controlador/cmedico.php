<?php
    include("../modelos/mmedico.php");
    $obj = new mmedico();
    $tipo_doc = isset($_POST["tipo_doc"]) ? $_POST["tipo_doc"]:NULL;
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
    $user = isset($_POST["user"]) ? $_POST["user"]:NULL;
    $password = isset($_POST["password"]) ? $_POST["password"]:NULL;

    
    if($tipo_doc && $numdoc && $nom1 && $apellido1 && $apellido2 && $sexo && $fec_nac && $e_mail && $direc && $telefono && $estado && $area && $user && $password){
        $obj->insertar_medico($tipo_doc, $numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail, $direc, $telefono, $estado, $area, $user, $password);
        ?>
        <script>
        alert("Medico registrado...");
        </script>
        <?php
        print "<script>window.location='../Vistas/vmedico.php';</script>";
    }

    $datper = $obj->listado_medicos();
    $inf_area = $obj->consulta_areas();
?>