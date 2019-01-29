<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-wheelchair"></i> Valoración Cita</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="partida.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=cita">Citas</a></li>
          <li class="breadcrumb-item"><a href="?c=cita&a=FormConsultar">Consultar Cita</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title"><?=$titulo?> Valoración <?=$p->getVal_fec_hoy()?></h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=valoracion&a=Guardar" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Paciente </label>
                                <div class="col-sm-8">
                                    <input type="text" name="paciente" required class="form-control" id="paciente" placeholder="Nombre del paciente" readonly value="<?=$p->getVal_paciente()?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">ID. Valoración </label>
                                <div class="col-sm-8">
                                    <input type="number" name="idcita" required class="form-control" id="idcita" placeholder="" readonly value="<?=$p->getVal_id()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Peso</label>
                                <div class="col-sm-8">
                                    <input type="text" name="peso" class="form-control" id="peso" placeholder="" readonly value="<?=$p->getVal_peso()?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Talla</label>
                                <div class="col-sm-8">
                                    <input type="text" name="talla" class="form-control" id="talla" placeholder="" readonly value="<?=$p->getVal_talla()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tipo de Sangre</label>
                                <div class="col-sm-8">
                                <input type="text" name="talla" class="form-control" id="talla" placeholder="" readonly value="<?=$p->getVal_tipo_sang()?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-4 col-form-label">RH</label>
                                <div class="col-sm-8">
                                <input type="text" name="talla" class="form-control" id="talla" placeholder="" readonly value="<?=$p->getVal_rh()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Frecuencia Cardiaca</label>
                                <div class="col-sm-8">
                                    <input type="text" name="f_cardiaca" class="form-control" id="f_cardiaca" placeholder="" readonly value="<?=$p->getVal_f_cardiaca()?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Frecuencia Respiratoria</label>
                                <div class="col-sm-8">
                                    <input type="text" name="f_respiratoria" class="form-control" id="f_respiratoria" placeholder="" readonly value="<?=$p->getVal_f_respiratoria()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Presion Arterial</label>
                                <div class="col-sm-8">
                                    <input type="text" name="p_arterial" class="form-control" id="p_arterial" placeholder="" readonly value="<?=$p->getVal_p_arterial()?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Temperatura </label>
                                <div class="col-sm-8">
                                    <input type="text" name="temp" class="form-control" id="temp" placeholder="" readonly value="<?=$p->getVal_temp()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Saturacion 02 </label>
                                <div class="col-sm-8">
                                <input type="text" name="saturacion02" class="form-control" id="saturacion02" placeholder="" readonly value="<?=$p->getVal_saturacion02()?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Resumen de Anamnesis y Examen Fisico</label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="r_an_fis" class="form-control" id="r_an_fis" placeholder="" readonly value=""><?=$p->getVal_r_an_fis()?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Resumen de Examen Diagnosticos </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="r_exa_diag" class="form-control" id="r_exa_diag" placeholder="" readonly value=""><?=$p->getVal_r_exa_diag()?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Diagnostico </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="diagnostico" class="form-control" id="diagnostico" placeholder="" readonly value=""><?=$p->getVal_diagnostico()?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Complicaciones</label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="compli" class="form-control" id="compli" placeholder="" readonly value=""><?=$p->getVal_compli()?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tratamientos Aplicados </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="trat_aplic" class="form-control" id="trat_aplic" placeholder="" readonly value=""><?=$p->getVal_trat_aplic()?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Enfermedad </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="enfer" id="enfer" class="form-control" placeholder="" readonly value=""><?=$p->getVal_enfer()?></textarea>  
                                    <div id="enferList"></div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">       
                        <!--<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-paper-plane"></i>Enviar</button>-->
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</main>