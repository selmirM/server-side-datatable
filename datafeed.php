<?php

$file="data.csv";
if(!empty($file))
{
 $file_data = fopen($file, 'r');
 fgetcsv($file_data);
 while($row = fgetcsv($file_data))
 {
  $data[] = array(
   'id'  => $row[0],
   'name'  => $row[1],
   'position'  => $row[2],
   'phone'  => $row[3],
  );
 }
 echo json_encode($data);
}

?>
