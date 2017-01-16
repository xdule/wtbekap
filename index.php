<?php
    session_start();
    if(!isset($_SESSION["username"]))
        $_SESSION["username"]='guest';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stil.css">
<link rel="stylesheet" href="stil2.css">
</head>

<script src="skripta.js"></script>
<script src="skripta2.js"></script>
<script src="skripta3.js"></script>
<script src="skripta4.js"></script>
<script src="skripta5.js"></script>




    

<div>
<div class="header">
	<header>
		<img src="./images/aircraft.png" width="10px" style="position:fixed;top:0px;left:0px;z-index:5;width:7vw;height:7vw">
			<h1 class="titl">AVIO MAGAZIN</h1>

			<ul>
    <li><a  onclick="loadStranica('home.php');napuni();">NASLOVNA</a></li>
    <li><a onclick="loadStranica('novosti.php')">NOVOSTI</a></li>
    <li><a onclick="loadStranica('modeli.php')">MODELI</a></li>
    <li><a onclick="loadStranica('aeredrom.php')">AEREDROM</a></li>
    <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">O NAMA</a>
                    <div class="dropdown-content" id="myDropdown">
                    <a onclick="loadStranica('onama.php')">LOKACIJA</a>
                    <a target="_blank" href="csv.php">DOWNLOAD CSV</a>
                    <a target="_blank" href="pdf.php">DOWNLOAD PDF</a>
                        
                    <a target="_blank" href="prebaci.php" <?php if($_SESSION['username']!='admin'){echo 'style="display:none;"';}  ?>  >PREBACi BAZU</a>    
                            
                </li>
                  
                  
                    </div>
    
   
    
    
    
            </ul>
     </header>
    

    </div>
</div>



<body onload="loadStranica('home.php');">
       


    <div id="box"></div>
      
</body>

<div style="width:100%;background-color:#333;color:white;">DOBRO DOSLI 
<?php
       if(!empty($_SESSION['username']) && $_SESSION['username']!='guest')
       {echo "<p style='font-size:2vw;'>".$_SESSION['username']."-e</p>";
       echo "<a href='logout.php' style='position:relative;left:80%;font-size:2vw;'>LOG OUT</a>";
       }
        else
        {
                echo "<p style='font-size:2vw;'>".$_SESSION['username']."-e</p>";
            echo "<a href='login.php' style='font-size:2vw;'>LOGUJTE SE</a>";
        }


?>

</div>










<p style="text-align:center;">Duka Duky Suzuky 2016<p>
    

</html>
