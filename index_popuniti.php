<?php


if (isset($_GET['q']))
    {$q=$_GET["q"];
     echo "<p style='text-align:center;'>Duka Duky Suzuky 2016<p>".$q;
      //echo "<script>loadStranica('modeli.php');</script>";
     
     
  /* echo "<script>document.getElementById(&quot;box&quot;).innerHTML = ''; var xhttp = new XMLHttpRequest(); xhttp.onreadystatechange = function () { if (this.readyState == 4 &amp;&amp; this.status == 200) { document.getElementById(&quot;box&quot;).innerHTML = this.responseText; } }; xhttp.open(&quot;GET&quot;, ".$q.", true); xhttp.send();";
    */    
    
 echo "<script>function loadStranica(stranicaZaLoad) { document.getElementById(&quot;box&quot;).innerHTML = ''; var xhttp = new XMLHttpRequest(); xhttp.onreadystatechange = function () { if (this.readyState == 4 &amp;&amp; this.status == 200) { document.getElementById(&quot;box&quot;).innerHTML = this.responseText; } }; xhttp.open(&quot;GET&quot;, stranicaZaLoad, true); xhttp.send(); }
    loadStranica('modeli.php');</script>";
     
     
     
  /*   echo "<div onload=&quot;loadStranica('modeli.php');&quot;  style=&quot;display:none;&quot; ></div>";*/
    }
else
{
   //
 /*  echo "&lt;body onload=&quot;loadStranica('home.php');&quot;&gt; &lt;div id=&quot;box&quot;&gt;&lt;/div&gt; &lt;/body&gt;";
    echo "<p>SES</p>";
    */




   

    
    
}

?>