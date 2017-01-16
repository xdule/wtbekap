<?php


$xmlDoc = new DOMDocument();
$xmlDoc->load("kartice.xml");

$x=$xmlDoc->getElementsByTagName('slika');
$xml=simplexml_load_file("kartice.xml") or die("Error: Cannot create object");

for ($i=0; $i<=$x->length-1; $i++) {
    



    echo '<div class="card" style="position:relative;">
    <a href="'.'brisanje_naslovna.php?q='.$i.'" style="position:absolute;right:10px;top:10px;color:grey;size:1vw;">x</a>
	<a  style="color:inherit;text-decoration:none;">
		<img src="'.$xml->karta[$i]->slika.'" alt="Avatar" >
		<h4><b>'.$xml->karta[$i]->title.'</b></h4>
    <p>'.$xml->karta[$i]->text.'</p>
	</a>
    </div>';

    
   // echo $xml->karta[$i]->slika;
}





/*
for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) { 
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}*/
?>