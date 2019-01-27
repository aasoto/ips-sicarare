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
            <h3 class="tile-title"><?=$titulo?> Valoración</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=valoracion&a=Guardar" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Paciente </label>
                                <div class="col-sm-8">
                                    <input type="text" name="paciente" required class="form-control" id="paciente" placeholder="Nombre del paciente" readonly value="<?=$p?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">ID. Cita </label>
                                <div class="col-sm-8">
                                    <input type="number" name="idcita" required class="form-control" id="idcita" placeholder="" readonly value="<?=$q?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Peso</label>
                                <div class="col-sm-8">
                                    <input type="text" name="peso" class="form-control" id="peso" placeholder="Ingrese peso en kilos" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Talla</label>
                                <div class="col-sm-8">
                                    <input type="text" name="talla" class="form-control" id="talla" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tipo de Sangre</label>
                                <div class="col-sm-8">
                                    <select name="tipo_sang" class="form-control" required>
                                        <option value="" >-- SELECCIONE UNA OPCIÓN --</option>      
                                        <option value="A" >A</option>
                                        <option value="B" >B</option>
                                        <option value="AB" >AB</option> 
                                        <option value="O" >0</option>     
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-4 col-form-label">RH</label>
                                <div class="col-sm-8">
                                    <select name="rh" class="form-control" required>
                                        <option value="" >-- SELECCIONE UNA OPCIÓN --</option>      
                                        <option value="+" >Positivo</option>
                                        <option value="-" >Negativo</option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Frecuencia Cardiaca</label>
                                <div class="col-sm-8">
                                    <input type="text" name="f_cardiaca" class="form-control" id="f_cardiaca" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Frecuencia Respiratoria</label>
                                <div class="col-sm-8">
                                    <input type="text" name="f_respiratoria" class="form-control" id="f_respiratoria" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Presion Arterial</label>
                                <div class="col-sm-8">
                                    <input type="text" name="p_arterial" class="form-control" id="p_arterial" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Temperatura </label>
                                <div class="col-sm-8">
                                    <input type="text" name="temp" class="form-control" id="temp" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Saturacion 02 </label>
                                <div class="col-sm-8">
                                <input type="text" name="saturacion02" class="form-control" id="saturacion02" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Resumen de Anamnesis y Examen Fisico</label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="r_an_fis" class="form-control" id="r_an_fis" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Resumen de Examen Diagnosticos </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="r_exa_diag" class="form-control" id="r_exa_diag" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Diagnostico </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="diagnostico" class="form-control" id="diagnostico" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Complicaciones</label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="compli" class="form-control" id="compli" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tratamientos Aplicados </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="trat_aplic" class="form-control" id="trat_aplic" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Enfermedad </label>
                                <div class="col-sm-8">
                                    <textarea type="text" rows="4" name="enfer" id="enfer" class="form-control" placeholder="" ></textarea>  
                                    <div id="enferList"></div>                                
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

<script>  
 $(document).ready(function(){  
      $('#enfer').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"Vistas/valoracion/search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#enferList').fadeIn();  
                          $('#enferList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#enfer').val($(this).text());  
           $('#enferList').fadeOut();  
      });  
 });  
 </script> 
