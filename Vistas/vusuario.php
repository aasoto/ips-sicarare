<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
        include ("../controlador/cusuario.php");
        include ("plantilla1.php");
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card-content table-responsive">
                    <form class="form-horizontal" method="post" id="addproduct" action="../controlador/cusuario.php" role="form">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Documento*</label>
                            <div class="col-md-6">
                                <select name="tipo_doc" class="form-control">
                                    <option value="">-- SELECCIONE --</option>      
                                    <option value="C.C">Cedula de Ciudadanía</option>
                                    <option value="T.I">Tarjeta de Identidad</option>
                                    <option value="R.C">Registro Civil</option> 
                                    <option vSalue="Pas.">Pasaporte</option>     
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Documento</label>
                            <div class="col-md-6">
                            <input type="number" name="num_doc" required class="form-control" id="num_doc" placeholder="Número de Documento">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre</label>
                            <div class="col-md-6">
                            <input type="text" name="nom1" required class="form-control" id="nom1" placeholder="Primer Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label"> Segundo Nombre</label>
                            <div class="col-md-6">
                            <input type="text" name="nom2" class="form-control" id="nom2" placeholder="Segundo Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido</label>
                            <div class="col-md-6">
                            <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido</label>
                            <div class="col-md-6">
                            <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido">
                            </div>
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

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                            <div class="col-md-6">
                            <input type="date" name="fec_nac" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
                            <div class="col-md-6">
                            <input type="text" name="e_mail" class="form-control" id="e_mail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Usuario*</label>
                            <div class="col-md-6">
                            <input type="text" name="user" class="form-control" id="user" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Contraseña*</label>
                            <div class="col-md-6">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Rol*</label>
                            <div class="col-md-6">
                                <select name="rol" class="form-control">
                                <option value="">-- SELECCIONE --</option>
                                <?php for($i=0;$i<count($inf_rol);$i++){?>
                                    <option value="<?php echo $inf_rol[$i]["nom_rol"]; ?>"><?php echo $inf_rol[$i]["nom_rol"]; ?></option>
                                <?php } ?>     
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                            </div>
                        </div>
                    </form>
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