<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("plantilla1.php");
        include ("../controlador/cper.php");
       // include ("../controlador/usuario.php");
        //print_r($_SESSION['USER']);
        ?>
        
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Pacientes</h4>
                </div>
                <a href="../Vistas/vper.php" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Paciente</a>
                <div class="card-content table-responsive">
                    <table class="table table-bordered table-hover">
                    <thead>
                        <th>Documento</th><th>Nombre</th><th> Sexo</th><th>Fecha de Nacimiento</th><th>E-mail</th>
                    </thead>
                        <?php for($i=0;$i<count($datper);$i++){ ?>
                        <tr>
                            <td>
                            <?php echo $datper[$i]["numdoc"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["nom1"]." ".$datper[$i]["nom2"]." ".$datper[$i]["apellido1"]." ".$datper[$i]["apellido2"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["sexo"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["fec_nac"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["e_mail"]; ?>
                            </td>
                        </tr>
                        <?php
			            }
			            ?>
                    </table>
                </div>
            </div>
        </div>
        <?php        
        include ("plantilla2.php");
    }

    else{
        header('location: ./');
    }
?>