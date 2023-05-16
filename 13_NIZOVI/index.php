<?php

// Bez nizova
$car1 ="BMW";
$car2 ="Volvo";
$car3="Toyota";

// Sa nizovima
$cars = array("BMW", "Volvo", "Toyota"); //$cars["BMW", "Volvo", "Toyota"];
//Elemetni ovog niza su: "BMW", "Volvo", "Toyota"
//Indeksi elemenata ovog niza su: 0, 1, 2
//Broj elemenata je 3

 //ako hoću da ispišem čitav niz od cars:
var_dump($cars);
echo "<hr>";
//string  od 3 karaktera (var dump kaze nam kog je tipa promenljiva)
//Najmanje detaljno ispisuje
var_dump($car1);

echo "<hr>";

echo "$car1";
//echo "$cars"; // ne može da ispiše složen tip podataka ,

echo "<hr>";
// Pristupanje elementima
$prviElement = $cars [0];
$drugiElement = $cars [1];
$treciElement = $cars [2];

echo "$prviElement, $drugiElement, $treciElement";
echo "<p>Prvi element niza je : $cars[0]</p>";
echo "<p>Osmi element u nizu je: $cars[7]"; //Undifined arrey key

//Izmena elemenata se vrši ukoliko pod tim indeksom u nizu već postoji neki element
$cars [1] = "Peugeot";
print_r ($cars);

//Dodavanje elemenata će se vršiti ukoliko pod navedenim indeksom ne postoji već element 
$cars[30]="Audi";
print_r ($cars);


//////////////////////////////////////////////////////
$polaznici = array (); //$polaznici = [];
$polaznici[] = "Aleksandar";
$polaznici [] = "Uroš";
$polaznici [] = "Milijana";
$polaznici [] = "Andreja";
$polaznici [] = "Nikola";

echo "<hr>";

var_dump($polaznici);

$duzina = count($polaznici); // Prebrojava koliko ima polaznika, tj elemenata u nizu
echo "<p>U nizu ima $duzina polaznika.</p>";

/*
$polaznici [0]
$polaznici [1]
$polaznici [2]
$polaznici [3]
*/
for ($i=0; $i<$duzina; $i++){
  echo "<p>$polaznici[$i]</p>";
}



/////////////////////
//Zadatak 2  Odrediti zbir elemenata celobrojnog niza

$brojevi = [5, 14, -4, 0, 11, -7, 9];    //suma van petlje da se ne resetuje, echo van petlje da se ne ispisuje svaki put
$suma=0;

for ($i=0; $i < count($brojevi); $i++){
    $suma += $brojevi[$i];
} echo "<p>Suma elemenata je: $suma";

//Ugrađena fukcija
$zbir = array_sum($brojevi);
echo "<p>Zbir elemenata niza je: $zbir</p>";

////////////////////////////
/// Zadatak 3 Odrediti srednju vrednost elemenata celobrojnog niza (aritmeticka sredina saberemo sve i podelimo sa brojem brojeva, može biti i decimalan br, nula ne može da bude u imeniocu tj ne može da bude iza znaka podeljeno) 

$brElemenata = count($brojevi);
$arsr = $zbir / $brElemenata; //$arsr = array_sum ($brojevi) / count($brojevi);
echo "<p>Aritmeticka sredina je: $arsr</p>";

//Dopuna 1.način
if($brElemenata == 0){
  echo "<p>Prazan niz - aritmetička sredina je 0</p>";
} else
{
  $arsr = $zbir / $brElemenata;
  echo "<p>Aritmetička sredina je: $arsr</p>";
}

 //2.nacin 

 if(empty($brojevi)){
  echo "<p>Prazan niz - aritmetička sredina je 0</p>";
} else
{
  $arsr = $zbir / $brElemenata;
  echo "<p>Aritmetička sredina je: $arsr</p>";
}

//3.nacin 
if(!$brojevi){
  echo "<p>Prazan niz - aritmetička sredina je 0</p>";
} else
{
  $arsr = $zbir / $brElemenata;
  echo "<p>Aritmetička sredina je: $arsr</p>";
}

// Zadatak 4 // Odrediti maksimalnu vrednost u celobrojnom nizu
            // koji je najveći broj u celobrojnom nizu

$brojevi = [5, 14, -4, 0, 11, -7, 9];
$maks = $brojevi [0];

for($i=0; $i<count($brojevi); $i++){
  $trenutniElement = $brojevi[$i]; // dokle smo stigli sa pregledavanjem niza
  if($trenutniElement > $maks){
    $maks = $trenutniElement;
  }
} echo "<p>Najveći element ovog niza je $maks</p>";
  echo "$trenutniElement";
 
  // Zadatak 5


  //Zadatak 6
 // Odrediti indeks najvećeg elementa celobrojnog niza.
 $brojevi = [5, 14, -4, 14, 11, -7, 14]; 
 
 // 6.1. indeks prvog pojavljivanja max elementa
 $maks = $brojevi[0];
 $indeksMaks = 0;

 for($i=0; $i<count($brojevi); $i++){
  $trenutniElement=$brojevi [$i];
  if ($trenutniElement > $maks){     //>= $maks , index njegovog poslednjeg pojavljivanja
    $maks = $trenutniElement;
    $indeksMaks = $i;
  }
 } echo "<p>Najveći element ima vrednost $maks, a indeks njegovog prvog pojavljivanja je $indeksMaks</p>";

 ////////////////////////////////////////// 
 // zadatak 7
 
//  Odrediti broj elemenata celobrojnog niza 
// koji su veći od srednje vrednosti.


//netacan pristup
// $brojevi = [1, 2, 15]; 
// $zbir = 0;
// $broj = 0;

// for($i = 0; $i < count($brojevi); $i++);
// {
//     $zbir += $brojevi[$i];
//     $arsr = $zbir / count($brojevi);
//     if($brojevi[$i] > $arsr)
//     {
//         $broj++;
//     }
// }
// echo "<p>Broj brojeva vecih od srednje vrednosti niza je : $broj</p>"

//  $brojevi = [1, 2, 15]; 
//  $zbir = 0;
//  $broj = 0;

//  for($i = 0; $i < count($brojevi); $i++);
//  {
//      $zbir += $brojevi[$i];
//  }

//    $arsr = $zbir / count($brojevi);

//    for($i=0; $i < count($brojevi); $i++)
//    {
//     if($brojevi[$i] > $arsr)
//      {
//        $broj++;
//      }
//     }
  
    //Zadatak 8
// izračunati zbir pozitivnih elemenata 
// celobrojnog niza. *

$niz = [ 2 , -3, 5, 0, 6];
$zbirPoz = 0;

for ($i=0; $i < count($niz); $i++)
{
    if($brojevi[$i] > 0)
    {
      $zbirPoz += $niz[$i];
    }
} echo "<p>Zbir pozitivnih elemenata niza je : $zbirPoz";
///////////////////////////////////////////////////////////////////////////////////////
//Bonus zadatak Izracunati srednju vrednost parnih elemenata celobrojnog niza
$niz = [ 2 , -3, 5, 0, 6];
$zbir = 0;
$brParnih = 0;

for ($i = 0; $i < count($niz); $i++)

{
     if($niz[$i] % 2 == 0)
     {
        $zbir += $niz[$i];
        $brParnih++;
     }
}
if($brParnih !=0){
$srvr = $zbir / $brParnih;}
else{
   $srvr = 0;
}

echo "<p>Srednja vrednost parnih elemenata u nizu jednaka je: $srvr</p>";


//Zadatak 9
// Odrediti broj parnih elemenata u 
// celobrojnom nizu.
$brParnih = 0;
$niz = [ 2 , -3, 5, 0, 6];
for ($i=0; $i < count($niz); $i++){
  if($niz[$i]%2 == 0){
    $brParnih ++;
  }

} echo "<p>Broj parnih je: $brParnih";

//Zadatak 10
// Izračunati sumu elemenata u nizu sa 
// parnim indeksom.
$niz = [2 , -3, 5, 0, 6];
$sumaEl=0;
for ($i=0; $i < count($niz); $i++){
     if($i%2==0){
       $sumaEl += $niz[$i];
     }
} echo "<p>Suma elememata sa parnim indeksom je: $sumaEl";


//Zadatak 11
// Promeniti znak svakom elementu 
//celobrojnog niza.

for($i=0 ; $i<count($niz); $i++)
{
  $niz[$i] *= -1;
  //$niz[$i] = $niz[$i] * (-1);
  //$niz[$i] = -$niz[$i];
}
var_dump($niz);

echo "<hr>";
////////////////////////////////////////////////////////////////////
//Zadatak 12
// Promeniti znak svakom neparnom 
// elementu celobrojnog niza sa parnim 
// indeksom
$niz = [2 , -3, 5, 7,  0, 6];

for($i=0 ; $i<count($niz); $i++){
  if(!($niz[$i] %2 == 0) && $i % 2 == 0 ){
   
         $niz[$i] *= -1;

  }

} var_dump($niz);
echo "<hr>";
//Zadatak 13
//Odrediti broj parnih elemenata sa 
//neparnim indeksom

$brojevi = [12, 2, -4, 7, -11, 0, 3];
$brojac = 0;
for($i = 1; $i < count($brojevi); $i += 2){
    if($brojevi[$i] % 2 == 0){
        $brojac++;
    }
}
echo "<p>Broj parnih elemenata sa neparnim indeksom: $brojac</p>";
echo "<hr>";
//Zadatak 14
//Ispisati dužinu svakog elementa u nizu 
//stringova.

$imena = ["Stefan", "Aleksandar", "Adam", "Marija", "Dunja", "Milijana"];

for($i= 0; $i < count($imena); $i++)
{
  $ime = $imena[$i];
  $duzina = mb_strlen($ime, "UTF-8");   
  echo "<p>Duzina stringa $ime je $duzina</p>";
}
echo "<hr>";
/////////////////////////////////////////////////////////////////////////////////////////
//Zadatak 15
//Odrediti element u nizu stringova sa 
//najvećom dužinom

$stringMaxDuzine = $imena[0];
$maxDuzina = strlen($imena[0]);

for($i = 1; $i < count($imena); $i++)
{
  if(strlen($imena[$i]) > $maxDuzina){
    $maxDuzina = strlen($imena[$i]);
    $stringMaxDuzine = $imena[$i];
  }
}
 echo "<p>Element niza sa maksimalnom duzinom je: $stringMaxDuzine</p>";

 echo "<hr>";
//////////////////////////////////////////////////////////////////////////////////////
//Zadatak 17
// Odrediti broj elemenata u nizu stringova 
// koji sadrže slovo 'a'

//Kako da odredimo da li se u nekom stringu nalazi neki podstring?
//Koristmo funkciju strpos ($str1, $str2)
//Rezultat poziva ove funkcije:
//1) Ako se $str2 nalazi unutar $str1, onda se vraca INDEKS prvog pojavljivanja
// CEO broj (0,1,2,3,.....)
//2) Ako se $str2 ne nalazi unutar $str1, onda se vraca FALSE
// LOGIČKA VREDNOST
// 0 je false ako pitamo != false, izbacuje netacno, mora da bude jednak i po tipu i po vrednosti
// moze i str conteinse

// if(strpos("Sredaaa", "S") !== false)
// {
//   echo "<p>String 'S' se nalazi u stringu 'Sredaaaa'</p>";
// }
// else 
// {
//   echo "<p>String 'S' se ne nalazi u stringu 'Sredaaaa'</p>";
// }

$imena = ["Uroš", "Maja", "Stefan"];
$brojSadrziA = 0;

for($i=0; $i<count($imena); $i++)
{
  if(strpos($imena[$i], "a") !==false)
  {
    $brojSadrziA++;
  }
} 
echo "<p>Broj stringova koji sadrže slovo 'a' je $brojSadrziA</p>";

//Zadatak 18
// Odrediti broj elemenata u nizu stringova 
// koji počinju na slovo 'a' ili 'A'. 

$brojpocinjeA = 0;

for($i=0; $i<count($imena); $i++)
{
  if(strpos($imena[$i], "a") === 0 || strpos($imena[$i], "A") === 0 )
  //if (strtolower ($imena[$i][0] == 'a'))
  {
    $brojSadrziA++;
  }
} 
echo "<p>Broj stringova koji pocinju sa slovo 'a' je $brojpocinjeA</p>";

?>