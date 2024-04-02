<?php
require_once "Automobil.php";


/* OVAKO SMO RADILI KADA SU POLJA JAVNA U OSNOVNOJ KLASI - PUBLIC POLJA I METODE
$v = new Vozilo();
//$v->boja="bela"; KAD SU POLJA JAVNA
//$v->tip="BMW";
//echo "<p>$v->boja, $v->tip</p>";
$v->voziVozilo();
//$v->voziAutomobil(); nije dobro - osnovna klasa nema polja i metode iz izvedenih klasa

$a= new Automobil();
//$a->boja="zuta";KAD SU POLJA JAVNA
//$a->tip="Peugeout";
//echo "<p>$a->boja, $a->tip</p>";
$a->voziVozilo(); // ovo jeste dobro - izvedena klasa je nasledila polja i metode iz osnovne klase;
$a->voziAutomobil(); // ovo jeste dobro - izvedena klasa moze da ima svoje specificne polja i metode
*/


$v=new Vozilo("bela", "BMW");
$v->voziVozilo();


$a = new Automobil("zuta","Peugeout");
$a-> voziVozilo();
$a-> voziAutomobil();




?>