<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <a href="?c=paciente&a=FormCrear" class="btn btn-inverse-primary btn-fw"><i class='mdi mdi-account-plus'></i> Nuevo Paciente</a>
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Pacientes</h4>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>Documento</th><th>Nombre</th><th> Sexo</th><th>Fec. Nac.</th><th>E-mail</th><th>Acciones</th>
                    </thead>
                    <?php foreach ($this->modelo->Listar() as $r):?>
                        <tr>
                            <td>
                            <?= $r->numdoc?>
                            </td><td>
                            <?= $r->nom1." ".$r->nom2." ".$r->apellido1." ".$r->apellido2?>
                            </td><td>
                            <?php
                            $str = $r->sexo;
                            $str = strtoupper($str);
                            ?>
                            <?= $str?>
                            </td><td>
                            <?= $r->fec_nac?>
                            </td><td>
                            <?= $r->e_mail?>
                            </td><td>
                            <a href="?c=paciente&a=FormCrear&numdoc=<?= $r->numdoc?>" class="btn btn-icons btn-inverse-warning"><i class="mdi mdi-account-edit"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>