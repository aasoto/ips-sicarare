<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-wheelchair"></i> Pacientes</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="partida.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=paciente">Pacientes</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Lista de Pacientes</h3>
              <p><a class="btn btn-primary icon-btn" href="?c=paciente&a=FormCrear"><i class="fa fa-plus"></i>Registrar Paciente</a></p>
            </div>
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <th>Documento</th><th>Nombre</th><th> Sexo</th><th>Fec. Nac.</th><th>E-mail</th><th>Acciones</th>
                </thead>
                <tbody>
                <?php foreach ($this->modelo->Listar() as $r):?>
                    <tr>
                        <td>
                            <?= $r->numdoc?>
                        </td>
                        <td>
                            <?= $r->nom1." ".$r->nom2." ".$r->apellido1." ".$r->apellido2?>
                        </td>
                        <td>
                            <?php
                            $str = $r->sexo;
                            $str = strtoupper($str);
                            ?>
                            <?= $str?>
                        </td>
                        <td>
                            <?= $r->fec_nac?>
                        </td>
                        <td>
                            <?= $r->e_mail?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="?c=paciente&a=FormCrear&numdoc=<?= $r->numdoc?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="?c=valoracion&a=FormListar&numdoc=<?= $r->numdoc?>&nom1=<?= $r->nom1?>&nom2=<?= $r->nom2?>&apellido1=<?= $r->apellido1?>&apellido2=<?= $r->apellido2?>" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                            </div>
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