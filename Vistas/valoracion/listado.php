<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-wheelchair"></i> Valoraciones</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="partida.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=paciente">Valoraciones</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Lista de Valoraciones</h3>
            </div>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <th>ID</th><th>Paciente</th><th>Fec. Val.</th><th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach ($this->modelo->Listar($nombre) as $r):?>
                    <tr>
                        <td>
                            <?= $r->id?>
                        </td>
                        <td>
                            <?= $r->paciente?>
                        </td>
                        <td>
                            <?= $r->fec_hoy?>
                        </td>
                        <td>
                            <a href="?c=valoracion&a=FormVer&idcita=<?= $r->id?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Ver </a>
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