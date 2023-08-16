<?php
$brojStrana=[500,200,330,400,120];
$cena=[5000,3500,1200,900,600];

//prolazak 

// for($i=0;$i<count($brojStrana);$i++)
// foreach($brojStrana as $brS)
// $i=0; while($i<count($brojStrana{...$i++;}))

// uzimanje vrednosti elenata
// $brS=$brojStrana[0]; //ovo vraca 500
// $brS2=$brojStrana[2];
//cena cija je stranica najskuplja
function maxprosek($brojStrana,$cena){
   //indeksirani niz mogu odma da postavim : (mogu da stavim max=0, 
   //posto mi je priroda zadatka uvek pozitvan broj i isti br elemenata stavicu odma ovako)
        $max=$cena[0]/$brojStrana[0];
     //mogu da krenem i od prvog indeksa $i=1, ali nije greska ni $i=0
     for($i=0;$i<count($brojStrana);$i++){
      $t=$cena[$i]/$brojStrana[$i];
       if($max<$t){
         $max=$t;
       }
     }
   return $max;

} echo maxprosek($brojStrana,$cena);
echo '<br>';
////////////////////////////////////////////////////
//Prolazak asoc niz
//foreach (brojStrana as $k=>$v)? da li treba svaki elem da raylayem na kljc vrenost yavisi od prirode zad
$brojStranaA=['knjiga1'=>500,'knjiga2'=>200,'knjiga3'=>330,'knjiga4'=>400,'knjiga5'=>120];
$cenaA=['knjiga1'=>5000,'knjiga2'=>3500,'knjiga3'=>1200,'knjiga4'=>900,'knjiga5'=>600];

function maxProsekA($brojStranaA,$cenaA){
  $max=0;
  foreach ($brojStranaA as $k =>$v){ //500 pomocu kljuca dohvatan cenu
    $t = $cenaA[$k]/$v; // 5000
    if($max<$t){
      $max=$t;
    }
  }
  return $max;
} echo maxProsekA($brojStranaA ,$cenaA);
echo '<br>';
////////////////////////////////////////////////////////////

$nizKnjiga = [
  ['brojStrana' => 500, 'cena'=>5000],
  ['brojStrana' => 200, 'cena'=>3500],
  ['brojStrana' => 330, 'cena'=>1200],
  ['brojStrana' => 400, 'cena'=>900],
  ['brojStrana' => 120, 'cena'=>600],
];

function maxProsekNizA($nizKnjiga){
  $max=0;
  for($i=0; $i<count($nizKnjiga);$i++){
    $t = $nizKnjiga[$i]['cena']/$nizKnjiga[$i]['brojStrana'];
    if($max<$t){
      $max=$t;
    }
  }
  return $max;
} echo maxProsekNizA($nizKnjiga);
echo '<br>';

///////////// 
$dan = ['temperatura' => [8,5,-15,2,0]];
for($i=0; $i<count($dan['temperatura']); $i++){
    $t= $dan['temperatura'][$i];
}


// Napraviti klasu Knjiga koja od privatnih polja sadrži:
// naslov
// autor
// godIzdanja
// brojStrana
// cena
// Klasa Knjiga od javnih metoda sadrži:
// Konstruktor koji postavlja sva polja
// Metodu koja štampa sve podatke o knjizi
// Metodu obimna koja ispituje da li je knjiga obimna (ukoliko je broj strana veći od 600)
// Metodu skupa koja ispituje da li je knjiga skupa
// (ukoliko je cena veća od 8000)
// Metodu dugackoime koja ispituje da li je ime autora dugačko (ukoliko je broj karaktera u imenu veći od 18)
/* class Knjiga{
    private $naslov;
    private $autor;
    private $god_izdanja;
    private $broj_strana;
    private $cena;

}
 */

class Knjiga {
  public $brojStrana;
  public $cena;

}

$k1 = new Knjiga();
$k1 -> broj_Strana = 500;
$k1 -> $cena = 5000;

$k2 = new Knjiga();
$k2 -> broj_Strana = 200;
$k2 -> $cena = 3500;

$k3 = new Knjiga();
$k3 -> broj_Strana = 330;
$k3 -> $cena = 1200;

$k4 = new Knjiga();
$k4 -> broj_Strana = 400;
$k4 -> $cena = 900;

$k5 = new Knjiga();
$k5 -> broj_Strana = 120;
$k5 -> $cena = 600;


$knjige = array($k1, $k2, $k3, $k4, $k5); //indeksirani niz objekata , moze se proci i foreach i for petljom,lakse je foreach petljom

function maxProsekNiz($knjige){
  $max=0;
  ////////// prolazak kroz niz objekata foreach petljom
  foreach ($knjige as $knjiga) {
   $t = $knjiga ->cena / $knjiga ->broj_Strana;
   if($max<$t){
    $max=$t;
   }
  }
  return $max;
} echo maxProsekNiz($knjige);
echo '<br>';
/////////////////////////////////
function maxProsekN($knjige){
  $max=0;
  ////////// prolazak kroz niz objekata FOR petljom
  for ($i=0; $i<count($knjige); $i++) {
    $knjiga = $knjige [$i];
   $t = $knjiga['$i'] / $knjiga ->broj_Strana;
   if($max<$t){
    $max=$t;
   }
  }
  return $max;
} 
echo maxProsekN($knjige);
echo '<br>';

$k6 = new Knjiga();
$k6 -> $brojStrana = 10;
$k6 -> $cena = 100;
$knjige[] = $k6; /// dodavanje jos jednog elementa u niz objekata







?>