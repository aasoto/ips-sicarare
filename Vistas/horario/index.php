<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-calendar-o"></i> Horarios</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=horario">Horarios</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Lista de Horarios</h3>
              <p><a class="btn btn-primary icon-btn" href="?c=horario&a=FormCrear"><i class="fa fa-plus"></i>Registrar Horario</a></p>
            </div>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <th>ID</th><th>Area</th><th> Hora Inicial</th><th>Hora Final</th><th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach ($this->modelo->Listar() as $r):?>
                    <tr>
                        <td>
                            <?= $r->id?>
                        </td>
                        <td>
                            <?= $r->area_nom?>
                        </td>
                        <td>
                            <?= $r->hora_ini?>
                        </td>
                        <td>
                            <?= $r->hora_fi?>
                        </td>
                        <td>
                            <a href="?c=horario&a=FormCrear&id=<?= $r->id?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>Editar</a>
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