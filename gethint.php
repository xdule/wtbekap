<?php


$q = $_REQUEST["q"];

$e[]='';


$file = 'modeli.xml';
    if(!$xml = simplexml_load_file($file))
        exit('Failed to open '.$file);

for ($i=0; $i<=$xml->count()-1; $i++) 
{
    
   // if($xml->model[$i]->tekst)
   // $xml->model[$i]->title


$a=$xml->model[$i]->tekst;
$b=$xml->model[$i]->title;


$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
   // $a = strtolower($a);
    $len=strlen($q);
    
        if (stristr($q, substr($a, 0, $len))) {
            if ($hint === "") {
                $hint = $a;
                
            } else {
                //$hint .= ", ";
                $hint=$hint.$a;
            }
            $e[] =htmlspecialchars($a);
           // echo $hint === "" ? "no suggestion" : $hint;
           // echo "<br>";
        }
         if (stristr($q, substr($b, 0, $len))) {
            $e[] =htmlspecialchars($b);
           // echo $b;
           // echo "<br>";
        }
    
}
    
    
}

// Output "no suggestion" if no hint was found or output correct values 
//echo $e === "" ? "no suggestion" : $e;
echo join(" ,<b> ",$e);
?>