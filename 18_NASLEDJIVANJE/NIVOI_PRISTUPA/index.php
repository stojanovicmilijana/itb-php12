<?php



require_once "Vozilo.php";
require_once "Automobil.php";

$v = new Vozilo("a", "b", "c");
$v->ispis();


//$v->privatnoPolje; - GRESKA - VAN klase ne mozemo da pristupamo privatnim poljima i metodama
//$v->zasticenoPolje - GRESKA - VAN klase ne mozemo da pristupamo privatnim poljima i metodama
//$v->javnoPolje - OK

$a = new Autombil("d", "e", "f", 5);
$a->ispis();
$a->ispisAuto();



?>