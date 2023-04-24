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

//$ n = $i = 10;
$n = 5;
$m = 10;
$suma = 0;
$i = $n;

while ($n <= $m){
 $suma += $n;
 $i++;
} 
echo "<p>Suma brojeva od $n do $m je: $suma";

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

 //Zadatak 9
// Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m 




?>

