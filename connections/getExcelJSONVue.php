<?php
  $excel_name = $_POST['excel_name'];
  $excel_folder = $_POST['excel_folder'];

  $json_file = file_get_contents("../docs/JSONS/".$excel_folder."/".$excel_name.".json");
  echo $json_file;
 ?>
