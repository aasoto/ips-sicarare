<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        
        include ("plantilla1.php");
        include ("../controlador/ccita.php");
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Citas</h4>
                </div>
                <a href="../Vistas/vcita.php" class="btn btn-default"><i class='fa fa-male'></i> Nueva Cita</a>
                <a href="../Vistas/vlistadocitasxmed.php" class="btn btn-default"><i class='fa fa-male'></i> Ver Mis Citas</a>
                <div class="card-content table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                            <th>Paciente</th><th>Area - Medico</th><th>Fecha</th><th>Hora</th>
                    </thead>
                        <?php for($i=0;$i<count($datcitas);$i++){ ?>
                        <tr>
                            <td>
                            <?php echo $datcitas[$i]["paciente"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["area"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["fecha"]; ?>
                            </td><td>
                            <?php echo $datcitas[$i]["hora"]; ?>
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