<?php


$q = htmlspecialchars($_REQUEST["q"]);

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
            $e[] =$a."  ".$b;
           // echo $hint === "" ? "no suggestion" : $hint;
           // echo "<br>";
        }
        else if (stristr($q, substr($b, 0, $len))) {
            $e[] =$a."  ".$b;
           // echo $b;
           // echo "<br>";
        }
    
}
    
    
}

// Output "no suggestion" if no hint was found or output correct values 
//echo $e === "" ? "no suggestion" : $e;

/*for ($c=0; $c<=count($e)-1; $c++) 
{
   echo $e[c]."<br>";

}*/
echo "<p>SEARCH RESULT:</p>";
for ($i=1; $i<=count($e)-1; $i++) 
{
    echo $i.'. '.$e[$i].' <br>';
}

//echo join(" ,<b> ",$e);
?>