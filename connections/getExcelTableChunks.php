<?php
  require_once("vendor/autoload.php");
  use PhpOffice\PhpSpreadsheet\IOFactory;
  use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
  //echo "USE: ".(memory_get_usage(true)/1024/1024)."M\n";

    /**  Define a Read Filter class implementing IReadFilter  */
  class ChunkReadFilter implements IReadFilter {
    private $startRow = 0;
    private $endRow = 0;

    /**
     * Set the list of rows that we want to read.
     *
     * @param mixed $startRow
     * @param mixed $chunkSize
     */
    public function setRows($startRow, $chunkSize) {
        $this->startRow = $startRow;
        $this->endRow = $startRow + $chunkSize;
    }

    public function readCell($column, $row, $worksheetName = '') {
      //  Only read the heading row, and the rows that are configured in            $this->_startRow and $this->_endRow
      if (($row == 1) || ($row >= $this->startRow && $row <   $this->endRow))
          return true;
      return false;
    }
  }

  $rutaExcel = "../docs/AYUNTAMIENTOS/2019_SEE_PRES_MUN_BC_CAS.xlsx";

  $lector = IOFactory::createReader('Xlsx');
  $chunkSize = 10;
  $chunkFilter = new ChunkReadFilter();
  $lector->setReadFilter($chunkFilter);

  $excel = $lector->load($rutaExcel);
  $hoja = $excel->getSheet(0);
  $numColumnas = PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($hoja->getHighestColumn());
  $numFilas = $hoja->getHighestRow();
  echo $numFilas;
  echo "USE: ".(memory_get_usage(true)/1024/1024)."M\n";

  //LEER ENCABEZADO
  $chunkFilter->setRows(6,1);
  $chunk = $lector->load($rutaExcel);

  $header = $chunk->getActiveSheet();
  $tabla = "<table class=\"tabla\"><thead><div><tr>";
  for($i = 1; $i <= $numColumnas; $i++)
    $tabla .= "<th><img src=\"assets/MUNICIPIO/". ($header->getCellByColumnAndRow($i,6)).".png\"
              onerror=\"this.src='assets/default.png';\" height=\"50\">" . ($header->getCellByColumnAndRow($i,6)) . "</th>";
  $tabla .= "</tr></div>";

  $header->__destruct();
  $header = null;
  unset($header);

  echo $tabla;
?>
