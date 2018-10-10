<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        
        include ("plantilla1.php");
        include ("../controlador/ccita.php");
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Fecha* </label>
                            <div class="col-sm-8">
                                <input type="date" name="fecha2" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> class="form-control" id="inputEmail1" placeholder="Fecha">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-success mr-2" onclick="consulta_cita_medico_dia(fecha);">Consultar Citas</button>                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Mis Citas </h4>
                </div>
                <div class="card-content table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                            <th>Paciente</th><th>Fecha</th><th>Hora</th>
                    </thead>
                        <?php for($i=0;$i<count($cita_medico);$i++){ ?>
                        <tr>
                            <td>
                            <?php echo $cita_medico[$i]["paciente"]; ?>
                            </td><td>
                            <?php echo $cita_medico[$i]["fecha"]; ?>
                            </td><td>
                            <?php echo $cita_medico[$i]["hora"]; ?>
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