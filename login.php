<?php
   ob_start();
   session_start();



?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: white;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         .container
          {
                
                position: relative;
              
          
          }
          .kontejner
{
            border: 1px solid grey;
            width:250px;
       margin: 0 auto; 
                
}
          
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: white;
             background-color:grey;
         }
          
      </style>
      
   </head>
	
   <body>
      
       
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            $file = 'profili.xml';
            if(!$xml = simplexml_load_file($file))
                exit('Failed to open '.$file);
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
                
                foreach($xml->children() as $objekt)
                {
                    
                    
                    
                    
                    
                
                
                
                
                
               if ($_POST['username'] ==$objekt->acc && 
                  $_POST['password'] == $objekt->sifra) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = $objekt->acc.'';
                   
                
                   
                   
                   
                   
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




                    $sql = 'SELECT id FROM korisnici WHERE user="'.$_SESSION['username'].'" ';


                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();



                                $k = "INSERT INTO datumiloganja (idosobe,datum_loganja)VALUES('".$row['id']."',CURDATE() )";


                    if ($conn->query($k) === TRUE) {

                    } else {

                    }



                    }

                   
                   
                   
                   
                   
                   
                  
                  echo 'Ukucali ste postojecu vrj. Redirectamo vas za sekund';
                    header('Refresh: 0.1; URL = index.php');
                   
                   
               }
                   
               }
                   
                   
                   
                   
                   
                  $msg = 'Pogresna sifra ili acc';
                   
               
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      <div class="kontejner">
          <h2  >Unesi podatke:</h2>
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = admin" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = admin" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
          Klikni ovdje za LogOut <a href = "logout.php" tite = "Logout">OdLogujSe.</a>
          
          <p>Kliknite ovdje za povratak nazad<a href="index.php">Povratak</a></p>
         </div>
 <p style="text-align:center;font-size:2vw;">Kliknite ovdje za novi profil<a href="novi_profil.php">SIGN IN</a></p>
      </div> 
      





   </body>
</html>