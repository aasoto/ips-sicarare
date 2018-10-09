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
                <a href="../Vistas/vper.php" type="button" class="btn btn-inverse-primary btn-fw"><i class='mdi mdi-account-plus'></i> Nuevo Paciente</a>
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Pacientes</h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-bordered table-hover">
                    <thead>
                        <th>Documento</th><th>Nombre</th><th> Sexo</th><th>Fec. Nac.</th><th>E-mail</th><th>Acciones</th>
                    </thead>
                        <?php for($i=0;$i<count($datper);$i++){ ?>
                        <tr>
                            <td>
                            <?php echo $datper[$i]["numdoc"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["nom1"]." ".$datper[$i]["nom2"]." ".$datper[$i]["apellido1"]." ".$datper[$i]["apellido2"]; ?>
                            </td><td>
                            <?php
                            $str = $datper[$i]["sexo"];
                            $str = strtoupper($str);
                            ?>
                            <?php echo $str; ?>
                            </td><td>
                            <?php echo $datper[$i]["fec_nac"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["e_mail"]; ?>
                            </td><td>
                            <a href="../Vistas/veditpaciente.php?numdoc=<?php echo $datper[$i]["numdoc"];?>" class="btn btn-icons btn-inverse-warning"><i class="mdi mdi-account-edit"></i></a>
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