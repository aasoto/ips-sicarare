<div class="main-panel">
<div class="content-wrapper">
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-header">
            <?=$titulo?> Paciente
        </div>  
        <div class="card-body">
            <form class="form-horizontal" method="post" action="?c=paciente&a=Guardar" role="form">
                <input type="hidden" name="id" class="form-control" id="id" value="<?=$p->getPac_id()?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tipo de Documento*</label>
                            <div class="col-sm-7">
                                <select name="tipo_doc" class="form-control" required>
                                    <option value="">-- SELECCIONE --</option>      
                                    <option value="C.C">Cedula de Ciudadanía</option>
                                    <option value="T.I">Tarjeta de Identidad</option>
                                    <option value="R.C">Registro Civil</option> 
                                    <option value="Pas.">Pasaporte</option>     
                                </select>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Documento* </label>
                            <div class="col-sm-8">
                                <input type="number" name="numdoc" required class="form-control" id="numdoc" placeholder="Número de Documento" value="<?=$p->getPac_numdoc()?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Primer Nombre* </label>
                            <div class="col-sm-8">
                            <input type="text" name="nom1" required class="form-control" id="nom1" placeholder="Primer Nombre" value="<?=$p->getPac_nom1()?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Segundo Nombre</label>
                            <div class="col-sm-8">
                                <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Segundo Nombre" value="<?=$p->getPac_nom2()?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Primer Apellido* </label>
                            <div class="col-sm-8">
                                <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido" value="<?=$p->getPac_apellido1()?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Segundo Apellido* </label>
                            <div class="col-sm-8">
                            <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido" value="<?=$p->getPac_apellido2()?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Género*</label>
                            <div class="col-sm-4">
                            <div class="form-radio">
                              <label class="form-check-label">
                              <input type="radio" id="inlineCheckbox1" name="sexo" required value="m" <?= $p->getPac_sexo() == "m"?"checked = 'checked'":'';?>> Masculino
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-radio">
                              <label class="form-check-label">
                              <input type="radio" id="inlineCheckbox2" name="sexo" required value="f" <?= $p->getPac_sexo() == "f"?"checked = 'checked'":'';?>> Femenino
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Fecha de Nacimiento* </label>
                            <div class="col-sm-8">
                            <input type="date" name="fec_nac" class="form-control"  id="address1" placeholder="Fecha de Nacimiento" max=<?php $hoy=date("Y-m-d"); echo $hoy;?> required value="<?=$p->getPac_fec_nac()?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Email*</label>
                            <div class="col-sm-8">
                            <input type="email" name="e_mail" class="form-control" id="e_mail" placeholder="Email" required value="<?=$p->getPac_e_mail()?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">       
                    <button type="submit" class="btn btn-success mr-2">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>