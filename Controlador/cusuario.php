<?php
    include("../modelos/musuario.php");
    $obj = new musuario();
    $tipo_doc = isset($_POST["tipo_doc"]) ? $_POST["tipo_doc"]:NULL;
    $num_doc = isset($_POST["num_doc"]) ? $_POST["num_doc"]:NULL;
    $nom1 = isset($_POST["nom1"]) ? $_POST["nom1"]:NULL;
    $nom2 = isset($_POST["nom2"]) ? $_POST["nom2"]:NULL;
    $apellido1 = isset($_POST["apellido1"]) ? $_POST["apellido1"]:NULL;
    $apellido2 = isset($_POST["apellido2"]) ? $_POST["apellido2"]:NULL;
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"]:NULL;
    $fec_nac = isset($_POST["fec_nac"]) ? $_POST["fec_nac"]:NULL;
    $e_mail = isset($_POST["e_mail"]) ? $_POST["e_mail"]:NULL;
    $user = isset($_POST["user"]) ? $_POST["user"]:NULL;
    $password = isset($_POST["password"]) ? $_POST["password"]:NULL;
    $rol = isset($_POST["rol"]) ? $_POST["rol"]:NULL;

    if($tipo_doc && $num_doc && $nom1 && $apellido1 && $sexo && $fec_nac && $e_mail && $user && $password && $rol){
        $obj->insertar_user($tipo_doc, $num_doc, $nom1, $nom2, $apellido1, $apellido2, $sexo, $fec_nac, $e_mail, $user, $password, $rol);
        ?>
        <script>
        alert("Usuario registrado...");
        </script>
        <?php
        print "<script>window.location='../Vistas/vusuario.php';</script>";
    }

    $inf_rol = $obj->consulta_rol();
    $datper = $obj->listado_user();
?>