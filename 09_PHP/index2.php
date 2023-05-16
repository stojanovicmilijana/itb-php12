<?php
/* Zadatak 3*/

$cena = 1400;
$nov = 2000;
$kusur = $nov - $cena;
echo "<br>";
echo "Kusur je: " . $kusur;
echo $kusur;

/*Zadatak 4*/

$eur = 100;
$kursEur = 117.5;
$din = $eur * $kursEur;
echo "<br>";
echo "Vrednost u dinarima nakon konverzije: " . $din;
echo "<br>";


/*Zadatak 5*/
$din = 10000;
$eur = $din / $kursEur;
echo "<br>";
echo "Vrednost u dinarima nakon konverzije: " . $eur;

/* Zadatak 6*/
$eur = 100;
$kursEurDin = 117.5;
$kursDolDin = 106.7;
// $din = $eur * $kursEurDin;
// $dol = $din / $kursDolDin;
$dol = ($eur + $kursEurDin) / $kursDolDin;

echo "<br>";
echo "Vrednost u dolarima nakon konverzije: " . $dol;
echo "<br>";

/*zadatak 10. */
$cena = 70;
$popust = 20;
$cenabezpopusta = $cena * 100 / (100 - $popust);
echo "<br>";
echo "Cena bez popusta: " . $cenabezpopusta;
echo "<br>";

//Drugi nacin

$udeo = (100-$popust)/100;
$cenabezpopusta = $cena / $udeo;
echo "Cena bez popusta: " . $cenabezpopusta;
echo "<br>";

//Zadatak 11. 

// boc : 3 -> 1 dan ,  0 tableta neiskor
// boc : 4 -> 1 dan, 1 tableta neisk
// boc :5 -> 1 dan, 2 tablete neisk
// boc : 6 -> 2, 0 tableta neisk
// boc : 7 -> 2dana, 1 tableta neisk
// boc : 8 -> 2 dana, 2 tablete neisk
// boc : 9 -> 3 dana, 0 tableta neisk

$n = 56;
$brojDana =floor($n / 3);
$brojNeiskorTableta = $n % 3;
echo "<br>";
echo "Broj dana: " . $brojDana;
echo "<br>";
echo "Broj neiskorTableta: " . $brojNeiskorTableta;
echo "<br>";








?>