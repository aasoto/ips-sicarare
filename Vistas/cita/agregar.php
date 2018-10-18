<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-medkit"></i> Citas</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=cita">Citas</a></li>
          <li class="breadcrumb-item"><a href="?c=cita&a=FormCrear">Registrar Cita</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Registrar Cita</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=cita&a=Guardar" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Paciente*</label>
                                <div class="col-sm-8">
                                    <select name="paciente" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>
                                        <?php foreach ($this->modelo->ListarPacientes() as $p): ?>
                                            <option value="<?= $p->numdoc." ".$p->nom1." ".$p->nom2." ".$p->apellido1." ".$p->apellido2 ?>"><?= $p->numdoc." - ".$p->nom1." ".$p->nom2." ".$p->apellido1." ".$p->apellido2 ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Médico*</label>
                                <div class="col-sm-8">
                                    <select name="medico" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>
                                        <?php foreach ($this->modelo->ListarMedicos() as $m): ?>
                                            <option value="<?= $m->nom1." ".$m->nom2." ".$m->apellido1." ".$m->apellido2 ?>"><?= $m->area." - ".$m->nom1." ".$m->nom2." ".$m->apellido1." ".$m->apellido2 ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Fecha*</label>
                                <div class="col-sm-8">
                                    <input type="date" name="fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> class="form-control" id="inputEmail1" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hora*</label>
                                <div class="col-sm-8">
                                    <input type="time" name="hora" required class="form-control" id="inputEmail1" placeholder="Hora" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Estado de la cita*</label>
                                <div class="col-sm-8">
                                    <select name="estado" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>  
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
                                <label class="col-sm-4 col-form-label">Estado del pago*</label>
                                <div class="col-sm-8">
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
                                <label class="col-sm-4 col-form-label">Costo*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="costo" placeholder="Costo" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">       
                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-paper-plane"></i>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</main>

                           