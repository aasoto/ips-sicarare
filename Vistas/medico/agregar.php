<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-user-md"></i> Médicos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=medico">Médicos</a></li>
          <li class="breadcrumb-item"><a href="?c=medico&a=FormCrear">Registrar Médico</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Registrar Médico</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=medico&a=Guardar" role="form">
                  <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Área*</label>
                                <div class="col-sm-8">
                                  <select name="area" class="form-control" required>
                                    <option value="">-- SELECCIONE --</option>
                                    <?php foreach ($this->modelo->ListarAreas() as $a): ?>
                                    <option value="<?= $a->area_nom?>"><?= $a->area_nom?></option>
                                    <?php endforeach; ?>  
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tipo de Documento*</label>
                                <div class="col-sm-8">
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No. de Documento*</label>
                                <div class="col-sm-8">
                                  <input type="number" name="numdoc" class="form-control" id="nomdoc" placeholder="Número de Identificación" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primer Nombre*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="nom1" class="form-control" id="nom1" placeholder="Primer Nombre" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Segundo Nombre</label>
                                <div class="col-sm-8">
                                  <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Segundo Nombre">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primer Apellido*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="apellido1" required="" class="form-control" id="apellido1" placeholder="Primer Apellido">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Segundo Apellido*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="apellido2" required="" class="form-control" id="apellido2" placeholder="Segundo Apellido">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Género*</label>
                                <div class="col-sm-4">
                                    <div class="animated-radio-button">
                                        <label>
                                            <input type="radio" name="sexo" required value="m"><span class="label-text">Masculino</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="animated-radio-button">
                                        <label>
                                        <input type="radio" name="sexo" required value="f"><span class="label-text">Femenino</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Fecha de Nacimiento*</label>
                                <div class="col-sm-8">
                                  <input type="date" name="fec_nac" required="" max=<?php $hoy=date("Y-m-d"); echo $hoy;?> class="form-control" id="inputEmail1" placeholder="Fecha">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Dirección*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="direc" class="form-control" id="direc" placeholder="Direccion" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email*</label>
                                <div class="col-sm-8">
                                  <input type="email" name="e_mail" class="form-control" id="e_mail" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Teléfono*</label>
                                <div class="col-sm-8">
                                  <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Estado*</label>
                                <div class="col-sm-8">
                                  <select name="estado" class="form-control" required>
                                    <option value="">-- SELECCIONE --</option>      
                                    <option value="Activo">Activo</option>
                                    <option value="No Activo">No Activo</option>      
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Usuario*</label>
                                <div class="col-sm-8">
                                  <input type="text" name="user" class="form-control" id="user" placeholder="Usuario" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Contraseña*</label>
                                <div class="col-sm-8">
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
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