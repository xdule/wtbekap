function loadphp(stranica) {
    
    
     if(validirajmodelunos())
         {
    var xhttp = new XMLHttpRequest();

     xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
               
				        loadStranica('modeli.php');
                    
            }
     };
    



  
    xhttp.open("GET", stranica+"?a="+document.getElementById("ses").value+"&b="+document.getElementById("ses1").value+"&c="+document.getElementById("izbor").value, true);
    xhttp.send();
         }
}

function loadStranica(stranicaZaLoad) {
    
    document.getElementById("box").innerHTML = '';
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("box").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", stranicaZaLoad, true);
    xhttp.send();
}