<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("../controlador/ccita.php");
        include ("plantilla1.php");
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header">
                     Nueva Cita
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" id="addproduct" action="../controlador/ccita.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Paciente</label>
                                <div class="col-sm-8">
                                    <select name="paciente" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>
                                        <?php for($i=0;$i<count($inf_pacientes);$i++){?>
                                            <option value="<?php echo $inf_pacientes[$i]["numdoc"]." - ".$inf_pacientes[$i]["nom1"]." ".$inf_pacientes[$i]["nom2"]." ".$inf_pacientes[$i]["apellido1"]." ".$inf_pacientes[$i]["apellido2"]; ?>"><?php echo $inf_pacientes[$i]["numdoc"]." - ".$inf_pacientes[$i]["nom1"]." ".$inf_pacientes[$i]["nom2"]." ".$inf_pacientes[$i]["apellido1"]." ".$inf_pacientes[$i]["apellido2"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Médico</label>
                                <div class="col-sm-9">
                                    <select name="area" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>
                                        <?php for($i=0;$i<count($inf_medicos);$i++){?>
                                            <option value="<?php echo $inf_medicos[$i]["area"]." - ".$inf_medicos[$i]["nom1"]." ".$inf_medicos[$i]["nom2"]." ".$inf_medicos[$i]["apellido1"]." ".$inf_medicos[$i]["apellido2"]; ?>">
                                            <?php echo $inf_medicos[$i]["area"]." - ".$inf_medicos[$i]["nom1"]." ".$inf_medicos[$i]["nom2"]." ".$inf_medicos[$i]["apellido1"]." ".$inf_medicos[$i]["apellido2"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Fecha</label>
                                <div class="col-sm-8">
                                    <input type="date" name="fecha" required class="form-control" id="inputEmail1" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hora</label>
                                <div class="col-sm-9">
                                    <input type="time" name="hora" required class="form-control" id="inputEmail1" placeholder="Hora">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Estado de la cita</label>
                                <div class="col-sm-8">
                                    <select name="estado" class="form-control" required>
                                        <option value="Pendiente">Pendiente</option>      
                                        <option value="Aplicada">Aplicada</option>
                                        <option value="No Asistio">No Asistió</option>
                                        <option value="Cancelada">Cancelada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Estado del pago</label>
                                <div class="col-sm-9">
                                    <select name="estado_pago" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>      
                                        <option value="Pagado">Pagado</option>
                                        <option value="Pendiente">Pendiente</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>                            
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Costo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="costo" placeholder="Costo">
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <div class="form-group">       
                        <button type="submit" class="btn btn-success mr-2">Agregar Cita</button>
                    </div>   
                </form>
            </div>
        </div>
    </div>
<?php
    include ("plantilla2.php");
        }else{
        header('location: ./');
    }
?>