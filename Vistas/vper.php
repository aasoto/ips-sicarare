<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("plantilla1.php");
?>
<div class="main-panel">
<div class="content-wrapper">
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-header">
            Nuevo Paciente
        </div>  
        <div class="card-body">
            <form class="form-horizontal" method="post" id="addproduct" action="../controlador/cper.php" role="form">
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
                            <label class="col-sm-4 col-form-label">Documento* </label>
                            <div class="col-sm-8">
                                <input type="number" name="numdoc" required class="form-control" id="numdoc" placeholder="Número de Documento">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Primer Nombre* </label>
                            <div class="col-sm-8">
                            <input type="text" name="nom1" required class="form-control" id="nom1" placeholder="Primer Nombre">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                            <label class="col-sm-4 col-form-label">Primer Apellido* </label>
                            <div class="col-sm-8">
                                <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Segundo Apellido* </label>
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
                            <label class="col-sm-4 col-form-label">Fecha de Nacimiento* </label>
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
                </div>
                <div class="form-group">       
                    <button type="submit" class="btn btn-success mr-2">Agregar Paciente</button>
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