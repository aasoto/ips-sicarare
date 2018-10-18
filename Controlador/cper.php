<?php
    include("../modelos/mper.php");
    $obj = new mper();   
    $tipo_doc = isset($_POST["tipo_doc"]) ? $_POST["tipo_doc"]:NULL;
    $numdoc = isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
    $nom1 = isset($_POST["nom1"]) ? $_POST["nom1"]:NULL;
    $nom2 = isset($_POST["nom2"]) ? $_POST["nom2"]:NULL;
    $apellido1 = isset($_POST["apellido1"]) ? $_POST["apellido1"]:NULL;
    $apellido2 = isset($_POST["apellido2"]) ? $_POST["apellido2"]:NULL;
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"]:NULL;
    $fec_nac = isset($_POST["fec_nac"]) ? $_POST["fec_nac"]:NULL;
    $e_mail = isset($_POST["e_mail"]) ? $_POST["e_mail"]:NULL;

    if($tipo_doc && $numdoc && $nom1 && $apellido1 && $apellido2 && $sexo && $fec_nac && $e_mail){
        $obj->insper($tipo_doc, $numdoc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail);
        ?>
        <script>
        alert("Paciente registrado...");
        </script>
        <?php
        print "<script>window.location='../Vistas/inicio_admin.php';</script>";
    }
    
        function lista(){
            $obj = new mper();  
            return $datper = $obj->selper();
        }
?>