<?php

// . Sa niškog aerodroma u toku jednog dana polaze letovi ka različitim gradovima. Dat je asocijativni niz u kojem su ključevi destinacije letova, a vrednosti broj putnika na svakom letu.
// Kreirati niz $letovi po uslovima zadatka.
// Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.


$letovi = [
'Rim' => 350,
'Barselona' => 280,
'Budimpesta' => 120,
'Moskva' => 330,
'Pariz' => 350,
'Berlin' => 88,

];


// Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.

function maxBrojPutnika($letovi){
  $max=0;
  foreach ($letovi as $brojPutnika) {
    if($max<$brojPutnika){
      $max=$brojPutnika;
    }
  }
  return $max;
}
echo "Maksimalan broj putnika je: ".maxBrojPutnika($letovi);

echo "<hr>";

// 3. Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.

function brojMax($letovi){
    $maxPutnika = maxBrojPutnika($letovi);
    $brojDestinacija = 0;
    foreach ($letovi as $brojPutnika){
      if($brojPutnika == $maxPutnika){
        $brojDestinacija++;
      }
    }
   return $brojDestinacija;
}
echo "Broj destinacija sa maksimalnim brojem putnika je: ".brojMax($letovi);
echo "<hr>";

// 4. Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.

function prosek($letovi){
  $sum=0;
  foreach ($letovi as  $brojPutnika) {
    $sum += $brojPutnika; //$sum = $sum + $brojPutnika;
  } 
   return round ($sum / count($letovi));
}
echo "Prosecan broj putnika na letovima je:" .prosek($letovi);

echo "<hr>";
// 5. Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).


function isplativ($letovi, $granica){
    $iznad = 0;
    $ispod = 0;
    foreach($letovi as $brojPutnika){
      if($brojPutnika>=$granica){
        $iznad++;
      }else{
        $ispod++;
      }
    }
    if($iznad>=$ispod){
      return true;
    }else{
      return false;
    }
}
// echo "Dan je bio isplativ za granicu 100: ".(isplativ($letovi,100)?"JESTE":"NIJE";
echo "Dan je bio isplativ za granicu 100: ";
$isplativ=isplativ($letovi,100);
if($isplativ){
  echo "JESTE";
}else{
  echo "NIJE";
}

echo "<hr>";
// 6
// Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).


 function alarmantan($letovi, $granica){
  foreach ($letovi as $brojPutnika) {
  if($brojPutnika<$granica){
       return true;
     }
   }
    return false;
}

 echo "Dan je bio alarmantan za granicu 100: ".(alarmantan($letovi,100)?"JESTE":"NIJE");

 echo "<hr>";
 //7
//  Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.
 
function dobreDestinacije($letovi){
  $prosek = prosek($letovi);
  foreach ($letovi as $destinacija => $brojPutnika) {
    if($brojPutnika>=$prosek){
      echo "<p>$destinacija</p>";
    }
  }
}
echo "Dobre destinacije su: ";
dobreDestinacije($letovi);
echo "<hr>";


//Dat je niz u kojem su smešteni odgovarajući letovi koji polaze sa nekog aerodroma u toku jednog dana. Svaki element tog niza odgovara jednom letu, pri čemu se za svaki let pamti destinacija (grad u koji avion sleće), država u kojoj se taj grad nalazi, kao i vreme poletanja aviona sa aerodroma (string u formatu “hh:mm”). U ovom zadatku, može se desiti da imamo više letova ka istoj destinaciji.


$dan = array(
  "datum" => "2023/05/16",
  "kisa"  => true,
  "sunce" => true,
  "oblacno" => false,
  "temperature" => array(5,8,13,17,12,9,6)
);
//Napisati f-ju koja odredjuje i vraća prosečnu temp tog dana
function prosecnaTemp($dan)
{
   $temperature = $dan ["temperature"];
   $suma = 0;
   foreach ($temperature as $temp)
   {
     $suma += $temp;
   }
   $prosek = $suma / count($temperature);
   return $prosek;
}
echo "Prosecna temperatura za dan " .$dan["datum"] . "je: " . prosecnaTemp($dan);
echo "<hr>";
//Napisati f-ju koja prebrojava i vraca koliko merenja je bilo sa natprosecnom temperaturom

function brojNatprosecnoMerenja($dan)
{
  $prosecnaTemperatura = prosecnaTemp($dan);
  $broj = 0;
  $temperature = $dan["temperature"];
  foreach ($temperature as $temp)
  {
    if($temp > $prosecnaTemperatura)
    {
      $broj++;
    }
  }
  return $broj;
}
echo "Broj merenja sa natprosecnom temperaturom za dan " .$dan["datum"] . " jednak je: " . brojNatprosecnoMerenja($dan);

echo "<hr>";

//17 Napisati f-ju koja prebrojava i vraća sa max temp
//18 Napisati f-ju koja prima dva parametra koji predstavljaju dve temprerature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost izmedju ove dve zadate temperature (ne ukljucujuci te dve vrednosti)

function brojMerenjaIzmedju ($dan, $min, $max){

$temperature = $dan["temperature"]; 
$broj = 0;
foreach ($temperature as $temp)
{
  if($temp > $temp && $temp < $max){
    $broj++;
  }
}
return $broj;
}
$v1= 7;
$v2 = 15;


echo "Broj merenja na dan " . $dan["datum"] . " izmedju vrednosti $v1 i $v2 jednak je: " .brojMerenjaIzmedju($dan, $min, $max);

echo "<hr>";




?>