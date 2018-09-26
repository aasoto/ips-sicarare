<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("plantilla1.php");
        include ("../controlador/ccita.php");
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-content table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Paciente</th><th>Area - Medico</th><th>Fecha</th><th>Hora</th><th>Estado</th>
                            <th>Estado de Pago</th><th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php for($i=0;$i<count($datcitas);$i++){ ?>
                            <td class="font-weight-medium">
                            <?php echo $datcitas[$i]["paciente"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["area"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["fecha"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["hora"]; ?>
                            </td> <td>
                            <?php echo $datcitas[$i]["estado"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["estado_pago"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["costo"]; ?>
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