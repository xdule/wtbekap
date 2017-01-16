# Avio Magazin - Aviator
#Selmanovic Abdullah, 17055
Avio Magazin 
Avio Magazin je osmisljen kao web page za avio fanaticare na kojem ce se objavljivati slike najnovijih modela aviona, razlicitih novosti vezani za avio svijet kao i obavijesti za potencijalne avio meetinge.


#Spirala IV 

a)Urajeno. imam tri tabele u bazi koje sam povezao sa id-jevima razlicitim. Nema bas neke prevelike logike cisto su podaci u tabelama koji se mogu na neki nacin povezati tj tabla sa primary key id je povezana sa foreign key od datumi id osoba koje su pristupile i poveazan sa id trazena tabla (cudno ime).

b) Uradjeno . U dropdown se moze vidjeti (naravno ekzluzivno za admina inace se ne vidi)  na dnu njega prebaci koji sluzi za prebacivanje fajlova s xml na bazu modeli (ova sluzi samo za prebacivanje sa xml) dok tabla modelibaza sluzi za citanje pisanje modela ...

c) uradjeno. mozemo vidjeti u podpage modeli vidimo modele sve . ako smo admin mozemo dodavat oduzimat itd. a ako smo obicni korisnik samo gledat.sve se vrti oko table modelibaza (note: ostavio sam i xml da upisuje tako da je kontent xml fajla isti kao i kontent baze) .

d)Hosting sam uradio prateci pomoc na c2 i pomoglo mi je. Uplodo sam bazu online i problem je nastao jer je moj citav kod uradjen preko mysqli sto ne podrzava mysql-55-centos7
LINK: http://xdule-projekat.44fs.preview.openshiftapps.com/


e) Napravio sam REST web servis. to mozete testirati u pod stranici aeredromi u kojim ako ukucate neki acc( predvidjeno kao mjera povracanja passworda ako se zaboravi ) povratice vam password u obliku json.

F) probao sam sa POSTMANOM i prilozio sam skrinshotove u folder POSTMAN. 

PRISTUP BAZI : 
acc: root
password: password
naziv db: myDB1


