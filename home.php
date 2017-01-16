<!DOCTYPE html>
<html>
<head>


</head>



<body onload="napuni();loadphp('napuni_kartice.php')" >
<link rel="stylesheet" href="stil.css">
<script src="skripta.js"></script>
<div class="row">
	<div class="col-1">
	</div>
<div class="col-2" action="napuni_kartice.php" onload="napuni()">
    
    
    
   
    
	<div class="glavabanner" >
	<p class="aktuelni" ><b> AKTUELNI MODELI:</b></p>
	</div>
    <div class='karosel' style="position:relative;" >
      
        
        <img src="./images/lijevi.jpg" class="lijevid" id="lijevi" onclick="funkcija(-1)" >
        <img src="./images/desni.jpg" class="desnid" id="desni" onclick="funkcija(1)" >

        <div id="tito">
                <img  class="levaslika"  id="slika1" src="images/karosel/1.jpg" >
                <img class="srednjaslika" id="slika2" src="images/karosel/2.jpg" >
                <img class="desnaslika" id="slika3" src="images/karosel/3.jpg" >
    

        </div>
    </div>
    <?php include'napuni_kartice.php'?>

	
	


</div>
<div class="col-1">
    
    <div class="login">

    <form id="forma1" style=" padding:0.5vw;" onsubmit="event.preventDefault(); validacijaLoginaSubmit();load('login.php')" >
   <!--     <p id="emailVal"></p>
        <input type="text" id="emailbox" value="Login" class="loginfont"  onfocusout="validiraj()" onload="napuni();" >
        <input type="text" id="emailsifra" value="Password" class="loginfont" onfocusout="validirajsifru()">
        <p id="passval"></p>
        
<input type="submit" value="Submit" id="submithome" class="loginfont" onclick="validacijaLoginaSubmit()">-->
        
        <a href="login.php">
        <img src="./images/icon_login.png" > 
        </a>
    </form>
        
</div>
</div>
</div>
    
</body>



</html>
