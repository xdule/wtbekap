<?php

sleep(0.3);

//$xml=simplexml_load_file("modeli.xml") or die("Error: Cannot create object");




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

$sql = "SELECT id, tekst, podtekst, link FROM modelibaza";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        
               
        
        
        



        if($_SESSION['username']=='admin')
{
 echo '<div class="card" style="position:relative;">
    <a href="'.'brisanje_modeli.php?q='.$row["id"].'" style="position:absolute;right:10px;top:10px;color:grey;size:1vw;">x</a>
    <a  style="color:inherit;text-decoration:none;">
		<img src="'.htmlspecialchars($row["link"]).'" alt="Avatar" >
		<h4><b>'.htmlspecialchars($row["tekst"]).'</b></h4>
    <p>'.htmlspecialchars($row["podtekst"]).'</p>
	</a>
    </div>';
    


}
    
    else 
    {
         echo '<div class="card" style="position:relative;">
   
    <a  style="color:inherit;text-decoration:none;">
		<img src="'.htmlspecialchars($row["link"]).'" alt="Avatar" >
		<h4><b>'.htmlspecialchars($row["tekst"]).'</b></h4>
    <p>'.htmlspecialchars($row["podtekst"]).'</p>
	</a>
    </div>';

    }

        
        
        
        
    }
} else {
    echo "0 results";
}




$sql = 'SELECT id FROM korisnici WHERE user="'.$_SESSION['username'].'" ';








$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
     
        
        
            $k = "INSERT INTO datumi (idosobe,datumpristupa)VALUES('".$row['id']."',CURDATE() )";


if ($conn->query($k) === TRUE) {
   
} else {
    echo "Error creating database: " . $conn->error;
}





        
    
}







$conn->close();



















//****************************************************************

/*


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

for ($i=0; $i<=$xml->count()-1; $i++) {
    
if($_SESSION['username']=='admin')
{
 echo '<div class="card" style="position:relative;">
    <a href="'.'brisanje_modeli.php?q='.$i.'" style="position:absolute;right:10px;top:10px;color:grey;size:1vw;">x</a>
    <a  style="color:inherit;text-decoration:none;">
		<img src="'.htmlspecialchars($xml->model[$i]->slika).'" alt="Avatar" >
		<h4><b>'.htmlspecialchars($xml->model[$i]->tekst).'</b></h4>
    <p>'.htmlspecialchars($xml->model[$i]->title).'</p>
	</a>
    </div>';


}
    
    else 
    {
         echo '<div class="card" style="position:relative;">
   
    <a  style="color:inherit;text-decoration:none;">
		<img src="'.htmlspecialchars($xml->model[$i]->slika).'" alt="Avatar" >
		<h4><b>'.htmlspecialchars($xml->model[$i]->tekst).'</b></h4>
    <p>'.htmlspecialchars($xml->model[$i]->title).'</p>
	</a>
    </div>';

    }

   }
    */
    
    
    
    
//************************************************************    
    
    
    
    
    
//echo '<input type="hidden" name="id" value="', htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'), '" />';


    



    
   // echo $xml->karta[$i]->slika;






/*






  echo '<div class="card" style="position:relative;">
    <a href="'.'brisanje_modeli.php?q='.$i.'" style="position:absolute;right:10px;top:10px;color:grey;size:1vw;">x</a>
    <a  style="color:inherit;text-decoration:none;">
		<img src="'.$xml->model[$i]->slika.'" alt="Avatar" >
		<h4><b>'.$xml->model[$i]->tekst.'</b></h4>
    <p>'.$xml->model[$i]->title.'</p>
	</a>
    </div>';













samo dio


&#x3C;div class=&#x22;w3-container&#x22;&#x3E;
 
  &#x3C;button onclick=&#x22;document.getElementById(&#x27;id01&#x27;).style.display=&#x27;block&#x27;&#x22; class=&#x22;w3-btn&#x22;&#x3E;Edit&#x3C;/button&#x3E;

  &#x3C;div id=&#x22;id01&#x22; class=&#x22;w3-modal&#x22;&#x3E;
    &#x3C;div class=&#x22;w3-modal-content&#x22;&#x3E;
      &#x3C;header class=&#x22;w3-container w3-teal&#x22;&#x3E; 
        &#x3C;span onclick=&#x22;document.getElementById(&#x27;id01&#x27;).style.display=&#x27;none&#x27;&#x22; 
        class=&#x22;w3-closebtn&#x22;&#x3E;&#x26;times;&#x3C;/span&#x3E;
        &#x3C;h2&#x3E;Edituj model&#x3C;/h2&#x3E;
      &#x3C;/header&#x3E;
      &#x3C;div class=&#x22;w3-container&#x22;&#x3E;
        &#x3C;p&#x3E;Editujte ime modela:&#x3C;/p&#x3E;
        &#x3C;input type=&#x22;text&#x22; name=&#x22;ime&#x22; id=&#x22;ses1x&#x22; value=&#x22;Unesi ime modela&#x22; style=&#x22;width:100%;&#x22;&#x3E;
        &#x3C;p&#x3E;Editujte podtekst:&#x3C;/p&#x3E;
        &#x3C;input type=&#x22;text&#x22; name=&#x22;podtekst&#x22; id=&#x22;sesx&#x22; value=&#x22;Unesi kratak tekst&#x22; style=&#x22;width:100%;&#x22;&#x3E;
        &#x3C;select name=&#x22;cds&#x22; id=&#x22;izborx&#x22; onchange=&#x22;&#x22;&#x3E;
        &#x3C;p&#x3E;Izaberite proizvodjaca:&#x3C;/p&#x3E;    
        &#x3C;option value=&#x22;0&#x22;&#x3E;Izaberi proizvodaca:&#x3C;/option&#x3E;
        &#x3C;option value=&#x22;1&#x22;&#x3E;Boing&#x3C;/option&#x3E;
        &#x3C;option value=&#x22;2&#x22;&#x3E;Yugo&#x3C;/option&#x3E;
        &#x3C;option value=&#x22;3&#x22;&#x3E;Galeb&#x3C;/option&#x3E;
        &#x3C;/select&#x3E;

        
        &#x3C;input type=&#x22;button&#x22; value=&#x22;Snimi&#x22; onclick=&#x22;loadphpmodel(&#x27;editovanjemodela.php?q=2&#x27;);loadStranica(&#x27;modeli.php&#x27;);&#x22;&#x3E;
        
      &#x3C;/div&#x3E;
      &#x3C;footer class=&#x22;w3-container w3-teal&#x22;&#x3E;
        &#x3C;p&#x3E;Modal Footer&#x3C;/p&#x3E;
      &#x3C;/footer&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;






















RADII al ne klika

  echo '<div class="card" style="position:relative;">
    <a href="'.'brisanje_modeli.php?q='.$i.'" style="position:absolute;right:10px;top:10px;color:grey;size:1vw;">x</a>
    
    <div class="w3-container">
 
  <button onclick="document.getElementById(', htmlspecialchars($row['id01'], ENT_QUOTES, 'UTF-8'),').style.display=', htmlspecialchars($row['block'], ENT_QUOTES, 'UTF-8'),'" class="w3-btn">Edit</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById(', htmlspecialchars($row['id01'], ENT_QUOTES, 'UTF-8'),').style.display=', htmlspecialchars($row['none'], ENT_QUOTES, 'UTF-8'),'" 
        class="w3-closebtn">&times;</span>
        <h2>Edituj model</h2>
      </header>
      <div class="w3-container">
        <p>Editujte ime modela:</p>
        <input type="text" name="ime" id="ses1x" value="Unesi ime modela" style="width:100%;">
        <p>Editujte podtekst:</p>
        <input type="text" name="podtekst" id="sesx" value="Unesi kratak tekst" style="width:100%;">
        <select name="cds" id="izborx" onchange="">
        <p>Izaberite proizvodjaca:</p>    
        <option value="0">Izaberi proizvodaca:</option>
        <option value="1">Boing</option>
        <option value="2">Yugo</option>
        <option value="3">Galeb</option>
        </select>

        
        <input type="button" value="Snimi" onclick="loadphpmodel(', htmlspecialchars($row['editovanjemodela.php?q=2'], ENT_QUOTES, 'UTF-8'),');">
        
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>
    
    
    <a  style="color:inherit;text-decoration:none;">
		<img src="'.$xml->model[$i]->slika.'" alt="Avatar" >
		<h4><b>'.$xml->model[$i]->tekst.'</b></h4>
    <p>'.$xml->model[$i]->title.'</p>
	</a>
    </div>';












//cisti buttno

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
        <p>Editujte ime modela:</p>
        <input type="text" name="ime" id="ses1x" value="Unesi ime modela" style="width:100%;">
        <p>Editujte podtekst:</p>
        <input type="text" name="podtekst" id="sesx" value="Unesi kratak tekst" style="width:100%;">
        <select name="cds" id="izborx" onchange="">
        <p>Izaberite proizvodjaca:</p>    
        <option value="0">Izaberi proizvodaca:</option>
        <option value="1">Boing</option>
        <option value="2">Yugo</option>
        <option value="3">Galeb</option>
        </select>

        
        <input type="button" value="Snimi" onclick="loadphpmodel('editovanjemodela.php?q=2');loadStranica('modeli.php');">
        
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
</div>






*/

$xml=null;
?>