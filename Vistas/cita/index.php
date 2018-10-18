<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
        <a href="?c=cita&a=FormCrear" class="btn btn-inverse-primary btn-fw"><i class='mdi mdi-clipboard-plus'></i> Nueva Cita</a>
        <a href="?c=cita&a=FormConsultar" class="btn btn-inverse-primary btn-fw"><i class='mdi mdi-clipboard'></i> Ver Mis Citas</a>
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Citas</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                            <th>Paciente</th><th>Area - Medico</th><th>Fecha</th><th>Hora</th>
                    </thead>
                    <?php foreach ($this->modelo->Listar() as $r):?>
                        <tr>
                            <td>
                            <?= $r->paciente?>
                            </td><td>
                            <?= $r->area?>
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