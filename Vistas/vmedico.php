<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("plantilla1.php");
        include ("../controlador/cmedico.php");
        ?>
        <div class="main-panel">
        <div class="container-fluid">
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Medico</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="../Controlador/cmedico.php" role="form">

  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Area*</label>
    <div class="col-md-6">
    <select name="area" class="form-control">
    <option value="">-- SELECCIONE --</option>
        <?php for($i=0;$i<count($inf_area);$i++){?>
            <option value="<?php echo $inf_area[$i]["area_nom"]; ?>"><?php echo $inf_area[$i]["area_nom"]; ?></option>
        <?php } ?>     
        </select>
    </div>
    <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Número de Identificación*</label>
    <div class="col-md-6">
      <input type="text" name="numdoc" class="form-control" id="nomdoc" placeholder="Num. Iden.">
    </div>
  <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nom1" class="form-control" id="nom1" placeholder="Primer Nombre">
    </div>
    <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Segundo Nombre">
    </div>
  <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido1" required="" class="form-control" id="apellido1" placeholder="Apellido">
    </div>
  <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido2" required="" class="form-control" id="apellido2" placeholder="Segundo Apellido">
    </div>
    <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
        <div class="col-md-6">
    <label class="checkbox-inline">
    <input type="radio" id="inlineCheckbox1" name="sexo" required value="m"> Masculino
    </label>
    <label class="checkbox-inline">
    <input type="radio" id="inlineCheckbox2" name="sexo" required value="f"> Femenino
    </label>

        </div>
    </div>
    <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Fec. Nac.*</label>
    <div class="col-md-6">
      <input type="date" name="fec_nac" required="" class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
  <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="direc" class="form-control" id="direc" placeholder="Direccion">
    </div>
  <span class="material-input"></span></div>
  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="e_mail" class="form-control" id="e_mail" placeholder="Email">
    </div>
  <span class="material-input"></span></div>

  <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
    </div>

    <div class="form-group is-empty">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
    <div class="col-md-6">
    <select name="estado" class="form-control">
    <option value="">-- SELECCIONE --</option>      
        <option value="Activo">Activo</option>
        <option value="No Activo">No Activo</option>      
        </select>
    </div>
    
  <span class="material-input"></span></div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Medico</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div></div>
        </div>
<?php

include ("plantilla2.php");
    }
    else{
        header('location: ./');
    }
?>