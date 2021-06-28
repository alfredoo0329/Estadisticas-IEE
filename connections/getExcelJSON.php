<?php
  $excel_name = $_POST['excel_name'];
  $excel_folder = $_POST['excel_folder'];

  $json_file = file_get_contents("../docs/JSONS/".$excel_folder."/".$excel_name.".json");
  $json_data = json_decode($json_file, true);
  $table = "<table class=\"tabla\"><thead><tr><th><img src=\"assets/default.png\">#</th>";
  foreach($json_data[0] as $key => $name)
    if (file_exists("../assets/MUNICIPIO/".$key.".png"))
      $table .= "<th><img src=\"assets/MUNICIPIO/".$key.".png\"><strong>".$key."</strong></th>";
    else
      $table .= "<th><img src=\"assets/default.png\"><strong>".$key."</strong></th>";
  $table .= "</th></tr></thead><tbody>";

  $i = 1;
  foreach($json_data as $row) {
    $table .= "<tr><td>".$i."</td>";
    foreach($row as $cell)
      $table .= "<td>".$cell."</td>";
    $table .= "</tr>";
    $i++;
  }
  $table .= "</tbody></table>";
  echo $table;
 ?>
