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


$f1 = new Film ("Lord of the Rings", 2001, "Peter Jackson", [7, 5.8, 8.7, 10]);
$f1->stampaj();

$f2 = new Film ("Kill Bill", 2003, "Quentin Tarantino", [10,9.5, 9.8, 7.5]);
$f2 ->stampaj();

$f3 = new Film ("Titanik", 1999, "James Cameron", [7.6, 5.5]);
$f3->stampaj();
//////////////niz ovakvih filmova moze se zapisati i kao asoc.niz, ali sa nizom objekata dolazimo do razvrstavanja klasa (zapravo povezujemo iste podatke, ne moze se menjati tipa nazivi kljuceva kao kod asoc.niz)
/* $n1 = ["naslov"=>"Lord of the Rings", "godina"=>2001, "reziser"=>"Peter Jackson"];
$n2 = ["naslov"=>"Lord of the Rings", "godina"=>2001, "reziser"=>"Peter Jackson"];
$n3 = ["naslov"=>"Lord of the Rings", "godina"=>2001, "reziser"=>"Peter Jackson"];
$filmoviTemp = [$n1, $n2, $n3]; // ovde smo uveli medjupromenljivu n cisto kao primer */


//prolazak kroz nizove objekata i stampa istih, kao i pristup pojedinacnom polju godina:

$filmovi = [$f1, $f2, $f3];

foreach ($filmovi as $film){
   echo $film->getGodinaIzdanja();
   echo $film->stampaj();
}


//Napisati f-ju prosecnaOcena kojoj se prosledjuje niz filmova, a koja odredjuje i vraca prosecnu ocenu svih filmova
function prosecnaOcena($films)
{
   $zbir = 0;
   foreach($films as $f)
   {
      $zbir += $f->prosek();
   }  
   $n = count($films);
   if($n > 0 ){
      return $zbir / $n;
   }
   else {
      return 0;
   }
}


$prosecna = prosecnaOcena($filmovi);
echo "Prosecna ocena od svih filmova je $prosecna";
echo "<br>";
///////////////////////////////////////////////////////////////////////////////////////
//Napraviti f-ju vekFilmova kojoj se prosledjuje niz filmova i ceo broj, funkcija ispisuje samo one filmove koji su stvoreni u prosledjenom veku

function vekFilmova($films, $vek){

    foreach ($films as $film){
      
      $godinaIzdanja = $film->getGodinaIzdanja();
      $vekIzdanja = ceil($godinaIzdanja/100);
      if($vekIzdanja == $vek){

         $film->stampaj();
      }


    }
   }
    echo "<p>Filmovi koji su izasli u 21.veku </p>";
    vekFilmova($filmovi,21);

    echo "<hr>";
    echo "<p>Filmovi koji su izasli u 20.veku </p>";
    vekFilmova($filmovi,20);

     
    echo "<hr>";
///////////////////////////////////////////////////////////////////////////////////////////////////////
    //Napisati f-ju osrednji film kojoj se prosledjuje niz filmova a ona vraca film koji je najblizi prosecnoj oceni svih filmova

    function osrednjiFilm($niz){
    
       $prosek = prosecnaOcena($niz);
       $najblizaVrednost = abs( $niz[0]-> prosek() - $prosek);
       $najbliziFilm= $niz[0];

       foreach ($niz as $film){

         $vrednost = abs( $film-> prosek() - $prosek);
         if($vrednost < $najblizaVrednost){
            $najblizaVrednost = $vrednost;
            $najbliziFilm = $film;
         }

       }

       return $najbliziFilm;

    }

    $osf = osrednjiFilm($filmovi);

    echo "<p>Film najblizi prosecnoj vrednosti je: </p>";
    $osf->stampaj();
    echo "<hr>"; 


//Napraviti f-ju najboljeOcenjeni kojoj se prosledjuje niz filmova a ona vraca najbolje ocenjeni film

      function najboljeOcenjeni ($niz){

         $maxOcena = $niz[0]->prosek();
         $maxFilm = $niz[0];

         foreach ($niz as $film){
           $ocena = $film->prosek();
           if($ocena > $maxOcena){
               $maxOcena = $ocena;
               $maxFilm = $film;
           }
            

      }
      return $maxFilm;
   }
echo 'Najbolje ocenjeni film je : ';
$nof= najboljeOcenjeni($filmovi);
$nof->stampaj();
echo '<hr>';
/////////////////////////////////////////////////////////////////////////////////////////
//Napisati f-ju najmanjaOcenaNajboljeg kojoj se prosledjuje niz filmova a ona odredjuje najbolji film i ispisuje njegovu najslabiju ocenu

function najmanjaOcenaNajboljeg($niz){
  
   $najboljiFilm=najboljeOcenjeni($niz);
   $sveOcene = $najboljiFilm->getOcene();
   $minOcena= $sveOcene[0];

   foreach($sveOcene as $ocena){
    if($ocena < $minOcena){
      $minOcena = $ocena;
    }
   }
 return $minOcena;

}
 $minOcena = najmanjaOcenaNajboljeg($filmovi);
 echo "<p>Najmanja ocena najbolje ocenjenog filma je: $minOcena </p>";
 echo "<hr>";

////////////////////////////////////////////////////////////////////
//Napisati f-ju najmanjaOcena kojoj se prosledjuje niz filmova, a koja vraca koja je najmanja ocena koju je bilo koji film dobio


function najmanjaOcena($niz){
  
     $ocenePrvogFilma = $niz[0]->getOcene();
     $minOcena = $ocenePrvogFilma[0];
     foreach ($niz as $film){
         $ocene= $film->getOcene();
         foreach ($ocene as $o){
            if($o < $minOcena){
               $minOcena = $o;
            }
         }

     }

return $minOcena;

}

$mo = najmanjaOcena($filmovi);

echo "<p>Najmanja ocena koju je neki film dobio je: $mo</p>";
echo "<hr>";


?>