<?php

//Zadatak 1
 
$a = 19.35;
$b = -3.14;

if ($a > $b)
{
  echo "<p>Veci je broj $a</p>";
}
else{
  echo "<p> Veci je broj $</p>";
}

//zadatak 4
$dobaDana = date("a");


if ($dobaDana == "am")

{
  echo "<p>Pre podne</p>";

}
else 
{
  echo "<p>Posle podne</p>";
}

// Alternativno

if ($dobaDana == "pm")
{
  echo "<p>Posle podne</p>";
}
else{
  echo "<p>Pre podne</p>";
}

//Zadatak 3

$pol = "M";

if ($pol == "M")
{
  echo "<p> <img src ='images/m.png' alt='muskipol' </p>";

}
else{
  echo "<p> <img src ='images/f.png' alt='zenskipol' </p>";
}

// zadatak 2

$temp = -1 ;

if ($temp >= 0)
{
  echo "<p> $temp je u plusu </p>";
}
else
{
  echo "<p> $temp je u minusu </p>";
}

//zadatak 5

$godina = date('Y');
$godRodj = 1995;

$rez = $godina - $godRodj;
//echo "<p>$rez</p>";

if($rez >= 18)
{
  echo "<p>Osoba je punoletna </p>";
}
else
{
  echo "<p>Osoba nije punoletna</p>";
}

//zadatak 6
$a = 9;
$b = -6;
$c = 6;


//zadatak 17
$a = 5;
$b = 9;
$c = -3;

$max = $a;

if ( $b > $max)
{
  $max = $b;
}
if ( $c > $max)
{
  $max = $c;
}

$min = $a;
if ($b < $min)
{
  $min = $b;
}







?>