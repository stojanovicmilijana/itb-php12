<?php

// kljuc je string, vrednost je broj u ovom slučaju , ne može biti isti elemenat recimo 2 x violeta, ali može ista vrednost a različit naziv elementa
$godine = array(
  "Pera" => 28,
   "Lazar" => 26,
   "Violeta" => 35
);

$godine = array ();
$godine["Pera"] = 28;
$godine["Lazar"] = 26;
$godine["Violeta"] = 35;
$godine["Marko"] = 35;


//echo $godine ["Pera"];
$godine ["x"] = 48;
// echo $godine ["Pera"];

// var_dump($godine);

// foreach ($godine as $i => $g)
foreach ($godine as $key => $value)
{
  echo "<p>Osoba $key ima $value godina.</p>";
  // echo "<p>Osoba $i ima $g godina.</p>";
}

foreach ($godine as $g)
{
  echo "<p>Osoba ima $g godina.</p>";
}

//foreach petlja moze da se koristi i za indeksne nizove

$brojevi = array(5,-6,3.3, 17.8,0);
$brojevi[100]=50;
$brojevi[2] = 4;

foreach ($brojevi as $broj)
{
    echo "$broj &nbsp";
}

foreach ($brojevi as $indeks => $broj)
{
  echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
}



// Zadatak 1
// Dat je niz elemenata u obliku MarkaAuta/Godište.
// Ispisati sve automobile, kao i njihova godišta.
// Ispisati automobile koji su stariji od 10 godina.
// Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.

$automobili = array(
    "Audi A3" => 2004,
    "Opel Corsa" => 2018,
    "Opel Astra" => 2016,
    "Peugeout 208" => 2004,
    "Ford Focus" => 2015
);
    // Ispisati sve automobile, kao i njihova godišta.
    foreach($automobili as $marka => $godiste)
    {
      echo "<p>Automobili $marka proizveden $godiste. godine</p>";
    }

    // Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date ("Y");
    foreach($automobili as $marka => $godiste)
    {
      if($trenutnaGodina - $godiste > 10){
        echo "<p>Automobili $marka je stariji od 10 godina.</p>";
      }

    }
    //Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.

    foreach($automobili as $marka => $godiste)
    {
      if(strpos($marka, "Opel")!==false && $godiste >= 2000)
      {
          echo "<p>Automobil $marka je proizveden posle 2000.";
      }
    }

//Zadatak 2
// Dat je niz elemenata u obliku ImeOsobe/Visina.
// Ispisati sve osobe sa njihovim visinama.
// Ispisati sve natprosečno visoke osobe.
// Ispisati sve osobe koje imaju maksimalnu visinu.
// Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.

$osobe = array(
  "Marko" => 180,
  "Marija" => 165,
  "Milica" => 175,
  "Milos" => 178,
  "Kosta" => 154,
  "Milena" => 154,
   "Pera" => 189,
   "Dalibor" => 189,

);
// Ispisati sve osobe sa njihovim visinama.
foreach($osobe as $ime => $visina){
   echo "<p>Osoba $ime ima visinu $visina";
}

// Ispisati sve natprosečno visoke osobe.
$zbir = 0;
foreach ($osobe as $visina){

    $zbir += $visina;
}
$prosek = $zbir / count($osobe);
echo "<p>Prosečna visina svih osoba u nizu je: $prosek</p>";

foreach ($osobe as $ime => $visina){
    if($visina > $prosek){
      echo "Osoba $ime je natprosecno visoka</p>";
    }

}

// Ispisati sve osobe koje imaju maksimalnu visinu.
//$maks = PHP_INT_MIN;
$maks = PHP_INT_MIN;
// $maks = 0;
foreach ($osobe as $visina){
if($visina > $maks){
    $maks = $visina;
}
}
foreach ($osobe as $ime => $visina)
{
    if($visina == $maks){
      echo "<p>Osoba $ime ima maksimalnu visinu.</p>";
    }

}

// Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.

foreach ($osobe as $ime => $visina)
{
    if($visina < $prosek && $ime[0] == "V"){
      echo "<p>Osoba $ime je visoka ispod proseka</p>";
    }

}








?>