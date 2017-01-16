<?php

header("Content-Type:application/json");

//include("funkcija.php");






if(!empty($_GET['name'])){
	$name=$_GET['name'];
	$price=get_price($name);
	
			if (empty($price))
			{
				deliver_response(200,"profil nije pronadjen",NULL);
			}else{
				deliver_response(200,"profil pronadjen",$price);
			}
	}
else
	{
		deliver_response(400,"prazno",NULL);
	}
	


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
    
    
            $sql = 'SELECT pass FROM korisnici WHERE user="'.$find.'" ';


$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
     
        
        
           return $row['pass'];




        
    
}
    
$conn->close();
				
}

	
	function deliver_response($status, $status_message,$data)
	{
			header("HTTP/1.1 $status $status_message");
			$response['status']=$status;
			$response['status_message']=$status_message;
			$response['data']=$data;
			
			$json_response = json_encode($response);
			echo $json_response;
			
	}
	
?>