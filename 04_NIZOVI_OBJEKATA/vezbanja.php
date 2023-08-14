<?php

// include "Film.php"; //ako ne postoji fajl, samo ignorisi
// include_once "Film.php"; // isto, ali ako je ovaj fajl vec ukljucen, onda ga ne ukljucuj ponovo
// require "Film.php"; // ako ne postoji fal , prijavljuje gresku
// require_once "Film.php" ; //isto kao require, ali ako je ovaj fajl vec ukljucen, onda ga ne ukljucuj ponovo




require_once "Film.php";
require_once "NemiFilm.php";


$f1 = new Film("Lord of the Rings", 2001, "Peter Jackon", [7,5,8,8,7,10]);


$f1 ->stampaj();

$f2 = new Film ("Kill Bill",2003, "Quentin Tarantino", [10,9,5,9.8,]);
$f2 -> stampaj();

$f3 = new Film("Titanic", 1999, "James Cameron", [7.6,5.5]);

// $n1 = ["naslov" => "LOTR", "godinaIzdanja" => 2001, "reziser"=> "PJ"];
// $n2 = ["naslov" => "Kill Bill", "godinaIzdanja" => 2003, "reziser"=> "QT"];
// $n3 = ["naslov" => "LOTR", "godinaIzdanja" => 2001, "director"=> "JC"];

// $filoviTemp = [$n1, $n2, $n3];

$filmovi = [$f1, $f2, $f3];

foreach($filmovi as $film){
  //  echo $film -> getGodinaIzdanja();
  $film -> stampaj();
}


function prosecnaOcena ($films){
  $zbir = 0;
  foreach($films as $f){
    $zbir += $f->prosek();
  }
$n=count($films);
if($n>0)
{
  return $zbir / $n;
}
else
{
  return 0;
}

}

$prosecna = prosecnaOcena($filmovi);
echo "<p> Prosecna ocena svih filmova jednaka je : $prosecna</p>";
////////////////////////////////////////////////////////////////////////////

function vekFilmova ($films, $vek){
    foreach($films as $film){
   
     $godinaIzdanja = $film->getGodinaIzdanja();
     $vekIzdanja = ceil($godinaIzdanja/100);
    //  var_dump ($godinaIzdanja);
      if($vekIzdanja == $vek){
        $film -> stampaj();
     }
    }
} 
echo "<p>Filmovi koji su izasli u 21.veku:</p>";
vekFilmova($filmovi, 21);

// echo "<p>Filmovi koji su izasli u 21.veku:</p>";
// vekFilmova($filmovi, 20);


/////////////////////////////////////////////////////////////////

function osrednjifilm($niz){

  $prosek = prosecnaOcena($niz);
  $najblizaVrednost = abs ($niz[0]->prosek()-$prosek);
  $najbliziFilm = $niz[0];
  foreach ($niz as $film)
  {
    $vrednost = abs($film->prosek()-$prosek);
    if($vrednost < $najblizaVrednost)
    {
      $najblizaVrednost = $vrednost;
      $najbliziFilm = $film;
    }
  }
  return $najbliziFilm;
}
$osf = osrednjifilm($filmovi);
echo "<p>Film najblizi prosecnoj vrednosti je: </p>";
$osf->stampaj();
echo "<hr>";


// Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film.

function najboljeOcenjeni($niz) {
  $prosek= prosecnaOcena($niz);
  //$maks=0;
  $MaxFilm=$niz[0];
  $NajboljiOcenjen= $niz[0]->prosek();
      foreach ($niz as $film) {
          $vrednost=$film->prosek();
          if ($vrednost >$NajboljiOcenjen) {
              $NajboljiOcenjen = $vrednost;
              $MaxFilm=$film;
          }
      }
      return $MaxFilm;
  }
  echo "<hr>";
  echo "Najbolje ocenjen je: ";
  $naj= najboljeOcenjeni($filmovi);
  echo $naj->stampaj();

  // Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu.

function najmanjaOcenaNajboljeg($niz){

$najboljiFilm = najboljeOcenjeni($niz);
$sveOcene = $najboljiFilm->getOcene();
$minOcena=$sveOcene[0];
foreach($sveOcene as $ocena){
  if($ocena<$minOcena){
    $minOcena = $ocena;
  }
  return $minOcena;
}

}
$minOcena = najmanjaOcenaNajboljeg($filmovi);
echo "<p>Najmanja ocena najbolje ocenjenog filma je: $minOcena</p>";
echo "<hr>";

// Napisati funkciju najmanjaOcena kojoj se prosleđuje niz filmova, a koja vraća koja je najmanja ocena koju je bilo koji film dobio.

function najmanjaOcena($niz){
$ocenePrvogFilma = $niz[0]->getOcene();
$minOcena = $ocenePrvogFilma[0];
foreach($niz as $film)
{
  $ocene = $film->getOcene();
  foreach($ocene as $o){
    if($o <$minOcena)
    {
      $minOcena = $o;
    }
  }
  return $minOcena;
}
}
$mo = najmanjaOcena($filmovi);
echo "<p>Najmanja ocena koju je neki film dobio je: $mo</p>";
echo "<hr>";






?>