<?php
  require_once("vendor/autoload.php");
  use PhpOffice\PhpSpreadsheet\IOFactory;

  $ruta = "../docs/AYUNTAMIENTOS/2019_SEE_PRES_MUN_BC_CAS.xlsx";
  $excel = IOFactory::load($ruta);
  $hoja = $excel->getSheet(0);
  $celda = $hoja->getCellByColumnAndRow(1,6); //LEER UNA SOLA CELDA

  $numColumnas = PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($hoja->getHighestColumn());
  $numCeldas = $hoja->getHighestRow();

  $tabla = "<table class=\"tabla\"><thead><div><tr>";
  for($i = 1; $i <= $numColumnas; $i++)
    $tabla .= "<th><img src=\"assets/MUNICIPIO/". ($hoja->getCellByColumnAndRow($i,6)).".png\"
              onerror=\"this.src='assets/default.png';\" height=\"50\">" . ($hoja->getCellByColumnAndRow($i,6)) . "</th>";
  $tabla .= "</tr></div>";

  $tabla .= "</thead><tbody><div>";
  for($j = 7; $j <= 50; $j++) {
    $tabla .= "<tr>";
    for($i = 1; $i <= $numColumnas; $i++) {
      $tabla .= "<td>" . ($hoja->getCellByColumnAndRow($i,$j)) . "</td>";
    }
    $tabla .= "</tr></div>";
  }
  $tabla .= "</tbody></div></table>";

  echo $tabla;
?>
