<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Panel de Control</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="partida.php">Inicio</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-medkit fa-3x"></i>
            <div class="info">
              <h4>Citas</h4>
              <p><b><?php print_r($i->getIni_numcit()) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-wheelchair fa-3x"></i>
            <div class="info">
              <h4>Pacientes</h4>
              <p><b><?php print_r($i->getIni_numpac()) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-user-md fa-3x"></i>
            <div class="info">
              <h4>Médicos</h4>
              <p><b><?php print_r($i->getIni_nummed()) ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Usuarios</h4>
              <p><b><?php print_r($i->getIni_numusu()) ?></b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Reporte de Citas por Mes</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <div class="embed-responsive-item" id="piechart_3d" style="width: 500px; height: 370px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Gráfico de Citas Por Área</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var pdata = [
      	{
      		value: <?php print_r($i->getIni_mege()) ?>,
      		color: "#46BFBD",
      		highlight: "#46BFBD",
      		label: "Medicina General"
      	},
      	{
      		value: <?php print_r($i->getIni_gine()) ?>,
      		color:"#FFFF00",
      		highlight: "#FFFF00",
      		label: "Ginecología"
      	},
        {
      		value: <?php print_r($i->getIni_pedi()) ?>,
      		color:"#008000",
      		highlight: "#008000",
      		label: "Pediatría"
      	},
        {
      		value: <?php print_r($i->getIni_orto()) ?>,
      		color:"#F7464A",
      		highlight: "#F7464A",
      		label: "Ortopedia"
      	},
        {
      		value: <?php print_r($i->getIni_mein()) ?>,
      		color:"#800080",
      		highlight: "#800080",
      		label: "Medicina Interna"
      	},
        {
      		value: <?php print_r($i->getIni_psico()) ?>,
      		color:"#808000",
      		highlight: "#808000",
      		label: "Psicología"
      	},
        {
      		value: <?php print_r($i->getIni_nutri()) ?>,
      		color:"#000080",
      		highlight: "#000080",
      		label: "Nutrición"
      	},
        {
      		value: <?php print_r($i->getIni_bacte()) ?>,
      		color:"#800000",
      		highlight: "#800000",
      		label: "Bacteriología"
      	}

      ]

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);

      }
    </script>