<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-medkit"></i> Citas</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=cita">Citas</a></li>
          <li class="breadcrumb-item"><a href="?c=cita&a=FormConsultar">Consultar Cita</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Consultar Citas</h3>
            <div class="tile-body">
            <form class="form-horizontal" method="post" id="addproduct" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Fecha* </label>
                            <div class="col-sm-8">
                                <input type="date" name="fecha2" required class="form-control" id="inputEmail1" placeholder="Fecha">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button name="buscar"type="submit" class="btn btn-success mr-2">Consultar Citas</button>                            
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-12 grid-margin">
                <div class="card-header" data-background-color="blue">
                    <h4 class="title">Mis Citas </h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-bordered table-hover">
                    <thead>
                            <th>Paciente</th><th>Area - Medico</th><th>Fecha</th><th>Hora</th>
                    </thead>
                    <?php 
                    foreach ($this->Consulta() as $r):?>
                        <tr>
                            <td>
                            <?= $r->paciente?>
                            </td><td>
                            <?= $r->area." - ".$r->medico?>
                            </td><td>
                            <?= $r->fecha?>
                            </td><td>
                            <?= $r->hora?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </table>
            </div>
        </div>
      </div>
    </div>
</main>

