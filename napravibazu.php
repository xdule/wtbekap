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

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 






// Create database
$sql = "CREATE DATABASE myDB1";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}



$conn->close();



$dbname = "myDB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "CREATE TABLE modeli (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
tekst VARCHAR(30) NOT NULL,
podtekst VARCHAR(30) NOT NULL,
link VARCHAR(50)   )";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}





$sql = "CREATE TABLE modelibaza (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
tekst VARCHAR(30) NOT NULL,
podtekst VARCHAR(30) NOT NULL,
link VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}




$sql = "CREATE TABLE korisnici (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user VARCHAR(30) NOT NULL,
pass VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}







for ($i=0; $i<=$xml->count()-1; $i++) {


    $sql = "INSERT INTO modeli (link, podtekst, tekst)
    VALUES ('".$xml->model[$i]->slika."','".$xml->model[$i]->title."' , '".$xml->model[$i]->tekst."')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating database: " . $conn->error;
    }




}

for ($i=0; $i<=$xml->count()-1; $i++) {


    $sql = "INSERT INTO modelibaza (link, podtekst, tekst)
    VALUES ('".$xml->model[$i]->slika."','".$xml->model[$i]->title."' , '".$xml->model[$i]->tekst."')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating database: " . $conn->error;
    }




}


$file = 'profili.xml';
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



for ($i=0; $i<=$xml->count()-1; $i++) {


    $sql = "INSERT INTO korisnici (user,pass)
    VALUES ('".$xml->profil[$i]->acc."','".$xml->profil[$i]->sifra."' )";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating database: " . $conn->error;
    }




}









// Create database

//$sql = "DELETE FROM modeli";




?>