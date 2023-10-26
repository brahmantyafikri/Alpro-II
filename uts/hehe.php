<?php

$row = 1;
$file = fopen("datapribadi.csv", "r");
while (($data = fgetcsv($file, 8000, ",")) !== FALSE) {
    $num = count($data);
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "\n";}}
fclose($file);

?>
