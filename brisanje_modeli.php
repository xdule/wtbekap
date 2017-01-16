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

$file = 'modeli.xml';
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
	echo $xml->saveXML("modeli.xml");


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "myDB1";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database



$sql = "DELETE FROM modelibaza WHERE id=".$id."   ";



if ($conn->query($sql) === TRUE) {
    echo "uneseno";
} else {
    echo "Error creating database: " . $conn->error;
}


$sql = "SET @count = 0";
if ($conn->query($sql) === TRUE) {
    echo "uneseno";
} else {
    echo "Error creating database: " . $conn->error;
}

$sql = "UPDATE modelibaza SET  id = @count:= @count + 1";
if ($conn->query($sql) === TRUE) {
    echo "uneseno";
} else {
    echo "Error creating database: " . $conn->error;
}



$conn->close();






   
   header('Location: index.php?q=modeli.php');

?>