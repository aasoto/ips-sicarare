<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-users"></i> Usuarios</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><a href="?c=usuario">Usuarios</a></li>
          <li class="breadcrumb-item"><a href="?c=usuario&a=FormCrear">Registrar Usuario</a></li>
        </ul>
      </div>
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Registrar Usuario</h3>
            <div class="tile-body">
                <form class="form-horizontal" method="post" action="?c=usuario&a=Guardar" role="form">
                    <div class="row">
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
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Documento*</label>
                                <div class="col-sm-8">
                                    <input type="number" name="num_doc" required class="form-control" id="num_doc" placeholder="Número de Documento">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primer Nombre*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nom1" required class="form-control" id="nom1" placeholder="Primer Nombre">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Segundo Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Segundo Nombre">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primer Apellido*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Segundo Apellido*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido">
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
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Fecha de Nacimiento*</label>
                                <div class="col-sm-8">
                                    <input type="date" name="fec_nac" class="form-control"  id="address1" placeholder="Fecha de Nacimiento" max=<?php $hoy=date("Y-m-d"); echo $hoy;?> required>
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
                                <label class="col-sm-4 col-form-label">Usuario*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="user" class="form-control" id="user" placeholder="Usuario" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Contraseña*</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Rol*</label>
                                <div class="col-sm-8">
                                    <select name="rol" class="form-control" required>
                                        <option value="">-- SELECCIONE --</option>
                                        <?php foreach ($this->modelo->ListarRol() as $r): ?>
                                        <option value="<?= $r->nom_rol ?>"><?= $r->nom_rol ?></option>
                                        <?php endforeach; ?>      
                                    </select>
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
