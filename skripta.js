var vrijednost=1;
var vrijednost2=2;
var vrijednost3=3;

function napuni()
{
    
document.getElementById("emailbox").value = localStorage.getItem("lastname");
document.getElementById("emailsifra").value = localStorage.getItem("pass");
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


function pozov()
{
    alert("SEXUALNE USLUGE");
}


function validacijaLoginaSubmit()
{
    if(validiraj())
        if(validirajsifru())
            document.forms['forma1'].submit();
    

}

function validiraj()
{
    
    document.getElementById('emailVal').innerHTML = "";
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if( re.test(document.getElementById('emailbox').value))
    {document.getElementById('emailVal').innerHTML = "validan email";
     

     if (typeof(Storage) !== "undefined") {
    // Store
    localStorage.setItem("lastname", document.getElementById('emailbox').value);
    localStorage.setItem("pass", document.getElementById('emailsifra').value);
    // Retrieve
    
}

     return validirajsifru();
     
}
    else 
    {document.getElementById('emailVal').innerHTML = "Pogresno unesen mail";
      return false;
    }
}

function validirajsifru()
{
    document.getElementById('passval').innerHTML = "";
    var re = /^(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{6,50})$/;
    if( re.test(document.getElementById('emailsifra').value))
       { document.getElementById('passval').innerHTML = "validan email";
       return true;
       }
    else 
    {document.getElementById('passval').innerHTML = "Pogresno unesena sifra: Sugestija min 6, max50 slova, makar jedan broj i makar jedno veliko slovo";
     return false;
      
    }
}




function validirajairedrome()
{
    
    document.getElementById('aeredromp').innerHTML = "";
    var re = /^[a-zA-Z ]+$/;
    if( re.test(document.getElementById('aeredromform').value))
       { document.getElementById('aeredromp').innerHTML = "Validan Unos";
       return true;
       }
    else 
    {document.getElementById('aeredromp').innerHTML = "Pogresno unesena aeredrom:sugestija aeredromi su slova od a-z + A- Z";
     return false;
      
    }
}
function validirajmodele()
{
   // document.getElementById('submitmodel').preventDefault();
    
    document.getElementById('modelp').innerHTML = "";
    var re = /^[a-zA-Z0-9 ]+$/;
    if( re.test(document.getElementById('unsomodela').value))
       { document.getElementById('modelp').innerHTML = "Validan Unos";
        document.forms['formamodel'].submit();
        
       return true;
       }
    else 
    {document.getElementById('modelp').innerHTML = "Pogresno unesena model:sugestija modeli su slova od a-z + A- Z i brojevi ";
     return false;
      
    }
}
function validirajmodeleout()
{
   // document.getElementById('submitmodel').preventDefault();
    
    document.getElementById('modelp').innerHTML = "";
    var re = /^[a-zA-Z0-9 ]+$/;
    if( re.test(document.getElementById('unsomodela').value))
       { document.getElementById('modelp').innerHTML = "Validan Unos";
        
        
       return true;
       }
    else 
    {document.getElementById('modelp').innerHTML = "Pogresno unesena model:sugestija modeli su slova od a-z + A- Z i brojevi ";
     return false;
      
    }
}

function ValidacijaEmail()
{

      var emailVal = document.getElementById('emailVal');
  emailVal.innerHTML = "SES";
    alert(document.getElementById('emailbox').value);
    
  var formRegistracija = document.getElementById('fRegistracija')
  var emailRegEx = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
  if(!emailRegEx.test(formRegistracija['emailbox'].value))
  {
      alert(document.getElementById('emailbox').value);
    emailVal.innerHTML += "Pogrešno unesen email";
    document.getElementById('emailbox').focus();
    return false;
  }
 

}






function funkcija(number)
{
    
    
    if(number=="1")
        {
            if(vrijednost<=5)
                {
                vrijednost++;
                vrijednost2=vrijednost-1;
                vrijednost3=vrijednost+1;
                    if(vrijednost3==7)
                        vrijednost3=1;
                }
            else if(vrijednost==6)
                {
                    vrijednost=1;
                    vrijednost2=6;
                    vrijednost3=vrijednost+1;
                }
            
        }
    if(number=="-1")
        {
            if(vrijednost>=2)
                {
                vrijednost--;
                vrijednost2=vrijednost-1;
                vrijednost3=vrijednost+1;
                    if(vrijednost2==0)
                        vrijednost2=6;
                }
            else if(vrijednost==1)
                {
                    vrijednost=6;
                    vrijednost2=5;
                    vrijednost3=1;
                }
            
        }
    
    
    
            document.getElementById('slika1').src="./images/karosel/"+vrijednost+".jpg";
            document.getElementById('slika2').src="./images/karosel/"+vrijednost2+".jpg";
            document.getElementById('slika3').src="./images/karosel/"+vrijednost3+".jpg";

}


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
