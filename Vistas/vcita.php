<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("../controlador/ccita.php");
        include ("plantilla1.php");
        ?>
        <div class="main-panel">
            <div class="row">
            <div class="col-md-10">
                <h1>Nueva Cita</h1>
                <form class="form-horizontal" method="post" id="addproduct" action="../controlador/ccita.php" role="form">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Paciente</label>
                    <div class="col-lg-10">
                    <select name="paciente" class="form-control" required>
                    <option value="">-- SELECCIONE --</option>
                        <?php for($i=0;$i<count($inf_pacientes);$i++){?>
                        <option value="<?php echo $inf_pacientes[$i]["numdoc"]." - ".$inf_pacientes[$i]["nom1"]." ".$inf_pacientes[$i]["nom2"]." ".$inf_pacientes[$i]["apellido1"]." ".$inf_pacientes[$i]["apellido2"]; ?>"><?php echo $inf_pacientes[$i]["numdoc"]." - ".$inf_pacientes[$i]["nom1"]." ".$inf_pacientes[$i]["nom2"]." ".$inf_pacientes[$i]["apellido1"]." ".$inf_pacientes[$i]["apellido2"]; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Medico</label>
                    <div class="col-lg-10">
                    <select name="area" class="form-control" required>
                    <option value="">-- SELECCIONE --</option>
                        <?php for($i=0;$i<count($inf_medicos);$i++){?>
                        <option value="<?php echo $inf_medicos[$i]["area"]." - ".$inf_medicos[$i]["nom1"]." ".$inf_medicos[$i]["nom2"]." ".$inf_medicos[$i]["apellido1"]." ".$inf_medicos[$i]["apellido2"]; ?>">
                        <?php echo $inf_medicos[$i]["area"]." - ".$inf_medicos[$i]["nom1"]." ".$inf_medicos[$i]["nom2"]." ".$inf_medicos[$i]["apellido1"]." ".$inf_medicos[$i]["apellido2"]; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Fecha/Hora</label>
                    <div class="col-lg-5">
                    <input type="date" name="fecha" required class="form-control" id="inputEmail1" placeholder="Fecha">
                    </div>
                    <div class="col-lg-5">
                    <input type="time" name="hora" required class="form-control" id="inputEmail1" placeholder="Hora">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Estado de la cita</label>
                    <div class="col-lg-10">
                    <select name="estado" class="form-control" required>
                        <option value="Pendiente">Pendiente</option>      
                        <option value="Aplicada">Aplicada</option>
                        <option value="No Asistio">No Asistió</option>
                        <option value="Cancelada">Cancelada</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Estado del pago</label>
                    <div class="col-lg-10">
                    <select name="estado_pago" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>      
                        <option value="Pagado">Pagado</option>
                        <option value="Pendiente">Pendiente</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Costo</label>
                    <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                        <input type="text" class="form-control" name="costo" placeholder="Costo">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Agregar Cita</button>
                    </div>
                </div>
                </form>
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