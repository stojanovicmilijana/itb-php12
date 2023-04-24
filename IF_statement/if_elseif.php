<?php

$br = 30;

if ($br <= 10)
{
  echo "<p>Broj prve desetice</p>";
}
elseif ($br <= 20)
{
  echo "<p>Broj druge desetice</p>";
}
else{
  echo "<p>Broj je veci od 20</p>";
}

//zadatak 7
$poeni = 73;

if ($poeni <= 50 )
{
  echo "<p>Student je pao ispit</p>";
}
elseif($poeni <= 60)
{
  echo "<p>ocena 6</p>";
}
elseif($poeni <= 70)
{
  echo "<p>ocena 7</p>";
}
elseif($poeni <= 80)
{
  echo "<p>ocena 8</p>";
}
elseif($poeni <= 90)
{
  echo "<p>ocena 9</p>";
}
else{
  echo "<p>ocena 10</p>";
}
// zadatak 8
$dayofweek =  date('w');

//echo "<p>$dayofweek</p>";

if ($dan == 0) // nedelja
{
  echo "<p>Vikend</p>";
}
elseif ($dan == 6) //subota
{
  echo "<p>Vikend</p>";
}
else{
  echo "<p> Radni dan </p>";
}




// //zadatak 9
// date_default_timezone_set('Europe/Belgrade');

// $time = date ("H");

// if($time < 12)
// {
//    echo "<p>Dobro jutro";
// } 
// elseif ($time < 18)
// {
//   echo "<p>Podne";
// } else 
// {
//   echo "<p>Dobro vece</p>";
// }

//Zadatak 10
//Prvi datum
// $d1 = 21;
// $n1 = 4;
// $g1 = 2023;
// //Drugi datum 
// $d2 = 18;
// $n2 = 7;
// $g2 = 1980;

// if($g1 < $g2)
// {
//   echo "<p>Raniji datum je $d1.$n1.$g1.</p>";
// }
// elseif ($n2 < $n1)
// {
//   echo "<p>Raniji datum je $d2.$n2.$g2</p>";

// }
// elseif ($d){
//   echo 
// }

// elseif(){
//   echo
// }

// else if


//zadatak 11
//koristimo promenljivu sati iz zadatka br 9

if($time < 9)
{
  echo "<p>Firma ne radi</p>";
}
elseif ($time >= 17)
{
  echo "<p>Firma ne radi</p>";
}
else
{
  echo "<p>Firma radi</p>";
}

// // Zadatak 12
// //prvi lekar

// $p1 = 9;
// $k1 = 17;

// //drugi lekar

// $p2 = 11;
// $k2 = 18;

// if ($k1 < $p2)
// {
//   echo "<p>Ne preklapaju se</p>";
// }
// elseif
// {
//   echo "<p>Ne preklapaju se</p>";
// }
// else{
//   echo "<p>Preklapaju se</p>";

// }

//zadatak 13
$n = 13;

if($n % 2 == 0)
{
  echo "<p>$n je paran</p>";
}
else 
{
  echo "<p>$n je neparan</p>";
}



//zadatak 15
// $br1 = 20;
// $br2 = 15;
// $rez = $br1 - $br2;
// $rez2 = $br2 - $br1;

// if ($br1 > $br2)
// {
//   echo "<p>$rez</p>";
// }
// else
// {
//  echo "<p>"
// }









?>