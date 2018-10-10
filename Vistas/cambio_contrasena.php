<?php
    session_start();
    if (isset($_SESSION['USUARIO']) && $_SESSION['USUARIO'] == 'YES') {
?>
    <!DOCTYPE html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sicarare Medical Center | ADMIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../Recursos/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../Recursos/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../Recursos/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../Recursos/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../Recursos/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
      include ("barra.php");
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php
        include ("menu.php");
      ?>
      <!-- partial -->
      
      
      
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="row">                
            <div class="col-12 grid-margin">
              <div class="card">
                  
              <div class="card-header" data-background-color="blue">
                    <h4 class="title">Cambio de contraseña</h4>
                </div>

                <div class="card-body">
                  <div class="row">
                      <div class="card-body">
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contraseña Actual</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nueva Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Repita la Nueva Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                  
                  
                  <div class="row">
                      <div class="col-md-6">
                        <h4>Recuerde...</h4>
                        <p>Actualize su contraseña periodicamente:</p>
                        <div class="text-center">
                            <div style="margin-top: 20px">
                                <i class="fa fa-unlock-alt fa-6 big-icon" style="font-size: 180px;color: #e5e5e5 "></i>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
          </div>
        </div>
            
            <footer class="footer">
              <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                  <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                  <i class="mdi mdi-heart text-danger"></i>
                </span>
              </div>
            </footer>
        
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../Recursos/vendors/js/vendor.bundle.base.js"></script>
  <script src="../Recursos/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../Recursos/js/off-canvas.js"></script>
  <script src="../Recursos/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../Recursos/js/dashboard.js"></script>
  <<script src="../Recursos/js/salir.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
<?php 

}
else{
    header('location: ./');
}


?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

