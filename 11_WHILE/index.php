<?php

//While petlja
/* 
 1.Postavite početnu vrednost - inicijalizacija
 2.Whille (uslov)
  2.a. TRUE - Blok naredbi koji se odvija ukoliko je uslov u while petlji ispunjen 
  2.b. FALSE - Ne izvršava se blok naredbi 
  */

  //1.Zadatak
  //ispisati brojeve od 1 do 20
  // a) Sve u istom redu
  // b) Svaki u novom redu


 $i = 1;
 while($i <= 20){
    echo "$i ";
    $i++;
 }
 // Vrednost i nakon petlje je 21

//Ekvivalentni izrazi za povecavanje za jedan su:
// $i++;
// $i += 1;
// $i = $i + 1;



// 2.Zadatak

// Ispisati brojeve od 20 do 1

$i = 20;
while ($i >= 1){
  echo "$i ";
  $i--;
}
echo  "<i>$i</i>";
// $i 

// Zadatak 4
//Kreirati n paragrafa sa proizvoljnim tekstom i naizmenično ih obojiti u tri različite boje
$n = 5;
$i = 1;

while($i <= $n){
  if($i%3 == 0){
    echo "<p style='color:red;'>Hello world</p>";
  }
  echo "<p>Hello</p>";
  $i++;
}

// Zadatak 3



while($i<=20){
  if($i%2 == 0){
   echo "<p>$i</p>";
  }
   $i++;
}




//zadatak br 6
//Odrediti sumu brojeva od 1 do 100

$i = 1;
$suma = 0;

while($i <=100)
{
  $suma += $i;
  $i++;

}
echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";

// zadatak 7
$i=1;
$n = 150;
$suma = 0;

while($i <= 100)
{
  $suma += $i;
  $i++;
}
echo "Suma {$n} brojeva {$i}: {$suma}";

//Zadatak 8
//Odrediti sumu brojeva od n do m *

$n = $i = 10;
$m = 22;
$suma = 0;

 while ($i <= $m){
    $suma += $i;
     $i++;
 } 
 echo "<p>Suma brojeva od $n do $m je: $suma</p>";

//zadatak 9

 //odrediti proizvod brojeva od n do m

 $p = 1 ; //mnozenje je neutralno kada se mnozi sa 1 ,za sabiranje je to 0 , proizvod ide pre petlje da se ne bi resetovao svaki put
 $n = $i = 5; //dodeliti vrednost i da i ona ima pocetnu vrednost
 $m = 7;

   while ($i <= $m){
    $p *= $i;
    $i++;
  }
  echo "Proizvod brojeva od $n do $m je: $p";

 //Zadatak 10
// Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m 

$p = 1;
$n = $i = 1;
$m = 10;
$parni=0;
$neparni=0;
while($i <= $m )
{
    if($i % 2 ==0)
    {
        $parni =($i * $i) + $parni; //$i**2  to bi znacilo $i na kvadrat
    }
    else
    {
        $neparni = ($i * $i *$i) + $neparni; // $i na kub je $i**3
    }
$i++;
}
echo "Suma parnih je $parni suma neparnih je $neparni";

// Zadatak 11
// Odrediti sa koliko brojeva je deljiv uneti broj k

$br = 0; //brojac
$k = 15; 
$i = 1;

while($i <= $k) {
   if($k % $i == 0) {
      $br++;
   }
   $i++;
}
echo "<p>Broj $k ima $br delilaca</p>";

// 12.zadatak
// Odrediti da li je dati prirodan broj n prost. Broj je prost ako je deljiv samo sa jedan i sa samim sobom. 

// 1 način
$br = 0; //sa koliko brojeva je deljiv uneti brok $k
$k = 13;  //uneti broj
$i = 1; // iterator koji pokušava da deli uneti broj $k

while($i <= $k) {
   if($k % $i == 0) {
      $br++;
   }
   $i++;
}

if($br == 2){
  echo "<p>Broj $k je prost</p>";
} 
else {
  echo "<p>Broj $k nije prost</p>";
}

// 2 nacin
$k = 6;
$i = 2;
$prost = true; // pretpostavka da je broj prost

while ($i < $k){   // ovde moze i do polovine k da ide $k/2 ili teorema kvadratni koren tog broja to je manje ili jednako <= sqrt ($k)
    if($k % $i == 0){
      $prost = false;
      break;
    }
    $i++;
}
if ($prost == true){
  echo "<p> Broj $k jeste prost</p>";
}
else {
  echo "<p>Broj $k nije prost</p>";
}


//ZAdatak 13
//Množiti sve brojeve od 20 ka 1, 
// sve dok proizvod ne predje 10.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.

$i = 20;

$p = 1;



while($i >= 1){
   $p = $p * $i;
   if($p > 10000){
     break;
   }
   $i--;
} 

// 2 nacin


$n = 21;
$p = 1;
while ($p <= 10000 && $n >= 1) {
    $n--;
    $p *= $n;
}
echo "<p>Poslednji broj koji je ucestvovao u mnozenju je :<span  style='color: green;'>$n</span></p>";
echo "<p>Krajnji rezultat je :<span style='color: red;'>$p</span></p>";
echo "<p>Poslednji broj koji je ucestvovao je $i</p>";
echo "<p>Proizvod je $p</p>";



//Zadatak 14


//14) Uneti 2 broja. Ukoliko je prvi broj manji od drugog broja, 
//množiti prvi broj samim sobom, sve dok rezultat ne bude veći od 
//drugog unetog broja. U suprotnom na ekranu ispisati “GREŠKA”.

// 1 nacin

$n = 8;
 $m= 132;
 if($n < $m){
      $rez = $n;
      while($rez <= $m){
        $rez *= $n;
      }
      echo $rez;
 } else {
    echo "<p>Greska</p>";
 }
// 2 nacin
$n = 2;
$m = 7;
$pomocna =$n;
$proizvod = 1;
while ($n <= $m && $proizvod <= $m) {
    $proizvod = $proizvod * $pomocna;
    $n++;
}
if ($proizvod >= $m) {
    echo "<p>Greska</p>";
} else {
    echo "<p>Proizvod je $proizvod</p>";
}


?>














