<?php require_once "seguridad.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>CORSEC</title>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
  <link href="../../../css/sb-admin-2.css" rel="stylesheet" />

</head>

<body id="page-top" <?php $ocultar = (isset($ocultar)) ? $ocultar : ''; echo $ocultar;?> >
  <?php require_once "assets/inc/parte_superior.inc" ?>

  <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tablero</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generar
          informe</a> -->
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-6">
          <!-- Todos el contenido -->

          <h5>Controles</h5>
          <ul>
            <li>
              <a href="../../../control/impre.aspx" target="_blank" rel="noopener noreferrer">Control</a>
            </li>
            <li>
              <a href="../../../controlDinamico/impre.aspx?filtroFecha=<?php echo date('d-m-Y');?>" target="_blank" rel="noopener noreferrer">Control Dinamico (<i>Fecha Actual</i>)</a>
            </li>
            <li>
              <a href="../../../avances/impre.aspx" target="_blank" rel="noopener noreferrer">Avances</a>
            </li>
            <li>
              <a href="../../../resumen/impre.aspx" target="_blank" rel="noopener noreferrer">Resumen</a>
            </li>
          </ul>

          <hr />

          <h5>Codificador</h5>
          <ul>
            <li>
              <a href="../../../codificador/impre.aspx" target="_blank" rel="noopener noreferrer">Codificador</a>
            </li>
          </ul>

          <h5>Impresión Global</h5>
          <ul>
            <li>
              <a href="../../../impreR01Gen/impre.aspx" target="_blank" rel="noopener noreferrer">Guía I</a>
            </li>
            <li>
              <a href="../../../impreR03Gen/impre.aspx" target="_blank" rel="noopener noreferrer">Guía III</a>
            </li>
            <li>
              <a href="../../../impreR03ConIndi/impre.aspx" target="_blank" rel="noopener noreferrer">Matriz de Riesgos Guía III por Colaborador</a>
            </li>
            <li>
              <a href="../../../listaR00CentroRazonFull/impre.aspx" target="_blank" rel="noopener noreferrer">Carpeta Virtual Centro de Trabajo (solo terminados)</a>
            </li>
            <li>
              <a href="../../../listaR00CentroRazonFullDos/impre.aspx" target="_blank" rel="noopener noreferrer">Carpeta Virtual Dos Centro de Trabajo y Razón Social (solo terminados)</a>
            </li>
            <li>
              <a href="../../../listaR00CentroRazonFullDosTemp/impre.aspx" target="_blank" rel="noopener noreferrer">Carpeta Virtual Dos Centro de Trabajo y Razón Social Solo Guía III (solo terminados)</a>
            </li>
          </ul>

          
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->


  <?php require_once "assets/inc/parte_inferior.inc" ?>

  <script src="../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../../js/sb-admin-2.min.js"></script>
  <script src="../../../vendor/chart.js/Chart.min.js"></script>
  <!-- <script src="../../../js/demo/chart-area-demo.js"></script>
  <script src="../../../js/demo/chart-pie-demo.js"></script> -->

</body>

</html>