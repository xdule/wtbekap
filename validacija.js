function validacijaRegistracija()
{
  var emailVal = document.getElementById('emailVal');
  emailVal.innerHTML = "";
  var formRegistracija = document.getElementById('fRegistracija')
  var emailRegEx = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
  if(!emailRegEx.test(formRegistracija['email'].value))
  {
    emailVal.innerHTML += "Pogrešno unesen email";
    document.getElementById('email').focus();
    return false;
  }
 
 
  var korImeVal = document.getElementById('korImeVal');
  korImeVal.innerHTML = "";
  if(formRegistracija["korIme"].value == null || formRegistracija["korIme"].value == "")
  {
    korImeVal.innerHTML += "Unesite korisničko ime";
    document.getElementById('korIme').focus();
    return false;
  }
  var re = /^\w+$/;
  if(!re.test(formRegistracija["korIme"].value))
  {
    korImeVal.innerHTML += "Korisničko ime može sadržavati samo slova, brojeve i donje crtice";
    document.getElementById('korIme').focus();
    return false;
  }
 
  // password mora da se sastoji iz slova i brojeva, i min duzina 6
  var rePass = /(?=.*\d)(?=.*[a-z]).{6,20}/;
  var lozinkaVal = document.getElementById('lozinkaVal');
  lozinkaVal.innerHTML = "";
  if(!rePass.test(formRegistracija["lozinka"].value))
  {
    lozinkaVal.innerHTML += "Lozinka mora sadržavati samo slova i brojeve, minimalna dužina 6 znakova";
    document.getElementById('lozinka').focus();
    return false;
  }
 
  var lozinkaProvjera = document.getElementById('lozinka').value;
  var ponLozinkaProvjera = document.getElementById('ponLozinka').value;
  var ponLozinkaVal = document.getElementById('ponLozinkaVal');
  ponLozinkaVal.innerHTML = "";
  if(lozinkaProvjera != ponLozinkaProvjera)
  {
    ponLozinkaVal.innerHTML += "Lozinke se ne poklapaju";
    return false;
  }
 
  var spolVal = document.getElementById('spolVal');
  spolVal.innerHTML = "";
  if(!document.getElementById('spolM').checked && !document.getElementById('spolZ').checked)
  {
    spolVal.innerHTML += "Odaberite spol";
    return false;
  }
}