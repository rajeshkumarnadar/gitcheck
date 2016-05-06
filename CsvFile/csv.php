<?php
$file = fopen("ANC 1-final2016 .csv","r");
echo "<pre>";
$data=array();
while(! feof($file))
{
  	array_push($data,fgetcsv($file));
}
print_r($data);

toCSV($data);



fclose($file);


function toCSV($data, $outstream) {
    if (count($data)) {
        // get header from keys
        fputcsv($outstream, array_keys($data[0]));
        // 
        foreach ($data as $row) {
            fputcsv($outstream, $row);
        }
    }
}

?>