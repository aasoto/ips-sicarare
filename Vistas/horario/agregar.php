<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-user-md"></i> Horarios</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=horario">Horarios</a></li>
          <li class="breadcrumb-item"><a href="?c=horario&a=FormCrear">Registrar Horario</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?> Horario</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=horario&a=Guardar" role="form">
                  <input type="hidden" name="id" class="form-control" id="id" value="<?=$h->getHor_id()?>">
                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Área*</label>
                                <div class="col-sm-8">
                                  <select name="area" class="form-control" required>
                                    <option value="">-- SELECCIONE --</option>
                                    <?php foreach ($this->modelo->ListarAreas() as $a): ?>
                                    <option value="<?= $a->area_nom?>" <?php if($h->getHor_area()==$a->area_nom) echo "selected";?>><?= $a->area_nom?></option>
                                    <?php endforeach; ?>  
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hora Inicial*</label>
                                <div class="col-sm-8">
                                    <input type="time" name="horaini" class="form-control" placeholder="Hora de inicio" max="17:00:00" min="08:00:00"  required value="<?=$h->getHor_horaini()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hora Final*</label>
                                <div class="col-sm-8">
                                    <input type="time" name="horafin" class="form-control" placeholder="Hora de cierre" max="18:00:00" min="09:00:00" required value="<?=$h->getHor_horafin()?>">
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