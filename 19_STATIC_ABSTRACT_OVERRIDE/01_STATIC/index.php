<?php
require_once "Krug.php";

echo "<p>Broj krugova do sada je: ".Krug::getBrojKrugova()."</p>";

$a= new Krug(10);//$a->r=10

echo $a->obimKruga() ."<br>"; //2* $a->r * 3.14
echo $a->povrsinaKruga()."<br>";// $a->r * $a->r * 3.14



$b= new Krug(4);
echo $b->obimKruga() ."<br>"; //2* $a->r * 3.14
echo $b->povrsinaKruga()."<br>";// $a->r * $a->r * 3.14


echo "<p>Broj krugova do sada je: ".Krug::getBrojKrugova()."</p>";

echo KRUG::PI;


$c= new Krug(2);
echo $a->obimKruga() ."<br>"; //2* $a->r * 3.14
echo $a->povrsinaKruga()."<br>";// $a->r * $a->r * 3.14
//$a->pi=3.14159;//ovako postavimo ako je public
$a->setPI(3.14159);
echo $a->obimKruga() ."<br>"; //2* $a->r * 3.14
echo $a->povrsinaKruga()."<br>";

echo Krug::getPi()."<br>";
Krug::setPi(3.14159);
echo Krug::getPi()."<br>";



echo "<p>Broj krugova do sada je: ".Krug::getBrojKrugova()."</p>";


$d= new Krug(2.7);
echo $d->obimKruga() ."<br>"; //2* $a->r * 3.14
echo $d->povrsinaKruga()."<br>";
Krug::setBrojDecimala(4);
echo $d->obimKruga() ."<br>"; //2* $a->r * 3.14
echo $d->povrsinaKruga()."<br>";


$f=new Krug(7);

echo "<p>Broj krugova do sada je: ".Krug::getBrojKrugova()."</p>";




?>