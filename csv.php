<?php

$file = 'modeli.xml';
    if(!$xml = simplexml_load_file($file))
        exit('Failed to open '.$file);

	$slika=array();
	$title=array();
	$tekst=array();
	
	$data=array();
	
foreach($xml->children() as $objekt)
{
	array_push($data,$objekt->slika.",".$objekt->title.",".$objekt->tekst);
    
	array_push($slika,$objekt->slika);
	array_push($title,$objekt->title);
	array_push($tekst,$objekt->tekst);
	
}




$fp = fopen('CSVFile.csv', 'w');
$pocetak=explode(",","slika,title,tekst");
fputcsv($fp,$pocetak);
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}

fclose($fp);


header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="CSVFile.csv"');
readfile('CSVfile.csv');



?>