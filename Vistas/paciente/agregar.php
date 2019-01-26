<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-wheelchair"></i> Pacientes</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="partida.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=paciente">Pacientes</a></li>
          <li class="breadcrumb-item"><a href="?c=paciente&a=FormCrear"><?=$titulo?> Paciente</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?> Paciente</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=paciente&a=Guardar" role="form">
                    <input type="hidden" name="id" class="form-control" id="id" value="<?=$p->getPac_id()?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tipo de Documento*</label>
                                <div class="col-sm-8">
                                    <select name="tipo_doc" class="form-control" required>
                                        <option value="" <?php if($p->getPac_tipo_doc()=="") echo "selected";?>>-- SELECCIONE UNA OPCIÓN --</option>      
                                        <option value="C.C" <?php if($p->getPac_tipo_doc()=="C.C") echo "selected";?>>Cedula de Ciudadanía</option>
                                        <option value="T.I" <?php if($p->getPac_tipo_doc()=="T.I") echo "selected";?>>Tarjeta de Identidad</option>
                                        <option value="R.C" <?php if($p->getPac_tipo_doc()=="R.C") echo "selected";?>>Registro Civil</option> 
                                        <option value="Pas." <?php if($p->getPac_tipo_doc()=="Pasaporte") echo "selected";?>>Pasaporte</option>     
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Documento* </label>
                                <div class="col-sm-8">
                                    <input type="number" name="numdoc" required class="form-control" id="numdoc" placeholder="Ingrese el número de documento" value="<?=$p->getPac_numdoc()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primer Nombre*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nom1" required class="form-control" id="nom1" placeholder="Ingrese el primer nombre" value="<?=$p->getPac_nom1()?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Segundo Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Ingrese el segundo nombre" value="<?=$p->getPac_nom2()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primer Apellido*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Ingrese el primer apellido" value="<?=$p->getPac_apellido1()?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Segundo Apellido*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Ingrese el segundo apellido" value="<?=$p->getPac_apellido2()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Género*</label>
                                <div class="col-sm-4">
                                    <div class="animated-radio-button">
                                        <label>
                                            <input type="radio" name="sexo" required value="m" <?= $p->getPac_sexo() == "m"?"checked = 'checked'":'';?>><span class="label-text">Masculino</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="animated-radio-button">
                                        <label>
                                        <input type="radio" name="sexo" required value="f" <?= $p->getPac_sexo() == "f"?"checked = 'checked'":'';?>><span class="label-text">Femenino</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Fecha de Nacimiento* </label>
                                <div class="col-sm-8">
                                    <input type="date" name="fec_nac" class="form-control"  id="address1" placeholder="Ingrese fecha de nacimiento" max=<?php $hoy=date("Y-m-d"); echo $hoy;?> required value="<?=$p->getPac_fec_nac()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email* </label>
                                <div class="col-sm-8">
                                <input type="email" name="e_mail" class="form-control" id="e_mail" placeholder="Ingrese un email" required value="<?=$p->getPac_e_mail()?>">
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
