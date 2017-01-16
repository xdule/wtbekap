<?php

$file = 'modeli.xml';
    if(!$xml = simplexml_load_file($file))
    {
        //include 'napuni_kartice_modeli.php';

            if(!$xml = simplexml_load_file($file))
        {
                     if(!$xml = simplexml_load_file($file))
            {

            }

        }

    }



$servername = $_SERVER['HTTP_HOST'];
$username = "root";
$password = "password";

$dbname = "myDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql="DELETE FROM modeli";
 if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating database: " . $conn->error;
    }




for ($i=0; $i<=$xml->count()-1; $i++) {


    $sql = "INSERT INTO modeli (id,link, podtekst, tekst)
    VALUES ( ".$i."   ,'".$xml->model[$i]->slika."','".$xml->model[$i]->title."' , '".$xml->model[$i]->tekst."')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating database: " . $conn->error;
    }




}









$conn->close();
?>