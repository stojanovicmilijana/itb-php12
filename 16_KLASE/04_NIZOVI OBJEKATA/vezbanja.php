<?php

//4 opcije kako da ukljucimo klasu Film

/* include "Film.php" // ako ne postoji fajl, samo ignorisi
   include_once "Film.php" // ako ne postoji ignorisace, ali ako je vec ukljucen ranije onda ne ukljucuje ponovo
   require "Film.php" // ako ne postoji fajl, prijavljuje gresku
   require_once "Film.php" // isto kao i require, ali ako je ovaj fajl vec ukljucen prijavljuje gresku
*/
//kada pisemo definiciju klase na nekom drugom mestu a hocu u drugom fajlu da je ubacim, zahvevate najvise jedanput da je ubacite
require_once "Film.php";
require_once "NemiFilm.php";


$f1 = new Film ("Lord of the Rings", 2001, "Peter Jackson");
$f1->stampaj();

$f2 = new Film ("Kill Bill", 2003, "Quentin Tarantino");
$f2 ->stampaj();

$f3 = new Film ("Titanik", 1999, "James Cameron");
$f3->stampaj();
//////////////niz ovakvih filmova moze se zapisati i kao asoc.niz, ali sa nizom objekata dolazimo do razvrstavanja klasa (zapravo povezujemo iste podatke, ne moze se menjati tipa nazivi kljuceva kao kod asoc.niz)
$n1 = ["naslov"=>"Lord of the Rings", "godina"=>2001, "reziser"=>"Peter Jackson"];
$n2 = ["naslov"=>"Lord of the Rings", "godina"=>2001, "reziser"=>"Peter Jackson"];
$n3 = ["naslov"=>"Lord of the Rings", "godina"=>2001, "reziser"=>"Peter Jackson"];
$filmoviTemp = [$n1, $n2, $n3]; // ovde smo uveli medjupromenljivu n cisto kao primer


//prolazak kroz nizove objekata i stampa istih, kao i pristup pojedinacnom polju godina:

$filmovi = [$f1, $f2, $f3];

foreach ($filmovi as $film){
   echo $film->getGodinaIzdanja();
   echo $film->stampaj();
}


?>