<?php
//$q=$_GET["q"];


/*$xmlDoc = new DOMDocument();
$xmlDoc->load("kartice.xml");
$x=$xmlDoc->getElementsByTagName('slika');
//$x->item($q)->parentNode->removeChild($x->item($q));   
//$xmlDoc->item($q)->removeChild(item($q));
echo $x->item($q)->childNodes->item(0)->nodeValue;

//echo "<script type='text/javascript'>alert('$x->item($i)->childNodes->item(0)->nodeValue');</script>";
*/
/*
$xmlDoc = new DOMDocument();
$xmlDoc->load("kartice.xml");
$x=$xmlDoc->getElementsByTagName('kartica');

echo $x->item($q)->childNodes->item(0)->nodeValue;

*/
//deleteNode($xmlDoc->item($q));

$file = 'kartice.xml';
    if(!$xml = simplexml_load_file($file))
        exit('Failed to open '.$file);
    
	$index = 0;
	$rel=0;
	$id = $_GET["q"];
    
    $a=$xml->children();

    echo $id." ".$a->id;
	$nodeToRemove=null;
	$str = "";
	foreach($xml->children() as $artikal){

        echo $id;
        if($artikal->id == $id)
        {
            $nodeToRemove = $artikal;
            $str = $nodeToRemove->naziv . " " . $nodeToRemove->cijena;
            $rel=$index;
        }
        if($index==$id)
         {
            $nodeToRemove = $artikal;
            $str = $nodeToRemove->naziv . " " . $nodeToRemove->cijena;
            $rel=$index;
        }       
            
	
	   $index++;
    }
	
	if($nodeToRemove!=null)
	{
		unset($nodeToRemove[0]);
	}
	echo $xml->saveXML("kartice.xml");

    header('Location: index.php');
   

?>