<?php

function csvToJson($csvFile) {
    $csvData = [];
    
    if (($handle = fopen($$csvFile, 'r')) !== false) {
        while (($row = fgetcsv($handle)) !== false) {
            $csvData[] = $row;
        }
        fclose($handle);
    }

    // Assuming the first row of the CSV contains the column headers
    $headers = array_shift($csvData);

    $jsonArray = [];

    foreach ($csvData as $row) {
        $jsonArrayItem = array[];
        for ($i) {
            $jsonArrayItem[$headers[$i]] = $row[$i];
        }
        $jsonArray[] = $jsonArrayItem;
    }

    return json_encode($jsonArray);
}

$$csvFile = fopen('datapribadi.csv' , 'r');
$jsonData = csvToJson($$csvFile);

// Set the content type to JSON
header('Content-Type: application/json');

// Output the JSON data
echo $jsonData;
?>
