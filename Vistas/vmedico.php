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
                      <select name="area" class="form-control">
                        <option value="">-- SELECCIONE --</option>
                          <?php for($i=0;$i<count($inf_area);$i++){?>
                            <option value="<?php echo $inf_area[$i]["area_nom"]; ?>"><?php echo $inf_area[$i]["area_nom"]; ?></option>
                          <?php } ?>     
                      </select>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Número de Identificación*</label>
                  <div class="col-sm-7">
                    <input type="text" name="numdoc" class="form-control" id="nomdoc" placeholder="Num. Iden.">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Primer Nombre*</label>
                    <div class="col-sm-7">
                      <input type="text" name="nom1" class="form-control" id="nom1" placeholder="Primer Nombre">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Segundo Nombre*</label>
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
                    <input type="date" name="fec_nac" required="" class="form-control" id="inputEmail1" placeholder="Fecha">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dirección*</label>
                    <div class="col-sm-7">
                      <input type="text" name="direc" class="form-control" id="direc" placeholder="Direccion">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Email*</label>
                  <div class="col-sm-7">
                    <input type="text" name="e_mail" class="form-control" id="e_mail" placeholder="Email">
                  </div>
                </div>
              </div>
            </div>                  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Teléfono*</label>
                    <div class="col-sm-7">
                      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Estado*</label>
                  <div class="col-sm-7">
                    <select name="estado" class="form-control">
                      <option value="">-- SELECCIONE --</option>      
                      <option value="Activo">Activo</option>
                      <option value="No Activo">No Activo</option>      
                    </select>
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