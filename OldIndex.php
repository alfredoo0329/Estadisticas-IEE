<!DOCTYPE html>
<?php
    if(isset($_POST['excel_name'])) {
      $excel_name = $_POST['excel_name'];
      $excel_folder = $_POST['excel_folder'];
    } else {
      $excel_name = "2019_SEE_PRES_MUN_BC_SEC";
      $excel_folder = "AYUNTAMIENTOS";
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Estadisticas Prueba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="">
    <script src="js/popper.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/6bc7d72b54.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>

  <body onload="getExcelInfo(<?php echo "'".$excel_name."'"; ?>,<?php echo "'".$excel_folder."'"; ?>)">

    <form id="formDown" method="get" action="docs/EXCELS/<?php echo $excel_folder; ?>/<?php echo $excel_name; ?>.xlsx">
      <button id="download"><i class="fas fa-file-excel"></i></button>
    </form>

    <nav class="navbar navbar-expand-md d-md-none">
      <img src="assets/IEEBCBlanco.svg" alt="" height="40">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-ellipsis-h"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="nav flex-column">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">AYUNTAMIENTOS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN__BC_MUN','AYUNTAMIENTOS')">2019_SEE_PRES_MUN__BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_CAS','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_MUNCAND','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_MUNCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_MUNPP','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_MUNPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_SEC','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_SEC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DIPUTACIONES MR</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_CAS','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_DIS','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_DIS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_DISCAND','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_DISCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_DISPP','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_DISPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_MUN','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_SEC','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_SEC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DIPUTACIONES RP</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_CAS','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_DISPP','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_DISPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_MUN','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_SEC','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_SEC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GOBERNADOR</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_CAS','GOBERNADOR')">2019_SEE_GOB_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_DIS','GOBERNADOR')">2019_SEE_GOB_BC_DIS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_DISCAND','GOBERNADOR')">2019_SEE_GOB_BC_DISCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_DISPP','GOBERNADOR')">2019_SEE_GOB_BC_DISPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_ENT','GOBERNADOR')">2019_SEE_GOB_BC_ENT</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_ENTCAND','GOBERNADOR')">2019_SEE_GOB_BC_ENTCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_ENTPP','GOBERNADOR')">2019_SEE_GOB_BC_ENTPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_MUN','GOBERNADOR')">2019_SEE_GOB_BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_SEC','GOBERNADOR')">2019_SEE_GOB_BC_SEC</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="d-none d-md-flex verticalNav">
      <div class="container" id="navHead">
        <img src="assets/IEEBCBlanco.svg" alt="" height="50">
      </div>
      <div class="toolBar container">
        <ul class="nav flex-column">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">AYUNTAMIENTOS</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN__BC_MUN','AYUNTAMIENTOS')">2019_SEE_PRES_MUN__BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_CAS','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_MUNCAND','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_MUNCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_MUNPP','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_MUNPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_PRES_MUN_BC_SEC','AYUNTAMIENTOS')">2019_SEE_PRES_MUN_BC_SEC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DIPUTACIONES MR</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_CAS','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_DIS','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_DIS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_DISCAND','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_DISCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_DISPP','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_DISPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_MUN','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_MR_BC_SEC','DIPUTACIONES_MR')">2019_SEE_DIP_LOC_MR_BC_SEC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">DIPUTACIONES RP</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_CAS','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_DISPP','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_DISPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_MUN','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_DIP_LOC_RP_BC_SEC','DIPUTACIONES_RP')">2019_SEE_DIP_LOC_RP_BC_SEC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GOBERNADOR</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_CAS','GOBERNADOR')">2019_SEE_GOB_BC_CAS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_DIS','GOBERNADOR')">2019_SEE_GOB_BC_DIS</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_DISCAND','GOBERNADOR')">2019_SEE_GOB_BC_DISCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_DISPP','GOBERNADOR')">2019_SEE_GOB_BC_DISPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_ENT','GOBERNADOR')">2019_SEE_GOB_BC_ENT</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_ENTCAND','GOBERNADOR')">2019_SEE_GOB_BC_ENTCAND</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_ENTPP','GOBERNADOR')">2019_SEE_GOB_BC_ENTPP</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_MUN','GOBERNADOR')">2019_SEE_GOB_BC_MUN</a>
              <a class="dropdown-item" onclick="getExcelInfo('2019_SEE_GOB_BC_SEC','GOBERNADOR')">2019_SEE_GOB_BC_SEC</a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="container-fluid" id="content">
      <div class="row">
        <div id="LOAD">
          <div class="text-center">
            <div class="spinner-border" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
        </div>
        <div class="col-12" id="info">
          <div class="top" id="excel_title">

          </div>
          <div id="excel_result">

          </div>
        </div>

      </div>
    </div>
  </body>
  <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
  <script src="js/codigo.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
</html>
