<?php
//$q=$_GET["q"];

$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];
$slika="./images/tupolev.jpg";

$id = $_GET["d"];
echo $id;


$file = 'modeli.xml';
    if(!$xml = simplexml_load_file($file))
        exit('Failed to open '.$file);
    
	$index = 0;
	$rel=0;
	
    
   
	$nodeToRemove=null;
	$str = "";
	foreach($xml->children() as $artikal){

        echo $id;
       
        if($index==$id)
         {
            $nodeToRemove = $artikal;
            if($nodeToRemove!=null)
            {



                if($c==1)
                    $slika="./images/boeing.jpg";
                else if($c==2)
                    $slika="./images/airbus.jpg";
                else
                    $slika="./images/tupolev.jpg";




                $artikal->title=$a;
                $artikal->tekst=$b;
                $artikal->slika=$slika;
            }
            $str = $nodeToRemove->naziv . " " . $nodeToRemove->cijena;
            $rel=$index;
        }       
            
	
	   $index++;
    }



                if($c==1)
                    $slika="./images/boeing.jpg";
                else if($c==2)
                    $slika="./images/airbus.jpg";
                else
                    $slika="./images/tupolev.jpg";



$servername = $_SERVER['HTTP_HOST'];
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
$sql = "UPDATE modelibaza SET podtekst='".$a."', tekst='".$b."' , link='".$slika."' WHERE id=".$id."";



if ($conn->query($sql) === TRUE) {
    echo "uneseno";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();








	
	
	echo $xml->saveXML("modeli.xml");
    $xml=null;
   
   //header('Location: index.php?q=modeli.php');

?>