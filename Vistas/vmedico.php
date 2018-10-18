<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("plantilla1.php");
        include ("../controlador/cmedico.php");
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-header">
            Nuevo Médico
        </div>
        <div class="card-body">
		      <form class="form-horizontal" method="post" id="addproduct" action="../Controlador/cmedico.php" role="form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Área*</label>
                    <div class="col-sm-7">
                      <select name="area" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>
                          <?php for($i=0;$i<count($inf_area);$i++){?>
                            <option value="<?php echo $inf_area[$i]["area_nom"]; ?>"><?php echo $inf_area[$i]["area_nom"]; ?></option>
                          <?php } ?>     
                      </select>
                    </div>
                </div>
              </div>
            </div>
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
                          <option vSalue="Pas.">Pasaporte</option>     
                      </select>
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Número de Identificación*</label>
                  <div class="col-sm-7">
                    <input type="number" name="numdoc" class="form-control" id="nomdoc" placeholder="Num. Iden." required>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Primer Nombre*</label>
                    <div class="col-sm-7">
                      <input type="text" name="nom1" class="form-control" id="nom1" placeholder="Primer Nombre" required>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Segundo Nombre</label>
                  <div class="col-sm-7">
                    <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Segundo Nombre">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Primer Apellido*</label>
                    <div class="col-sm-7">
                      <input type="text" name="apellido1" required="" class="form-control" id="apellido1" placeholder="Apellido">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Segundo Apellido*</label>
                  <div class="col-sm-7">
                    <input type="text" name="apellido2" required="" class="form-control" id="apellido2" placeholder="Segundo Apellido">
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
                          <input type="radio" id="inlineCheckbox1" name="sexo" required value="m"> Masculino
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-radio">
                        <label class="form-check-label">
                          <input type="radio" id="inlineCheckbox2" name="sexo" required value="f"> Femenino
                        </label>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Fecha de Nacimiento*</label>
                  <div class="col-sm-7">
                    <input type="date" name="fec_nac" required="" max=<?php $hoy=date("Y-m-d"); echo $hoy;?> class="form-control" id="inputEmail1" placeholder="Fecha">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dirección*</label>
                    <div class="col-sm-7">
                      <input type="text" name="direc" class="form-control" id="direc" placeholder="Direccion" required>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Email*</label>
                  <div class="col-sm-7">
                    <input type="email" name="e_mail" class="form-control" id="e_mail" placeholder="Email" required>
                  </div>
                </div>
              </div>
            </div>                  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Teléfono*</label>
                    <div class="col-sm-7">
                      <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono" required>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Estado*</label>
                  <div class="col-sm-7">
                    <select name="estado" class="form-control" required>
                      <option value="">-- SELECCIONE --</option>      
                      <option value="Activo">Activo</option>
                      <option value="No Activo">No Activo</option>      
                    </select>
                  </div>
                </div>
              </div>
            </div>   
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Usuario*</label>
                    <div class="col-sm-7">
                      <input type="text" name="user" class="form-control" id="user" placeholder="Usuario" required>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Contraseña*</label>
                    <div class="col-sm-7">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>
                    </div>
                  </div>
                </div>
            </div>                  
            <div class="form-group">       
              <button type="submit" class="btn btn-success mr-2">Agregar Médico</button>
            </div>                  
          </form>
        </div>
      </div>
	  </div>
</div>
<?php

include ("plantilla2.php");
    }
    else{
        header('location: ./');
    }
?>