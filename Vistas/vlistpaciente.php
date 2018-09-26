<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("plantilla1.php");
        include ("../controlador/cper.php");
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-content table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th><th>Num. Doc.</th><th>Primer Nombre</th><th>Segundo Nombre</th><th>Primer Apellido</th>
                            <th>Segundo Apellido</th><th> Sexo</th><th>Fec. Nac.</th><th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php for($i=0;$i<count($datper);$i++){ ?>
                            <td class="font-weight-medium">
                                <?php echo $datper[$i]["id"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["numdoc"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["nom1"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["nom2"]; ?>
                            </td> <td>
                            <?php echo $datper[$i]["apellido1"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["apellido2"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["sexo"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["fec_nac"]; ?>
                            </td><td>
                            <?php echo $datper[$i]["e_mail"]; ?>
                            </td>
                        </tr>
                    </tbody>
                </div>
            </div>
        </div>
        <?php
        }         
        include ("plantilla2.php");
    }

    else{
        header('location: ./');
    }
?>