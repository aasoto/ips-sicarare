<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-medkit"></i> Citas</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="partida.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=cita">Citas</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Lista de Citas</h3>
                <div class="btn-group">
                    <a class="btn btn-primary icon-btn" href="?c=cita&a=FormCrear"><i class="fa fa-plus"></i>Registrar Cita</a>
                    <a class="btn btn-primary icon-btn" href="?c=cita&a=FormConsultar"><i class='fa fa-clipboard'></i> Ver Mis Citas</a>
                </div>            
            </div>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                <th>ID</th><th>Paciente</th><th>Area - Medico</th><th>Fecha</th><th>Hora</th><th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach ($this->modelo->Listar() as $r):?>
                    <tr>
                        <td>
                            <?= $r->id?>
                        </td>
                        <td>
                            <?= $r->paciente?>
                        </td>
                        <td>
                            <?= $r->area?>
                        </td>
                        <td>
                            <?= $r->fecha?>
                        </td>
                        <td>
                            <?= $r->hora?>
                        </td>
                        <td>
                            <a href="?c=cita&a=FormCrear&id=<?= $r->id?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>Editar</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</main>