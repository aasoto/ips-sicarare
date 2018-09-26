<div class="content-wrapper">
        <div class="card-content table-responsive">
            <form class="form-horizontal" method="post" id="addproduct" action="../controlador/cper.php" role="form">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Documento</label>
                    <div class="col-md-6">
                    <input type="number" name="numdoc" required class="form-control" id="numdoc" placeholder="Número de Documento">
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
                    <input type="text" name="nom2" required class="form-control" id="nom2" placeholder="Segundo Nombre">
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
                    <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Agregar Paciente</button>
                    </div>
                </div>
            </form>
        </div>
            
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->