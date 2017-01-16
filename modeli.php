<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stil.css">

</head>
    
    
<body>
<script src="skripta.js"></script>
<div class="row">
	
<div class="col-1" >
    </div>
<div class="col-2">
	<div class="glavabanner" >
	<p class="aktuelni" ><b> AKTUELNI MODELI:</b></p>
	</div>
   



    

    <?php include'napuni_kartice_modeli.php'?>

<script src="skripta2.js"></script>
<div class="card" <?php if($_SESSION['username']!='admin'){echo 'style="display:none;"';}  ?>  >
    <form method="get" >
        
        <p>Unesite novi model:</p>
        <input type="text" name="ime" id="ses1" value="Unesi ime modela" style="width:100%;" onfocusout="validirajmodelunos();">
        <p id="validacijaunosamodela" style="color:red;"></p>
        <p>Unesite podtekst:</p>
        <input type="text" name="podtekst" id="ses" value="Unesi kratak tekst" style="width:100%;" onfocusout="validirajmodelunos();">
        <select name="cds" id="izbor" onchange="">
        <p>Izaberite proizvodjaca:</p>    
        <option value="0">Izaberi proizvodaca:</option>
        <option value="1">Boing</option>
        <option value="2">Yugo</option>
        <option value="3">Galeb</option>
        </select>

        
        <input type="button" value="Snimi" onclick="loadphp('dodaj_model.php');">
        


     


        
    </form>

    <div class="w3-container">
 
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn">Edit</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-closebtn">&times;</span>
        <h2>Edituj model</h2>
      </header>
      <div class="w3-container">
        
        <select name="cds" id="izbory" onchange="">
        <p>Koji ce se model editovat:</p>    
            <option value="0">Koji model ces se editovat:</option>
        <?php 
             include 'napuni_selektor.php';
        ?>
          </select>  
          
        <p>Editujte ime modela:</p>
        <input type="text" name="ime" id="ses1x" value="Unesi novo ime modela" style="width:100%;">
        <p>Editujte podtekst:</p>
        <input type="text" name="podtekst" id="sesx" value="Unesi novi kratak tekst" style="width:100%;">
          
        <select name="cds" id="izborx" onchange="">
        <p>Izaberite novog proizvodjaca:</p>    
        <option value="0">Izaberi proizvodaca:</option>
        <option value="1">Boing</option>
        <option value="2">Yugo</option>
        <option value="3">Galeb</option>
        </select>


        

        
        <input type="button" value="Snimi" onclick="loadphpmodeledit('editovanjemodela.php')">
        
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>

</div>
	
<div id="xbox" style="display:none;"></div>

</div>
<div class="col-1" >
    
    <div class="login">

    <form id="formamodel" onsubmit="event.preventDefault(); validirajmodele();" style=" padding:0.5vw;" >
        <p id="modelp">Ukucaj ime modela:</p>
        
        
        <input type="text" id="unsomodela1"  class="loginfont"   onkeyup="showHint(this.value)" >
     
                <p id="txtHint"></p>

        
    </form>
        
        <button onclick="showsearch();" value="Search">SEARCH</button>
        <p id="txtHint1"></p>
        
      
</div>
</div>
</div>

</body>
</html>



