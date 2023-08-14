<?php
$brojStrana=[500,200,330,400,120];
$cena=[5000,3500,1200,900,600];

//prolazaj radimo sa for

// for($i=0;$i<count($brojStrana);$i++)
// foreach($brojStrana as $brS)
// $i=0; while($i<count($brojStrana{...$i++;}))

// uzimanje vrednosti elenata
// $brS=$brojStrana[0]; //ovo vraca 500
// $brS2=$brojStrana[2];
//cena cija je stranica najskuplja
function maxprosek($brojStrana,$cena){
   //indeksirani niz mogu odma da postavim :
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

$brojStranaA=['knjiga1'=>500,'knjiga2'=>200,'knjiga3'=>330,'knjiga4'=>400,'knjiga5'=>120];
$cenaA=['knjiga1'=>5000,'knjiga2'=>3500,'knjiga3'=>1200,'knjiga4'=>900,'knjiga5'=>600];

function maxProsekA(){
  $max=0;
  foreach ($brojStranaA as $k =>$v){
    $t = $cenaA[$k]/$v;
    if($max<$t){
      $max=$t;
    }
  }
  return $max;
}

$nizKnjiga = [
  ['brojStrana' => 500, 'cena'=>5000],
  ['brojStrana' => 200, 'cena'=>3500],
  ['brojStrana' => 330, 'cena'=>1200],
  ['brojStrana' => 400, 'cena'=>900],
  ['brojStrana' => 120, 'cena'=>600],
];

function maxProsekNizA(){
  $max=0;
  for($i=0; $i<count($nizKnjiga);$i++){
    $t = $nizknjiga[$i]['cena']/$nizKnjiga[$i]['brojStrana'];
    if($max<$t){
      $max=$t;
    }
  }
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
class Knjiga{
    private $naslov;
    private $autor;
    private $god_izdanja;
    private $broj_strana;
    private $cena;

}


?>