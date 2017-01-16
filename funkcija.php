<?php

function get_price($find){
    
    
        
            $servername = $_SERVER['HTTP_HOST'];
            $username = "root";
            $password = "password";
            $dbname = "myDB1";
            $i=0;
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
    
    
    
            $sql = 'SELECT pass FROM korisnici WHERE user="'.$_SESSION['username'].'" ';


$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
     
        
        
           return $row['pass'];






        
    
}
    


				
}
?>